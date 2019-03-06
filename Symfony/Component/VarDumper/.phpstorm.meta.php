<?php

namespace PHPSTORM_META {

	registerArgumentsSet('symfony_vardumper_caster_exclude_flags',
		\Symfony\Component\VarDumper\Caster\Caster::EXCLUDE_VERBOSE |
		\Symfony\Component\VarDumper\Caster\Caster::EXCLUDE_VIRTUAL |
		\Symfony\Component\VarDumper\Caster\Caster::EXCLUDE_DYNAMIC |
		\Symfony\Component\VarDumper\Caster\Caster::EXCLUDE_PUBLIC |
		\Symfony\Component\VarDumper\Caster\Caster::EXCLUDE_PROTECTED |
		\Symfony\Component\VarDumper\Caster\Caster::EXCLUDE_PRIVATE |
		\Symfony\Component\VarDumper\Caster\Caster::EXCLUDE_NULL |
		\Symfony\Component\VarDumper\Caster\Caster::EXCLUDE_EMPTY |
		\Symfony\Component\VarDumper\Caster\Caster::EXCLUDE_NOT_IMPORTANT |
		\Symfony\Component\VarDumper\Caster\Caster::EXCLUDE_STRICT
	);
	expectedArguments(\Symfony\Component\VarDumper\Caster\Caster::filter(), 1, argumentsSet('symfony_vardumper_caster_exclude_flags'));

	registerArgumentsSet('symfony_vardumper_flags',
		\Symfony\Component\VarDumper\Dumper\AbstractDumper::DUMP_LIGHT_ARRAY |
		\Symfony\Component\VarDumper\Dumper\AbstractDumper::DUMP_STRING_LENGTH |
		\Symfony\Component\VarDumper\Dumper\AbstractDumper::DUMP_COMMA_SEPARATOR |
		\Symfony\Component\VarDumper\Dumper\AbstractDumper::DUMP_TRAILING_COMMA
	);
	expectedArguments(\Symfony\Component\VarDumper\Dumper\AbstractDumper::__construct(), 2, argumentsSet('symfony_vardumper_flags'));
	expectedArguments(\Symfony\Component\VarDumper\Dumper\CliDumper::__construct(), 2, argumentsSet('symfony_vardumper_flags'));
	expectedArguments(\Symfony\Component\VarDumper\Dumper\HtmlDumper::__construct(), 2, argumentsSet('symfony_vardumper_flags'));

	registerArgumentsSet('symfony_vardumper_php_types',
		'default',
		'integer',
		'double',
		'boolean',
		'NULL'
	);
	expectedArguments(\Symfony\Component\VarDumper\Cloner\DumperInterface::dumpScalar(), 1, argumentsSet('symfony_vardumper_php_types'));
	expectedArguments(\Symfony\Component\VarDumper\Dumper\CliDumper::dumpScalar(), 1, argumentsSet('symfony_vardumper_php_types'));

	registerArgumentsSet('symfony_vardumper_cursor_hash_types',
		\Symfony\Component\VarDumper\Cloner\Cursor::HASH_INDEXED,
		\Symfony\Component\VarDumper\Cloner\Cursor::HASH_ASSOC,
		\Symfony\Component\VarDumper\Cloner\Cursor::HASH_OBJECT,
		\Symfony\Component\VarDumper\Cloner\Cursor::HASH_RESOURCE
	);
	expectedArguments(\Symfony\Component\VarDumper\Cloner\DumperInterface::enterHash(), 1, argumentsSet('symfony_vardumper_cursor_hash_types'));
	expectedArguments(\Symfony\Component\VarDumper\Cloner\DumperInterface::leaveHash(), 1, argumentsSet('symfony_vardumper_cursor_hash_types'));
	expectedArguments(\Symfony\Component\VarDumper\Dumper\CliDumper::enterHash(), 1, argumentsSet('symfony_vardumper_cursor_hash_types'));
	expectedArguments(\Symfony\Component\VarDumper\Dumper\CliDumper::leaveHash(), 1, argumentsSet('symfony_vardumper_cursor_hash_types'));
	expectedArguments(\Symfony\Component\VarDumper\Dumper\HtmlDumper::enterHash(), 1, argumentsSet('symfony_vardumper_cursor_hash_types'));
	expectedArguments(\Symfony\Component\VarDumper\Dumper\HtmlDumper::leaveHash(), 1, argumentsSet('symfony_vardumper_cursor_hash_types'));
}