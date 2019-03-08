<?php

namespace PHPSTORM_META {

	registerArgumentsSet('symfony_css_token_types',
		\Symfony\Component\CssSelector\Parser\Token::TYPE_IDENTIFIER,
		\Symfony\Component\CssSelector\Parser\Token::TYPE_HASH,
		\Symfony\Component\CssSelector\Parser\Token::TYPE_NUMBER,
		\Symfony\Component\CssSelector\Parser\Token::TYPE_STRING,
		\Symfony\Component\CssSelector\Parser\Token::TYPE_DELIMITER,
		\Symfony\Component\CssSelector\Parser\Token::TYPE_WHITESPACE,
		\Symfony\Component\CssSelector\Parser\Token::TYPE_FILE_END
	);
	expectedArguments(\Symfony\Component\CssSelector\Parser\Token::__construct(), 0, argumentsSet('symfony_css_token_types'));
	expectedReturnValues(\Symfony\Component\CssSelector\Parser\Token::getType(), argumentsSet('symfony_css_token_types'));

	registerArgumentsSet('symfony_css_node_ext_flags',
		\Symfony\Component\CssSelector\XPath\Extension\NodeExtension::ELEMENT_NAME_IN_LOWER_CASE |
		\Symfony\Component\CssSelector\XPath\Extension\NodeExtension::ATTRIBUTE_NAME_IN_LOWER_CASE |
		\Symfony\Component\CssSelector\XPath\Extension\NodeExtension::ATTRIBUTE_VALUE_IN_LOWER_CASE
	);
	expectedArguments(\Symfony\Component\CssSelector\XPath\Extension\NodeExtension::__construct(), 0, argumentsSet('symfony_css_node_ext_flags'));
	expectedArguments(\Symfony\Component\CssSelector\XPath\Extension\NodeExtension::setFlag(), 0, argumentsSet('symfony_css_node_ext_flags'));
	expectedArguments(\Symfony\Component\CssSelector\XPath\Extension\NodeExtension::hasFlag(), 0, argumentsSet('symfony_css_node_ext_flags'));
}