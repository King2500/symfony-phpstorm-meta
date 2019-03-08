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
}