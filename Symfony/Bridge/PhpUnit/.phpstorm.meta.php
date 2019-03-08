<?php

namespace PHPSTORM_META {

	registerArgumentsSet('symfony_phpunit_deprecation_error_handler_modes',
		\Symfony\Bridge\PhpUnit\DeprecationErrorHandler::MODE_WEAK,
		\Symfony\Bridge\PhpUnit\DeprecationErrorHandler::MODE_WEAK_VENDORS,
		\Symfony\Bridge\PhpUnit\DeprecationErrorHandler::MODE_DISABLED
	);
	expectedArguments(\Symfony\Bridge\PhpUnit\DeprecationErrorHandler::register(), 0, argumentsSet('symfony_phpunit_deprecation_error_handler_modes'));
}