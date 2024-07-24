<?php

namespace DevCycle;

use DevCycle\Api\DevCycleClient;
use DevCycle\Model\DevCycleOptions;

class DevCycle
{
    public $devcycleClient;

    function __construct($server_sdk_key)
    {
        $devcycleOptions = new DevCycleOptions();
        $this->devcycleClient = new DevCycleClient(
            sdkKey: $server_sdk_key,
            dvcOptions: $devcycleOptions
        );
    }

    public function getDevCycleClient()
    {
        return $this->devcycleClient;
    }
}
