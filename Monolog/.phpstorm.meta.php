<?php

namespace PHPSTORM_META {

    registerArgumentsSet('monolog_levels',
        \Monolog\Logger::DEBUG,
        \Monolog\Logger::INFO,
        \Monolog\Logger::NOTICE,
        \Monolog\Logger::WARNING,
        \Monolog\Logger::ERROR,
        \Monolog\Logger::CRITICAL,
        \Monolog\Logger::ALERT,
        \Monolog\Logger::EMERGENCY
    );
    registerArgumentsSet('monolog_levels_reversed',
        \Monolog\Logger::EMERGENCY,
        \Monolog\Logger::ALERT,
        \Monolog\Logger::CRITICAL,
        \Monolog\Logger::ERROR,
        \Monolog\Logger::WARNING,
        \Monolog\Logger::NOTICE,
        \Monolog\Logger::INFO,
        \Monolog\Logger::DEBUG
    );

    expectedArguments(\Monolog\Logger::addRecord(), 0, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Logger::getLevelName(), 0, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Logger::isHandling(), 0, argumentsSet('monolog_levels'));
    //expectedReturnValues(\Monolog\Logger::getLevels(), array(argumentsSet('monolog_levels')));
    expectedReturnValues(\Monolog\Handler\AbstractHandler::getLevel(), argumentsSet('monolog_levels'));

    expectedArguments(\Monolog\Handler\AbstractHandler::__construct(), 0, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\StreamHandler::__construct(), 1, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\AbstractSyslogHandler::__construct(), 1, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\AmqpHandler::__construct(), 2, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\BufferHandler::__construct(), 2, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\ChromePHPHandler::__construct(), 0, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\CouchDBHandler::__construct(), 1, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\CubeHandler::__construct(), 1, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\DeduplicationHandler::__construct(), 2, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\DoctrineCouchDBHandler::__construct(), 1, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\DynamoDbHandler::__construct(), 2, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\ElasticSearchHandler::__construct(), 2, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\ErrorLogHandler::__construct(), 1, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\FilterHandler::__construct(), 1, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\FilterHandler::setAcceptedLevels(), 0, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\FilterHandler::__construct(), 2, argumentsSet('monolog_levels_reversed'));
    expectedArguments(\Monolog\Handler\FilterHandler::setAcceptedLevels(), 1, argumentsSet('monolog_levels_reversed'));
    //expectedReturnValues(\Monolog\Handler\FilterHandler::getAcceptedLevels(), array(argumentsSet('monolog_levels')));
    expectedArguments(\Monolog\Handler\FingersCrossedHandler::__construct(), 1, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\FingersCrossedHandler::__construct(), 5, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\FleepHookHandler::__construct(), 1, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\FlowdockHandler::__construct(), 1, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\GelfHandler::__construct(), 1, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\HipChatHandler::__construct(), 4, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\HipChatHandler::getAlertColor(), 0, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\IFTTTHandler::__construct(), 2, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\InsightOpsHandler::__construct(), 3, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\LogEntriesHandler::__construct(), 2, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\LogglyHandler::__construct(), 1, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\MandrillHandler::__construct(), 2, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\MongoDBHandler::__construct(), 3, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\NativeMailerHandler::__construct(), 3, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\NewRelicHandler::__construct(), 0, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\NullHandler::__construct(), 0, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\PHPConsoleHandler::__construct(), 2, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\PsrHandler::__construct(), 1, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\PushoverHandler::__construct(), 3, argumentsSet('monolog_levels_reversed'));
    expectedArguments(\Monolog\Handler\PushoverHandler::__construct(), 6, argumentsSet('monolog_levels_reversed'));
    expectedArguments(\Monolog\Handler\PushoverHandler::__construct(), 7, argumentsSet('monolog_levels_reversed'));
    expectedArguments(\Monolog\Handler\RavenHandler::__construct(), 1, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\RedisHandler::__construct(), 2, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\RollbarHandler::__construct(), 1, argumentsSet('monolog_levels_reversed'));
    expectedArguments(\Monolog\Handler\RotatingFileHandler::__construct(), 2, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\SlackbotHandler::__construct(), 3, argumentsSet('monolog_levels_reversed'));
    expectedArguments(\Monolog\Handler\SlackHandler::__construct(), 5, argumentsSet('monolog_levels_reversed'));
    expectedArguments(\Monolog\Handler\SlackWebhookHandler::__construct(), 7, argumentsSet('monolog_levels_reversed'));
    expectedArguments(\Monolog\Handler\SocketHandler::__construct(), 1, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\StreamHandler::__construct(), 1, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\SwiftMailerHandler::__construct(), 2, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\SyslogHandler::__construct(), 2, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\SyslogUdpHandler::__construct(), 3, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\ZendMonitorHandler::__construct(), 0, argumentsSet('monolog_levels'));

    expectedArguments(\Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy::__construct(), 0, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Handler\FingersCrossed\ChannelLevelActivationStrategy::__construct(), 0, argumentsSet('monolog_levels'));

    expectedArguments(\Monolog\Processor\GitProcessor::__construct(), 0, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Processor\IntrospectionProcessor::__construct(), 0, argumentsSet('monolog_levels'));
    expectedArguments(\Monolog\Processor\MercurialProcessor::__construct(), 0, argumentsSet('monolog_levels'));

    // UNUSED because we prefer LogLevel from PSR-3
    /** @see ../Psr/Log/.phpstorm.meta.php */
    //expectedArguments(\Monolog\Logger::log(), 0, argumentsSet('monolog_levels'));
    //expectedArguments(\Monolog\Logger::toMonologLevel(), 0, argumentsSet('monolog_levels'));
    //expectedArguments(\Monolog\Handler\AbstractHandler::__construct(), 0, argumentsSet('monolog_levels'));

    registerArgumentsSet('monolog_json_formatter_modes',
        \Monolog\Formatter\JsonFormatter::BATCH_MODE_JSON,
        \Monolog\Formatter\JsonFormatter::BATCH_MODE_NEWLINES
    );
    expectedArguments(\Monolog\Formatter\JsonFormatter::__construct(), 0, argumentsSet('monolog_json_formatter_modes'));
    expectedArguments(\Monolog\Formatter\LogglyFormatter::__construct(), 0, argumentsSet('monolog_json_formatter_modes'));
    expectedReturnValues(\Monolog\Formatter\JsonFormatter::getBatchMode(), argumentsSet('monolog_json_formatter_modes'));

    registerArgumentsSet('monolog_formatter_dateformats',
        \Monolog\Formatter\NormalizerFormatter::SIMPLE_DATE,
        //\Monolog\Handler\DynamoDbHandler::DATE_FORMAT,
        \DateTime::ISO8601,
        \DateTime::ATOM,
        \DateTime::COOKIE,
        \DateTime::RFC822,
        \DateTime::RFC850,
        \DateTime::RFC1036,
        \DateTime::RFC1123,
        \DateTime::RFC2822,
        \DateTime::RFC3339,
        \DateTime::RFC3339_EXTENDED,
        \DateTime::RFC7231,
        \DateTime::RSS,
        \DateTime::W3C,
        'Y-m-d H:i:s',
        'Y-m-d H:i',
        'Y-m-d',
        'H:i:s'
    );
    expectedArguments(\Monolog\Formatter\NormalizerFormatter::__construct(), 0, argumentsSet('monolog_formatter_dateformats'));
    expectedArguments(\Monolog\Formatter\HtmlFormatter::__construct(), 0, argumentsSet('monolog_formatter_dateformats'));
    expectedArguments(\Monolog\Formatter\LineFormatter::__construct(), 1, argumentsSet('monolog_formatter_dateformats'));

    registerArgumentsSet('monolog_formatter_line_formats',
        \Monolog\Formatter\LineFormatter::SIMPLE_FORMAT,
        "[%datetime%] %channel%.%level_name%: %message% %context% %extra%\n",
        "[%datetime%] %channel%.%level_name%: %message% %context%\n",
        "[%datetime%] %channel%.%level_name%: %message%\n",
        "[%datetime%] %message%\n",
        "%message%\n"
    );
    expectedArguments(\Monolog\Formatter\LineFormatter::__construct(), 0, argumentsSet('monolog_formatter_line_formats'));

    expectedArguments(\Monolog\Formatter\LogstashFormatter::__construct(), 4, \Monolog\Formatter\LogstashFormatter::V0, \Monolog\Formatter\LogstashFormatter::V1);

    registerArgumentsSet('monolog_formatter_dateformats_filename',
        \Monolog\Handler\RotatingFileHandler::FILE_PER_DAY,
        \Monolog\Handler\RotatingFileHandler::FILE_PER_MONTH,
        \Monolog\Handler\RotatingFileHandler::FILE_PER_YEAR,
        'Y-m-d', 'Y-m', 'Y', 'Y-m-d_H-i-s', 'Y-m-d-H-i-s', 'Ymd', 'Ym'
    );
    expectedArguments(\Monolog\Handler\RotatingFileHandler::setFilenameFormat(), 1, argumentsSet('monolog_formatter_dateformats_filename'));
    expectedArguments(\Monolog\Handler\RotatingFileHandler::setFilenameFormat(), 0, '{filename}-{date}', '{filename}_{date}', '{date}', '{date}-{filename}', '{date}_{filename}');

    registerArgumentsSet('syslog_facilities',
        LOG_USER,
        LOG_AUTH,
        LOG_AUTHPRIV,
        LOG_CRON,
        LOG_DAEMON,
        LOG_KERN,
        LOG_LPR,
        LOG_MAIL,
        LOG_NEWS,
        LOG_SYSLOG,
        LOG_UUCP
    );
    expectedArguments(\Monolog\Handler\AbstractSyslogHandler::__construct(), 0, argumentsSet('syslog_facilities'));
    expectedArguments(\Monolog\Handler\SyslogHandler::__construct(), 1, argumentsSet('syslog_facilities'));
    expectedArguments(\Monolog\Handler\SyslogUdpHandler::__construct(), 2, argumentsSet('syslog_facilities'));

    expectedArguments(\Monolog\Handler\CubeHandler::__construct(), 0, 'http://', 'udp://');

    registerArgumentsSet('errorlog_types',
        \Monolog\Handler\ErrorLogHandler::OPERATING_SYSTEM,
        \Monolog\Handler\ErrorLogHandler::SAPI
    );
    expectedArguments(\Monolog\Handler\ErrorLogHandler::__construct(), 0, argumentsSet('errorlog_types'));

    expectedArguments(\Monolog\Handler\HipChatHandler::__construct(), 7, 'text', 'html');
    expectedArguments(\Monolog\Handler\HipChatHandler::__construct(), 9, \Monolog\Handler\HipChatHandler::API_V1, \Monolog\Handler\HipChatHandler::API_V2);

    expectedArguments(\Monolog\Handler\InsightOpsHandler::__construct(), 1, 'us', 'eu');

    expectedArguments(\Monolog\Handler\LogglyHandler::send(), 1, \Monolog\Handler\LogglyHandler::ENDPOINT_SINGLE, \Monolog\Handler\LogglyHandler::ENDPOINT_BATCH);

    expectedArguments(\Monolog\Handler\SocketHandler::__construct(), 0, 'tcp://', 'udp://', 'ssl://', 'sslv2://', 'sslv3://', 'tls://', 'unix://', 'udg://');

    expectedArguments(\Monolog\Handler\StreamHandler::__construct(), 0, STDERR, STDOUT, 'php://stderr', 'php://stdout');
    expectedArguments(\Monolog\Handler\StreamHandler::__construct(), 3, 0644, 0666);

    expectedArguments(\Monolog\Handler\SyslogHandler::__construct(), 4, LOG_PID | LOG_PERROR | LOG_ODELAY | LOG_NDELAY | LOG_CONS);
}
