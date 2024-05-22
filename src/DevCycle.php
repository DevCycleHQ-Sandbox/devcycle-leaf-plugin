<?php

namespace DevCycle;

use DevCycle\Api\DevCycleClient;
use DevCycle\Model\DevCycleOptions;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../../../');
$dotenv->load();

class DevCycle
{
  public $devcycleClient;

  function __construct()
  {
    $devcycleOptions = new DevCycleOptions();
    $this->devcycleClient = new DevCycleClient(
      sdkKey: $_ENV["DEVCYCLE_SERVER_SDK_KEY"],
      dvcOptions: $devcycleOptions
    );
  }

  public static function ping()
  {
    return "Pong!";
  }
}
