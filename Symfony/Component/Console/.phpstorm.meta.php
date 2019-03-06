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

	registerArgumentsSet('symfony_output_verbosity_levels',
		\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_NORMAL,
		\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_QUIET,
		\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_VERBOSE,
		\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_VERY_VERBOSE,
		\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_DEBUG
	);
	expectedArguments(\Symfony\Component\Console\Helper\ProcessHelper::run(), 4, argumentsSet('symfony_output_verbosity_levels'));
	expectedArguments(\Symfony\Component\Console\Output\OutputInterface::setVerbosity(), 0, argumentsSet('symfony_output_verbosity_levels'));
	expectedReturnValues(\Symfony\Component\Console\Output\OutputInterface::getVerbosity(), argumentsSet('symfony_output_verbosity_levels'));

	registerArgumentsSet('symfony_output_options',
		\Symfony\Component\Console\Output\OutputInterface::OUTPUT_NORMAL |
		\Symfony\Component\Console\Output\OutputInterface::OUTPUT_RAW |
		\Symfony\Component\Console\Output\OutputInterface::OUTPUT_PLAIN |
		\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_NORMAL |
		\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_QUIET |
		\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_VERBOSE |
		\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_VERY_VERBOSE |
		\Symfony\Component\Console\Output\OutputInterface::VERBOSITY_DEBUG
	);
	expectedArguments(\Symfony\Component\Console\Output\OutputInterface::write(), 2, argumentsSet('symfony_output_options'));
	expectedArguments(\Symfony\Component\Console\Output\OutputInterface::writeln(), 1, argumentsSet('symfony_output_options'));

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

	registerArgumentsSet('symfony_console_formatter_styles',
		'info',
		'comment',
		'question',
		'error'
	);
	expectedArguments(\Symfony\Component\Console\Helper\FormatterHelper::formatSection(), 2, argumentsSet('symfony_console_formatter_styles'));
	expectedArguments(\Symfony\Component\Console\Helper\FormatterHelper::formatBlock(), 1, argumentsSet('symfony_console_formatter_styles'));
	expectedArguments(\Symfony\Component\Console\Formatter\OutputFormatterInterface::setStyle(), 0, argumentsSet('symfony_console_formatter_styles'));
	expectedArguments(\Symfony\Component\Console\Formatter\OutputFormatterInterface::hasStyle(), 0, argumentsSet('symfony_console_formatter_styles'));
	expectedArguments(\Symfony\Component\Console\Formatter\OutputFormatterInterface::getStyle(), 0, argumentsSet('symfony_console_formatter_styles'));

	registerArgumentsSet('symfony_console_style_colors',
		'default',
		'black',
		'red',
		'green',
		'yellow',
		'blue',
		'magenta',
		'cyan',
		'white'
	);
	expectedArguments(\Symfony\Component\Console\Formatter\OutputFormatterStyle::__construct(), 0, argumentsSet('symfony_console_style_colors'));
	expectedArguments(\Symfony\Component\Console\Formatter\OutputFormatterStyle::__construct(), 1, argumentsSet('symfony_console_style_colors'));
	expectedArguments(\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface::setForeground(), 0, argumentsSet('symfony_console_style_colors'));
	expectedArguments(\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface::setBackground(), 0, argumentsSet('symfony_console_style_colors'));

	registerArgumentsSet('symfony_console_style_options',
		'bold',
		'underscore',
		'blink',
		'reverse',
		'conceal'
	);
	expectedArguments(\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface::setOption(), 0, argumentsSet('symfony_console_style_options'));
	expectedArguments(\Symfony\Component\Console\Formatter\OutputFormatterStyleInterface::unsetOption(), 0, argumentsSet('symfony_console_style_options'));

	registerArgumentsSet('symfony_console_progress_formats',
		'normal',
		'verbose',
		'very_verbose',
		'debug',
		'normal_nomax',
		'verbose_nomax',
		'very_verbose_nomax',
		'debug_nomax'
	);
	expectedArguments(\Symfony\Component\Console\Helper\ProgressBar::setFormat(), 0, argumentsSet('symfony_console_progress_formats'));
	expectedArguments(\Symfony\Component\Console\Helper\ProgressBar::setFormatDefinition(), 0, argumentsSet('symfony_console_progress_formats'));
	expectedArguments(\Symfony\Component\Console\Helper\ProgressBar::getFormatDefinition(), 0, argumentsSet('symfony_console_progress_formats'));

	registerArgumentsSet('symfony_console_progress_formatters',
		'bar',
		'elapsed',
		'remaining',
		'estimated',
		'memory',
		'current',
		'max',
		'percent'
	);
	expectedArguments(\Symfony\Component\Console\Helper\ProgressBar::setPlaceholderFormatterDefinition(), 0, argumentsSet('symfony_console_progress_formatters'));
	expectedArguments(\Symfony\Component\Console\Helper\ProgressBar::getPlaceholderFormatterDefinition(), 0, argumentsSet('symfony_console_progress_formatters'));

	registerArgumentsSet('symfony_console_table_styles',
		'default',
		'borderless',
		'compact',
		'symfony-style-guide',
		'box',
		'box-double'
	);
	expectedArguments(\Symfony\Component\Console\Helper\Table::setStyle(), 0, argumentsSet('symfony_console_table_styles'));
	expectedArguments(\Symfony\Component\Console\Helper\Table::getStyleDefinition(), 0, argumentsSet('symfony_console_table_styles'));
	expectedArguments(\Symfony\Component\Console\Helper\Table::setStyleDefinition(), 0, argumentsSet('symfony_console_table_styles'));
	expectedArguments(\Symfony\Component\Console\Helper\Table::setColumnStyle(), 1, argumentsSet('symfony_console_table_styles'));
	expectedArguments(\Symfony\Component\Console\Helper\Table::resolveStyle(), 0, argumentsSet('symfony_console_table_styles'));

	expectedArguments(\Symfony\Component\Console\Helper\TableStyle::setPadType(), 0, STR_PAD_LEFT, STR_PAD_RIGHT, STR_PAD_BOTH);
	expectedReturnValues(\Symfony\Component\Console\Helper\TableStyle::getPadType(), STR_PAD_LEFT, STR_PAD_RIGHT, STR_PAD_BOTH);

	registerArgumentsSet('symfony_console_exitcodes',
		\Symfony\Component\Console\Event\ConsoleCommandEvent::RETURN_CODE_DISABLED,
	);
	expectedReturnValues(\Symfony\Component\Console\Event\ConsoleErrorEvent::getExitCode(), argumentsSet('symfony_console_exitcodes'));
	expectedReturnValues(\Symfony\Component\Console\Event\ConsoleTerminateEvent::getExitCode(), argumentsSet('symfony_console_exitcodes'));
}