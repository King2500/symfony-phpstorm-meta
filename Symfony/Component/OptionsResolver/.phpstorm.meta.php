<?php

namespace PHPSTORM_META {

	// note: array suffix "[]" was added in Symfony 3.4
	// make available when Sf 3.4 is widely spread

	registerArgumentsSet('symfony_allowed_types',
		'string',
		//'string[]',
		'int',
		//'int[]',
		'bool',
		//'bool[]',
		'float',
		//'float[]',
		'array',
		//'array[]',
		'object',
		//'object[]',
		'callable',
		//'callable[]',
		'null',
		//'null[]',
		'numeric',
		//'numeric[]',
		'scalar',
		//'scalar[]',
		'resource',
		//'resource[]',
		'iterable', // requires PHP >= 7.1.0
		//'iterable[]', // requires PHP >= 7.1.0
		'countable'//, // requires PHP >= 7.3.0
		//'countable[]' // requires PHP >= 7.3.0
	);

	expectedArguments(\Symfony\Component\OptionsResolver\OptionsResolver::setAllowedTypes(), 1, argumentsSet('symfony_allowed_types'));
	//registerArgumentsSet(\Symfony\Component\OptionsResolver\OptionsResolver::setAllowedTypes(), 1, array(argumentsSet('symfony_allowed_types')));
	expectedArguments(\Symfony\Component\OptionsResolver\OptionsResolver::addAllowedTypes(), 1, argumentsSet('symfony_allowed_types'));
	//registerArgumentsSet(\Symfony\Component\OptionsResolver\OptionsResolver::addAllowedTypes(), 1, array(argumentsSet('symfony_allowed_types')));
}

