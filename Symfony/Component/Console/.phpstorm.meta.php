<?php

namespace PHPSTORM_META {

	override(\Symfony\Component\Console\Command\Command::getHelper(0),
		map([
			'formatter' => \Symfony\Component\Console\Helper\FormatterHelper::class,
			'process' => \Symfony\Component\Console\Helper\ProcessHelper::class,
			'question' => \Symfony\Component\Console\Helper\QuestionHelper::class,
			'debug_formatter' => \Symfony\Component\Console\Helper\DebugFormatterHelper::class,
		])
	);

	registerArgumentsSet('symfony_input_argument_modes',
		\Symfony\Component\Console\Input\InputArgument::REQUIRED |
		\Symfony\Component\Console\Input\InputArgument::OPTIONAL |
		\Symfony\Component\Console\Input\InputArgument::IS_ARRAY
	);
	expectedArguments(\Symfony\Component\Console\Command\Command::addArgument(), 1, argumentsSet('symfony_input_argument_modes'));
	expectedArguments(\Symfony\Component\Console\Input\InputArgument::__construct(), 1, argumentsSet('symfony_input_argument_modes'));

	registerArgumentsSet('symfony_input_option_modes',
		\Symfony\Component\Console\Input\InputOption::VALUE_NONE |
		\Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED |
		\Symfony\Component\Console\Input\InputOption::VALUE_OPTIONAL |
		\Symfony\Component\Console\Input\InputOption::VALUE_IS_ARRAY
	);
	expectedArguments(\Symfony\Component\Console\Command\Command::addOption(), 2, argumentsSet('symfony_input_option_modes'));
	expectedArguments(\Symfony\Component\Console\Input\InputOption::__construct(), 2, argumentsSet('symfony_input_option_modes'));

	// Suggest common command names
	registerArgumentsSet('symfony_console_common_commands',
		'list',
		'status',
		'show',
		'dump',
		'help',
		'version'
	);
//	expectedArguments(\Symfony\Component\Console\Command\Command::__construct(), 0, argumentsSet('symfony_console_common_commands'));
//	expectedArguments(\Symfony\Component\Console\Command\Command::setName(), 0, argumentsSet('symfony_console_common_commands'));
//	expectedReturnValues(\Symfony\Component\Console\Command\Command::getName(), argumentsSet('symfony_console_common_commands'));

	// Suggest common arguments
	registerArgumentsSet('symfony_console_common_arguments',
		'user',
		'password',
		'host',
		'env',
		'path',
		'dir',
		'file'
	);
	expectedArguments(\Symfony\Component\Console\Command\Command::addArgument(), 0, argumentsSet('symfony_console_common_arguments'));

	// The following should be handled dynamically by plugin
//	expectedArguments(\Symfony\Component\Console\Input\Input::getArgument(), 0, argumentsSet('symfony_console_common_arguments'));
//	expectedArguments(\Symfony\Component\Console\Input\Input::setArgument(), 0, argumentsSet('symfony_console_common_arguments'));
//	expectedArguments(\Symfony\Component\Console\Input\Input::hasArgument(), 0, argumentsSet('symfony_console_common_arguments'));
//	expectedArguments(\Symfony\Component\Console\Input\InputDefinition::getArgument(), 0, argumentsSet('symfony_console_common_arguments'));
//	expectedArguments(\Symfony\Component\Console\Input\InputDefinition::hasArgument(), 0, argumentsSet('symfony_console_common_arguments'));

	// Suggest common options
	registerArgumentsSet('symfony_console_common_options',
		'recursive',
		'quiet',
		'verbose',
		'force',
		'ansi',
		'no-ansi',
		'no-interaction',
		'interactive',
		'user',
		'password',
		'host',
		'env',
		'path',
		'dir',
		'file',
		'all'
	);
	expectedArguments(\Symfony\Component\Console\Command\Command::addOption(), 0, argumentsSet('symfony_console_common_options'));

	// The following should be handled dynamically by plugin
//	expectedArguments(\Symfony\Component\Console\Input\Input::getOption(), 0, argumentsSet('symfony_console_common_options'));
//	expectedArguments(\Symfony\Component\Console\Input\Input::setOption(), 0, argumentsSet('symfony_console_common_options'));
//	expectedArguments(\Symfony\Component\Console\Input\Input::hasOption(), 0, argumentsSet('symfony_console_common_options'));
//	expectedArguments(\Symfony\Component\Console\Input\InputDefinition::getOption(), 0, argumentsSet('symfony_console_common_options'));
//	expectedArguments(\Symfony\Component\Console\Input\InputDefinition::hasOption(), 0, argumentsSet('symfony_console_common_options'));

	registerArgumentsSet('symfony_console_helpers',
		'formatter',
		'process',
		'question',
		'debug_formatter'
	);
	expectedArguments(\Symfony\Component\Console\Helper\HelperSet::has(), 0, argumentsSet('symfony_console_helpers'));
	expectedArguments(\Symfony\Component\Console\Helper\HelperSet::get(), 0, argumentsSet('symfony_console_helpers'));
//	expectedArguments(\Symfony\Component\Console\Command\Command::getHelper(), 0, argumentsSet('symfony_console_helpers'));

	registerArgumentsSet('symfony_console_exitcodes',
		\Symfony\Component\Console\Event\ConsoleCommandEvent::RETURN_CODE_DISABLED,
	);
	expectedReturnValues(\Symfony\Component\Console\Event\ConsoleErrorEvent::getExitCode(), argumentsSet('symfony_console_exitcodes'));
	expectedReturnValues(\Symfony\Component\Console\Event\ConsoleTerminateEvent::getExitCode(), argumentsSet('symfony_console_exitcodes'));
}