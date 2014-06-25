<?php

require 'vendor/autoload.php';
require 'src/Bgy/EventStore/Transport/Tcp/ClientMessageDtos.php';

use Bgy\EventStore\Utils\Uuid;

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

$i = 0;
$length = strlen($message);
$stPart = str_split($message, 8192);
$parts = round($length / 8192);

if ($length > 8192) { //in chunks
    while ($i < $parts){
        echo sprintf("Sending packet %s/%s...\n", $i, $parts);
        $sent = socket_write($socket, $stPart[$i], $length);
        $i++;
    }
} else{ // message sent at once
    echo "Sending packet...\n";
    $sent = socket_write($socket, $message, $length);
}

echo "OK - Sent.\n";

echo "\nReading response from the server:\n";
$response = '';
while ($bytes = socket_recv($socket, $response, 2048, 0)) {
    echo $response;
}

socket_close ($socket);
