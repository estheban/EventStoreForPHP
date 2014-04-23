<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore;

use Bgy\EventStore\Utils\Ensure;

class ConnectionSettings
{
    private $verboseLogging;
    private $maxQueueSize;
    private $maxConcurrentItems;
    private $maxRetries;
    private $maxReconnections;
    private $requireMaster;
    private $reconnectionDelay;
    private $operationTimeout;
    private $operationTimeoutCheckPeriod;
    private $defaultUserCredentials;
    private $useSslConnection;
    private $sslValidateServer;
    private $host;
    private $heartbeatInterval;
    private $heartbeatTimeout;
    private $clientConnectionTimeout;

    public function __construct(
        $verboseLogging,
        $maxQueueSize,
        $maxConcurrentItems,
        $maxRetries,
        $maxReconnections,
        $requireMaster,
        $reconnectionDelay,
        $operationTimeout,
        $operationTimeoutCheckPeriod,
        $defaultUserCredentials,
        $useSslConnection,
        $sslValidateServer,
        $host,
        $heartbeatInterval,
        $heartbeatTimeout,
        $clientConnectionTimeout
    )
    {

        Ensure::positive($maxQueueSize, 'maxQueueSize');
        $this->maxQueueSize = $maxQueueSize;

        Ensure::positive($maxConcurrentItems, 'maxConcurrentItems');
        $this->maxConcurrentItems = $maxConcurrentItems;

        Ensure::min(-1, $maxConcurrentItems, 'maxConcurrentItems');
        $this->maxRetries = $maxRetries;

        Ensure::min(-1, $maxReconnections, 'maxReconnections');
        $this->maxReconnections = $maxReconnections;

        $this->verboseLogging              = $verboseLogging;
        $this->requireMaster               = $requireMaster;
        $this->reconnectionDelay           = $reconnectionDelay;
        $this->operationTimeout            = $operationTimeout;
        $this->operationTimeoutCheckPeriod = $operationTimeoutCheckPeriod;
        $this->defaultUserCredentials      = $defaultUserCredentials;
        $this->useSslConnection            = $useSslConnection;
        $this->sslValidateServer           = $sslValidateServer;
        $this->host                        = $host;
        $this->heartbeatInterval           = $heartbeatInterval;
        $this->heartbeatTimeout            = $heartbeatTimeout;
        $this->clientConnectionTimeout     = $clientConnectionTimeout;
    }

    static public function create()
    {
        return new ConnectionSettingsBuilder();
    }
} 
