# PHP Event Store Client library for [GetEventStore](http://geteventstore.com)

This is a ~~draft~~, work in progress, an experiment of implementation of a client library for [GetEventStore](http://geteventstore.com)
abstracting transport and aimed to work with both the Protobuf protocol or the HTTP API.

It is heavily inspired (and by some accounts generated from) the .NET client library.

## Requirements

* PHP >= 5.4


## 1. Quick start

## 2. Overview

### Theory of operations
#### Low-level operations example

This is an example of a low level operations.

the `makeOperation` of the `Transport` makes a transactional operation to the Event Store.
This means you may commit several events at once transactionally.

This API is not aimed to be used directly but through a Façade which would abstract
some inner mechanism relevant to how the GetEventStore storage works.


```php
<?php

require 'vendor/autoload.php';

$httpClient = new \Bgy\EventStore\Transport\Http\HttpClient();
$transport = new \Bgy\EventStore\Transport\Http\HttpTransport($httpClient);

class User {
    public $id;
}

$user = new User();
$user->id = Uuid::generate();

$transport->makeOperation(
    new \Bgy\EventStore\Operation\AppendToStreamOperation(
        true,
        'users-' . (string) $user->id,
        \Bgy\EventStore\ExpectedVersion::ANY,
        [
            new \Bgy\EventStore\EventData(
                new \Bgy\EventStore\Utils\Uuid(),
                'UserRegistered',
                new UserRegistered($uuid ),
                []
            ),
        ]
        ,
        null
    )
);

$transport->makeOperation(
    new \Bgy\EventStore\Operation\AppendToStreamOperation(
        true,
        'users-' . (string) $user->id,
        \Bgy\EventStore\ExpectedVersion::ANY,
        [
            new \Bgy\EventStore\EventData(
                new \Bgy\EventStore\Utils\Uuid(),
                'UserJoinedGroup',
                new UserJoinedGroup(new Group('admin')),
                []
            ),
            new \Bgy\EventStore\EventData(
                new \Bgy\EventStore\Utils\Uuid(),
                'UserLeftGroup',
                new UserLeftGroup(new Group('admin')),
                []
            ),
            new \Bgy\EventStore\EventData(
                new \Bgy\EventStore\Utils\Uuid(),
                'UserJoinedGroup',
                new UserJoinedGroup(new Group('admin')),
                []
            )
        ]
        ,
        null
    )
);
```

## 3. Operations

## 4. Contributing

1. Take a look at the [list of issues](http://github.com/borisguery/EventStoreForPHP).
2. Fork
3. Write a test (for either new feature or bug)
4. Make a PR

## 5. Authors

* Boris Guéry    - guery.b@gmail.com  - [@borisguery](http://twitter.com/borisguery) - http://borisguery.com

## 6. License

`Event Store For PHP` is licensed under the MIT License - see the LICENSE file for details


[![The Big Brains Company - Logo](http://tbbc-valid.thebigbrainscompany.com/assets/images/logo-tbbc.png)](http://thebigbrainscompany.com)
