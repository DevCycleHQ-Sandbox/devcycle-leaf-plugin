# DevCycle Leaf PHP Extension

This repository provides an extension for the Leaf PHP framework that integrates DevCycle, a comprehensive feature management platform. This extension simplifies the process of managing feature flags and configurations through DevCycle by wrapping the DevCycle API with a convenient PHP class.

> [!IMPORTANT]
> This extension has been created as part of a livestream series, is not actively maintained, and should not be used in production. Please check out the series on [YouTube](#) for more information.

## Features

- Easy integration with DevCycle using Leaf PHP framework.
- Simple setup with minimal configuration.
- Provides a ready-to-use DevCycle client for your Leaf PHP applications.

## Installation

To install this extension, you can use Composer. Run the following command in your project directory:

```bash
composer require devcycle/devcycle-leaf-plugin
```

## Usage

### Configuration

First, ensure you have your DevCycle Server SDK key. You can obtain this from the DevCycle dashboard.

### Example

Here is an example of how to use this extension in your Leaf PHP application:

```php
require 'vendor/autoload.php';

use DevCycle\DevCycle;

// Initialize the DevCycle client with your Server SDK key
$server_sdk_key = 'YOUR_SERVER_SDK_KEY';
$devCycle = new DevCycle($server_sdk_key);

// Get the DevCycle client
$client = $devCycle->getDevCycleClient();

// Now you can use the $client to manage feature flags, configurations, etc.
```

## API

### `DevCycle`

The main class of this extension. It initializes the DevCycle client.

#### `__construct($server_sdk_key)`

- `$server_sdk_key`: Your DevCycle Server SDK key.

Initializes the DevCycle client with the provided key.

#### `getDevCycleClient()`

Returns the initialized DevCycle client instance.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Acknowledgements

- [DevCycle](https://devcycle.com/) for providing a robust feature management platform.
- [Leaf PHP Framework](https://leafphp.dev/) for providing a simple and powerful PHP framework.
