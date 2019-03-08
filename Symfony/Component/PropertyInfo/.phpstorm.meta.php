<?php

namespace PHPSTORM_META {

	registerArgumentsSet('symfony_builtin_types',
		\Symfony\Component\PropertyInfo\Type::BUILTIN_TYPE_INT,
		\Symfony\Component\PropertyInfo\Type::BUILTIN_TYPE_FLOAT,
		\Symfony\Component\PropertyInfo\Type::BUILTIN_TYPE_STRING,
		\Symfony\Component\PropertyInfo\Type::BUILTIN_TYPE_BOOL,
		\Symfony\Component\PropertyInfo\Type::BUILTIN_TYPE_RESOURCE,
		\Symfony\Component\PropertyInfo\Type::BUILTIN_TYPE_OBJECT,
		\Symfony\Component\PropertyInfo\Type::BUILTIN_TYPE_ARRAY,
		\Symfony\Component\PropertyInfo\Type::BUILTIN_TYPE_NULL,
		\Symfony\Component\PropertyInfo\Type::BUILTIN_TYPE_CALLABLE,
		\Symfony\Component\PropertyInfo\Type::BUILTIN_TYPE_ITERABLE
	);
	expectedArguments(\Symfony\Component\PropertyInfo\Type::__construct(), 0, argumentsSet('symfony_builtin_types'));
	expectedReturnValues(\Symfony\Component\PropertyInfo\Type::getBuiltinType(), argumentsSet('symfony_builtin_types'));
	expectedReturnValues(\Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor::getPhpType(), argumentsSet('symfony_builtin_types'));

}