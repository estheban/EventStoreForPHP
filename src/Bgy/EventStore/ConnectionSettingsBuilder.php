<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Bgy\EventStore;

class ConnectionSettingsBuilder
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

    public function enableVerboseLogging()
    {
        $this->verboseLogging = true;

        return $this;
    }

    public function keepRetrying()
    {
        $this->maxRetries = -1;

        return $this;
    }

    public function keepReconnecting()
    {
        $this->maxReconnections = -1;

        return $this;
    }

    public function performMasterOnly()
    {
        $this->requireMaster = true;

        return $this;
    }

    public function performOnAnyNode()
    {
        $this->requireMaster = false;

        return $this;
    }

    public function setOperationTimeoutTo($operationTimeoutInSeconds)
    {
        $this->operationTimeout = (int) $operationTimeoutInSeconds;

        return $this;
    }

    public function setDefaultUserCredentials(UserCredentials $userCredentials)
    {
        $this->defaultUserCredentials = $userCredentials;

        return $this;
    }

    public function build()
    {
        return new ConnectionSettings(

        );
    }
}
