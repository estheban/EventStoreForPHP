<?php

require 'vendor/autoload.php';
require 'src/Bgy/EventStore/Transport/Tcp/ClientMessageDtos.php';

use Bgy\EventStore\Utils\Uuid;
use Rhumsaa\Uuid\Uuid as RhumsaaUuuid;
use EventStore\Client\Messages\NewEvent;
use EventStore\Client\Messages\WriteEvents;

class User {
    public $id;
}

class UserRegistered {
    public $uuid;

    public function __construct($uuid) {
        $this->uuid = $uuid;
    }
}

$userId = new Uuid();
$user = new User();
$user->id = $userId;

$writeEvents = new WriteEvents();
$writeEvents->setEventStreamId('users-' . (string) $user->id, \Bgy\EventStore\ExpectedVersion::ANY);
$writeEvents->setExpectedVersion(\Bgy\EventStore\ExpectedVersion::ANY);
$writeEvents->setRequireMaster(true);

$newEvent = new NewEvent();
$eventId = new Uuid();
$newEvent->setEventId((string) $eventId);
$newEvent->setEventType('UserRegistered');
$newEvent->setDataContentType(1);
$newEvent->setMetadataContentType(1);
$newEvent->setData(json_encode(new UserRegistered($userId)));

$writeEvents->appendEvents($newEvent);

$message = $writeEvents->serializeToString();

// TCP socket client
$address = '10.1.3.33';
$port = 1113;

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
    die (sprintf("Failed to create socket: %s\n", socket_strerror(socket_last_error())));
}

echo sprintf("Connecting to %s:%s\n", $address, $port);
$result = socket_connect($socket, $address, $port);
if ($socket === false) {
    die (sprintf("Connection failed: %s %s\n", $result, socket_strerror(socket_last_error($socket))));
}

$commandsMap = [
    "HeartbeatRequestCommand"           => 0x01,
    "HeartbeatResponseCommand"          => 0x02,
    "Ping"                              => 0x03,
    "Pong"                              => 0x04,
    "PrepareAck"                        => 0x05,
    "CommitAck"                         => 0x06,
    "SlaveAssignment"                   => 0x07,
    "CloneAssignment"                   => 0x08,
    "SubscribeReplica"                  => 0x10,
    "ReplicaLogPositionAck"             => 0x11,
    "CreateChunk"                       => 0x12,
    "RawChunkBulk"                      => 0x13,
    "DataChunkBulk"                     => 0x14,
    "ReplicaSubscriptionRetry"          => 0x15,
    "ReplicaSubscribed"                 => 0x16,
    "WriteEvents"                       => 0x82,
    "WriteEventsCompleted"              => 0x83,
    "TransactionStart"                  => 0x84,
    "TransactionStartCompleted"         => 0x85,
    "TransactionWrite"                  => 0x86,
    "TransactionWriteCompleted"         => 0x87,
    "TransactionCommit"                 => 0x88,
    "TransactionCommitCompleted"        => 0x89,
    "DeleteStream"                      => 0x8A,
    "DeleteStreamCompleted"             => 0x8B,
    "ReadEvent"                         => 0xB0,
    "ReadEventCompleted"                => 0xB1,
    "ReadStreamEventsForward"           => 0xB2,
    "ReadStreamEventsForwardCompleted"  => 0xB3,
    "ReadStreamEventsBackward"          => 0xB4,
    "ReadStreamEventsBackwardCompleted" => 0xB5,
    "ReadAllEventsForward"              => 0xB6,
    "ReadAllEventsForwardCompleted"     => 0xB7,
    "ReadAllEventsBackward"             => 0xB8,
    "ReadAllEventsBackwardCompleted"    => 0xB9,
    "SubscribeToStream"                 => 0xC0,
    "SubscriptionConfirmation"          => 0xC1,
    "StreamEventAppeared"               => 0xC2,
    "UnsubscribeFromStream"             => 0xC3,
    "SubscriptionDropped"               => 0xC4,
    "ScavengeDatabase"                  => 0xD0,
    "ScavengeDatabaseCompleted"         => 0xD1,
    "BadRequest"                        => 0xF0,
    "NotHandled"                        => 0xF1,
    "Authenticate"                      => 0xF2,
    "Authenticated"                     => 0xF3,
    "NotAuthenticated"                  => 0xF4,
];

$tcpFlagsMap = [
    "None" => 0x00,
    "Authenticated" => 0x01,
];


function createTcpPacket($command, RhumsaaUuuid $correlationId, $payload) {
    global $commandsMap, $tcpFlagsMap;

    $payloadSize = strlen($payload);
    $contentLength = $payloadSize + 22;
    $packet = new \TrafficCophp\ByteBuffer\Buffer($contentLength);
    $packet->writeInt32LE($contentLength, 0);
    $packet->writeInt8($commandsMap[$command], 4);
    $packet->writeInt8($tcpFlagsMap["None"],   5);
    $correlationIdBytes = $correlationId->getBytes();
    $packet->write($correlationIdBytes, 6);

    printf("=> Creating TCP packet\n");
    printf("=> Local correlation id: %s\n", $correlationId->toString());
    printf("=> Resolved correlation id: %s\n", RhumsaaUuuid::fromString(bin2hex($packet->read(6, 16)))->toString());
    printf("=> hex TCP packet: %s\n",  bin2hex($packet->read(0, $packet->length())));

    if ($payloadSize > 0) {
        $packet->write($payload, 21);
    }

    return $packet;
}

function sendTcpPacket($command, $payload, $options, $callback) {
    global $socket;
    $packet = createTcpPacket($command, RhumsaaUuuid::uuid4(), null);
    socket_write($socket, (string) $packet);
}

function onData($packet) {

}

function process($packet) {

}

sendTcpPacket('Ping', null, null, null);


//var payloadSize = payload ? payload.length : 0;
//var contentLength = payloadSize + 17;
//var packet = new Buffer(contentLength + 4);
//packet.writeUInt32LE(contentLength, 0);
//packet.writeUInt8(TcpCommands.codeForType[command], 4);
//  uuid.parse(correlationId, packet, 5);
//  if (payloadSize > 0) {
//      payload.copy(packet, 21);
//  }
//  return packet;
//
//$i = 0;
//$length = strlen($message);
//$stPart = str_split($message, 8192);
//$parts = round($length / 8192);
//
//if ($length > 8192) { //in chunks
//    while ($i < $parts){
//        echo sprintf("Sending packet %s/%s...\n", $i, $parts);
//        $sent = socket_write($socket, $stPart[$i], $length);
//        $i++;
//    }
//} else{ // message sent at once
//    echo "Sending packet...\n";
//    $sent = socket_write($socket, $message, $length);
//}
//
//echo "OK - Sent.\n";
//
echo "\nReading response from the server:\n";
$response = '';
while ($bytes = socket_recv($socket, $response, 2048, 0)) {
    printf("<= Received response: %s\n", bin2hex($response));
    $responseBuffer = new \TrafficCophp\ByteBuffer\Buffer($response);
    $commandNamesMap = $commandsMap;
    $commandNamesMap = array_flip($commandNamesMap);
    $contentLength  = $responseBuffer->readInt32LE(0);
    $command        = $commandNamesMap[$responseBuffer->readInt8(4)];
    $authFlag       = $responseBuffer->readInt8(5);
    $correlationId  = RhumsaaUuuid::fromBytes($responseBuffer->read(6, 16));



    var_dump($contentLength, $command, $authFlag);

    if ("HeartbeatRequestCommand" === $command) {
        sendTcpPacket('HeartbeatResponseCommand', null, null, null);
    }
}

socket_close ($socket);
