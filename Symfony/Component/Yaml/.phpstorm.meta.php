<?php

namespace PHPSTORM_META {

	registerArgumentsSet('symfony_yaml_parse_flags',
		\Symfony\Component\Yaml\Yaml::PARSE_EXCEPTION_ON_INVALID_TYPE |
		\Symfony\Component\Yaml\Yaml::PARSE_OBJECT |
		\Symfony\Component\Yaml\Yaml::PARSE_OBJECT_FOR_MAP |
		\Symfony\Component\Yaml\Yaml::PARSE_DATETIME |
		\Symfony\Component\Yaml\Yaml::PARSE_CONSTANT |
		\Symfony\Component\Yaml\Yaml::PARSE_CUSTOM_TAGS
	);
	expectedArguments(\Symfony\Component\Yaml\Yaml::parseFile(), 1, argumentsSet('symfony_yaml_parse_flags'));
	expectedArguments(\Symfony\Component\Yaml\Yaml::parse(), 1, argumentsSet('symfony_yaml_parse_flags'));
	expectedArguments(\Symfony\Component\Yaml\Parser::parseFile(), 1, argumentsSet('symfony_yaml_parse_flags'));
	expectedArguments(\Symfony\Component\Yaml\Parser::parse(), 1, argumentsSet('symfony_yaml_parse_flags'));
	expectedArguments(\Symfony\Component\Yaml\Inline::parse(), 1, argumentsSet('symfony_yaml_parse_flags'));
	expectedArguments(\Symfony\Component\Yaml\Inline::initialize(), 0, argumentsSet('symfony_yaml_parse_flags'));

	registerArgumentsSet('symfony_yaml_dump_flags',
		\Symfony\Component\Yaml\Yaml::DUMP_OBJECT |
		\Symfony\Component\Yaml\Yaml::DUMP_EXCEPTION_ON_INVALID_TYPE |
		\Symfony\Component\Yaml\Yaml::DUMP_OBJECT_AS_MAP |
		\Symfony\Component\Yaml\Yaml::DUMP_MULTI_LINE_LITERAL_BLOCK |
		\Symfony\Component\Yaml\Yaml::DUMP_EMPTY_ARRAY_AS_SEQUENCE |
		\Symfony\Component\Yaml\Yaml::DUMP_NUMERIC_KEY_AS_STRING |
        \Symfony\Component\Yaml\Yaml::DUMP_NULL_AS_TILDE |
        \Symfony\Component\Yaml\Yaml::DUMP_NULL_AS_EMPTY |
        \Symfony\Component\Yaml\Yaml::DUMP_COMPACT_NESTED_MAPPING |
        \Symfony\Component\Yaml\Yaml::DUMP_FORCE_DOUBLE_QUOTES_ON_VALUES
	);
	expectedArguments(\Symfony\Component\Yaml\Yaml::dump(), 3, argumentsSet('symfony_yaml_dump_flags'));
	expectedArguments(\Symfony\Component\Yaml\Dumper::dump(), 3, argumentsSet('symfony_yaml_dump_flags'));
	expectedArguments(\Symfony\Component\Yaml\Inline::dump(), 1, argumentsSet('symfony_yaml_dump_flags'));
}
