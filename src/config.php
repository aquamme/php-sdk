<?php

use Dapr\Actors\ProxyModes;
use Dapr\DaprLogger;
use Dapr\Deserialization\Deserializer;
use Dapr\Deserialization\IDeserializer;
use Dapr\Serialization\ISerializer;
use Dapr\Serialization\Serializer;
use Dapr\State\IManageState;
use Dapr\State\StateManager;
use Monolog\Handler\ErrorLogHandler;
use Monolog\Processor\PsrLogMessageProcessor;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

use function DI\autowire;
use function DI\create;
use function DI\get;

return [
    // logging
    'dapr.log.level'          => fn() => LogLevel::WARNING,
    'dapr.log.handler'        => fn() => [
        create(ErrorLogHandler::class)->constructor(
            level: get('dapr.log.level')
        ),
    ],
    'dapr.log.processor'      => fn() => [create(PsrLogMessageProcessor::class)],

    // interface to implementation
    LoggerInterface::class    => create(DaprLogger::class)->constructor(
        'DAPRPHP',
        get('dapr.log.handler'),
        get('dapr.log.processor')
    ),
    IDeserializer::class      => autowire(Deserializer::class),
    ISerializer::class        => autowire(Serializer::class),
    IManageState::class       => autowire(StateManager::class),

    // application settings
    'dapr.actorproxy.setting' => fn() => ProxyModes::GENERATED,
];
