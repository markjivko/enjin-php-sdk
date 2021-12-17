# Blockchain SDK by Enjin for PHP

Create blockchain applications using the PHP programming language.

[Learn more](https://enjin.io/) about the Enjin blockchain platform.

Sign up to Enjin Cloud: [Kovan (Testnet)](https://kovan.cloud.enjin.io/),
[Mainnet (Production)](https://cloud.enjin.io/) or [JumpNet](https://jumpnet.cloud.enjin.io/).

### Resources

* [Enjin Docs](https://docs.enjin.io)

### Table of Contents

* [Compatibility](#compatibility)
* [Installation](#installation)
* [Quick Start](#quick-start)
* [Contributing](#contributing)
    * [Issues](#issues)
    * [Pull Requests](#pull-requests)
* [Copyright and Licensing](#copyright-and-licensing)

## Compatibility

The Enjin PHP SDK requires at a minimum PHP7.

## Installation

Simply clone this Git repository and use inside your PHP projects using a PSR-4 Autoloader.

## Quick Start

This example showcases how to quickly create and authenticate a client on the project schema which will then allow us to
make further requests to the platform.

```php
Enjin Platform SDK for PHP

use Enjin\Sdk\EnjinHosts;
use Enjin\Sdk\ProjectClient;
use Enjin\Sdk\GraphQL\Request\Project;
use Enjin\Sdk\GraphQL\Request\Shared;

// Get the project client
$projectClient = new ProjectClient(EnjinHosts::KOVAN, true);

// Authenticate project
$accessToken = $projectClient->authProject(
    (new Project\Query\AuthProject())
        ->setUuid('00000000-0000-0000-0000-000000000000')
        ->setSecret('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA')
);

// Store the authentication token
if (null !== $accessToken) {
    echo 'Client is now authenticated' . PHP_EOL;
    $projectClient->auth($accessToken->getToken());
    
    // Get gas prices
    $gasPrices = $projectClient->getGasPrices(new Shared\Query\GetGasPrices());
}
```

## Contributing

Contributions to the SDK are appreciated!

### Issues

You can open issues for bugs and enhancement requests.

### Pull Requests

If you make any changes or improvements to the SDK, which you believe are beneficial to others, consider making a pull
request to merge your changes to be included in the next release.

Ensure that tests under the `sdk` module are passing and add any necessary test classes or test cases for your code.

Be sure to include your name in the list of contributors.

## Copyright and Licensing

The license summary below may be copied.

```text
Copyright 2021 Enjin Pte. Ltd.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
```