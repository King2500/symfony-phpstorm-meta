<?php

namespace PHPSTORM_META {

	registerArgumentsSet('psr_log_levels',
		\Psr\Log\LogLevel::DEBUG,
		\Psr\Log\LogLevel::INFO,
		\Psr\Log\LogLevel::NOTICE,
		\Psr\Log\LogLevel::WARNING,
		\Psr\Log\LogLevel::ERROR,
		\Psr\Log\LogLevel::CRITICAL,
		\Psr\Log\LogLevel::ALERT,
		\Psr\Log\LogLevel::EMERGENCY
	);
	registerArgumentsSet('psr_log_levels_reversed',
		\Psr\Log\LogLevel::EMERGENCY,
		\Psr\Log\LogLevel::ALERT,
		\Psr\Log\LogLevel::CRITICAL,
		\Psr\Log\LogLevel::ERROR,
		\Psr\Log\LogLevel::WARNING,
		\Psr\Log\LogLevel::NOTICE,
		\Psr\Log\LogLevel::INFO,
		\Psr\Log\LogLevel::DEBUG
	);

	expectedArguments(\Psr\Log\LoggerInterface::log(), 0, argumentsSet('psr_log_levels'));
	expectedArguments(\Symfony\Component\HttpKernel\Log\Logger::__construct(), 0, argumentsSet('psr_log_levels'));
	expectedArguments(\Monolog\Logger::toMonologLevel(), 0, argumentsSet('psr_log_levels'));
    expectedArguments(\Monolog\SignalHandler::registerSignalHandler(), 1, argumentsSet('psr_log_levels_reversed'));

}