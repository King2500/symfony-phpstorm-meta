<?php

namespace PHPSTORM_META {

	registerArgumentsSet('symfony_di_compiler_pass_types',
		\Symfony\Component\DependencyInjection\Compiler\PassConfig::TYPE_BEFORE_OPTIMIZATION,
		\Symfony\Component\DependencyInjection\Compiler\PassConfig::TYPE_BEFORE_REMOVING,
		\Symfony\Component\DependencyInjection\Compiler\PassConfig::TYPE_AFTER_REMOVING,
		\Symfony\Component\DependencyInjection\Compiler\PassConfig::TYPE_OPTIMIZE,
		\Symfony\Component\DependencyInjection\Compiler\PassConfig::TYPE_REMOVE
	);
	expectedArguments(\Symfony\Component\DependencyInjection\Compiler\Compiler::addPass(), 1, argumentsSet('symfony_di_compiler_pass_types'));
	expectedArguments(\Symfony\Component\DependencyInjection\Compiler\PassConfig::addPass(), 1, argumentsSet('symfony_di_compiler_pass_types'));
	expectedArguments(\Symfony\Component\DependencyInjection\Compiler\MergeExtensionConfigurationContainerBuilder::addCompilerPass(), 1, argumentsSet('symfony_di_compiler_pass_types'));
	expectedArguments(\Symfony\Component\DependencyInjection\ContainerBuilder::addCompilerPass(), 1, argumentsSet('symfony_di_compiler_pass_types'));

	registerArgumentsSet('symfony_di_invalid_ref_behaviors',
		\Symfony\Component\DependencyInjection\ContainerInterface::EXCEPTION_ON_INVALID_REFERENCE,
		\Symfony\Component\DependencyInjection\ContainerInterface::RUNTIME_EXCEPTION_ON_INVALID_REFERENCE,
		\Symfony\Component\DependencyInjection\ContainerInterface::NULL_ON_INVALID_REFERENCE,
		\Symfony\Component\DependencyInjection\ContainerInterface::IGNORE_ON_INVALID_REFERENCE,
		\Symfony\Component\DependencyInjection\ContainerInterface::IGNORE_ON_UNINITIALIZED_REFERENCE
	);
	expectedArguments(\Symfony\Component\DependencyInjection\ContainerInterface::get(), 1, argumentsSet('symfony_di_invalid_ref_behaviors'));
	expectedArguments(\Symfony\Component\DependencyInjection\Container::get(), 1, argumentsSet('symfony_di_invalid_ref_behaviors'));
	expectedArguments(\Symfony\Component\DependencyInjection\Container::make(), 1, argumentsSet('symfony_di_invalid_ref_behaviors'));
	expectedArguments(\Symfony\Component\DependencyInjection\ContainerBuilder::get(), 1, argumentsSet('symfony_di_invalid_ref_behaviors'));
	expectedArguments(\Symfony\Component\DependencyInjection\ContainerBuilder::doGet(), 1, argumentsSet('symfony_di_invalid_ref_behaviors'));
	expectedArguments(\Symfony\Component\DependencyInjection\Reference::__construct(), 1, argumentsSet('symfony_di_invalid_ref_behaviors'));
	expectedArguments(\Symfony\Component\DependencyInjection\TypedReference::__construct(), 2, argumentsSet('symfony_di_invalid_ref_behaviors'));
	expectedReturnValues(\Symfony\Component\DependencyInjection\Reference::getInvalidBehavior(), argumentsSet('symfony_di_invalid_ref_behaviors'));

	expectedArguments(\Symfony\Component\DependencyInjection\Attribute\AsDecorator::__construct(), 2, argumentsSet('symfony_di_invalid_ref_behaviors'));

	registerArgumentsSet('symfony_environments',
		'dev',
		'prod',
		'test'
	);
	expectedArguments(\Symfony\Component\DependencyInjection\Attribute\When::__construct(), 0, argumentsSet('symfony_environments'));

	expectedReturnValues(\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator::env(), argumentsSet('symfony_environments'));
}