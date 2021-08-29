[![Latest Stable Version](http://poser.pugx.org/raigu/psr14-event-dispatcher-spy/v/stable)](https://packagist.org/packages/raigu/psr14-event-dispatcher-spy)
[![Fallows SemVer](https://img.shields.io/badge/SemVer-2.0.0-green)](https://semver.org/spec/v2.0.0.html)
[![build](https://github.com/raigu/psr14-event-dispatcher-spy/workflows/build/badge.svg)](https://github.com/raigu/psr14-event-dispatcher-spy/actions)
[![codecov](https://codecov.io/gh/raigu/psr14-event-dispatcher-spy/branch/main/graph/badge.svg?token=VWV2RR9B6R)](https://codecov.io/gh/raigu/psr14-event-dispatcher-spy)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)

# psr14-event-dispatcher-spy

PSR-14 event dispatcher implementation for testing if the subject under test is emitting expected event.

# Compatibility

*PHP 7.4, ^8.0

# Install

```shell
$ composer require --dev raigu/psr14-event-dispatcher-spy
```

# Usage

```php
$spy = new \Raigu\TestDouble\Psr14\EventDispatcherSpy();

$sut = new \Foo\Bar($spy);
$sut->bar();

assert($spy->dispatched(\Foo\BarEvent::class));
```

# Methods

| Method       	| Description                               	|
|--------------	|-------------------------------------------	|
| dispatched  	| true if given event has been dispatched. Parameter can be event class name or event instance.    	|


# Testing

```shell
$ composer test
$ composer specification 
$ composer coverage
```