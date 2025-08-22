<?php

namespace PHPSTORM_META {

	registerArgumentsSet('symfony_expression_token_types',
		\Symfony\Component\ExpressionLanguage\Token::NAME_TYPE,
		\Symfony\Component\ExpressionLanguage\Token::NUMBER_TYPE,
		\Symfony\Component\ExpressionLanguage\Token::STRING_TYPE,
		\Symfony\Component\ExpressionLanguage\Token::OPERATOR_TYPE,
		\Symfony\Component\ExpressionLanguage\Token::PUNCTUATION_TYPE,
		\Symfony\Component\ExpressionLanguage\Token::EOF_TYPE
	);
	expectedArguments(\Symfony\Component\ExpressionLanguage\Token::__construct(), 0, argumentsSet('symfony_expression_token_types'));
	expectedArguments(\Symfony\Component\ExpressionLanguage\Token::test(), 0, argumentsSet('symfony_expression_token_types'));

	// Symfony 7.1: Parser::lint()/parse() accept flags to ignore unknown variables/functions
	registerArgumentsSet('symfony_expression_parser_flags',
		\Symfony\Component\ExpressionLanguage\Parser::IGNORE_UNKNOWN_VARIABLES |
		\Symfony\Component\ExpressionLanguage\Parser::IGNORE_UNKNOWN_FUNCTIONS
	);
	expectedArguments(\Symfony\Component\ExpressionLanguage\Parser::lint(), 2, argumentsSet('symfony_expression_parser_flags'));
	expectedArguments(\Symfony\Component\ExpressionLanguage\Parser::parse(), 2, argumentsSet('symfony_expression_parser_flags'));
}