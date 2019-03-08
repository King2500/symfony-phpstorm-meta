<?php

namespace PHPSTORM_META {
	registerArgumentsSet('symfony_validator_constraint_targets',
		\Symfony\Component\Validator\Constraint::CLASS_CONSTRAINT,
		\Symfony\Component\Validator\Constraint::PROPERTY_CONSTRAINT
	);
	expectedReturnValues(\Symfony\Component\Validator\Constraint::getTargets(), argumentsSet('symfony_validator_constraint_targets'));

	registerArgumentsSet('symfony_validator_constraint_formats',
		\Symfony\Component\Validator\ConstraintValidator::PRETTY_DATE |
		\Symfony\Component\Validator\ConstraintValidator::OBJECT_TO_STRING
	);
	expectedArguments(\Symfony\Component\Validator\ConstraintValidator::formatValue(), 1, argumentsSet('symfony_validator_constraint_formats'));
	expectedArguments(\Symfony\Component\Validator\ConstraintValidator::formatValues(), 1, argumentsSet('symfony_validator_constraint_formats'));

	registerArgumentsSet('symfony_validator_cascading_strategies',
		\Symfony\Component\Validator\Mapping\CascadingStrategy::NONE |
		\Symfony\Component\Validator\Mapping\CascadingStrategy::CASCADE
	);
	expectedReturnValues(\Symfony\Component\Validator\Mapping\MetadataInterface::getCascadingStrategy(), argumentsSet('symfony_validator_cascading_strategies'));
	expectedReturnValues(\Symfony\Component\Validator\Mapping\GenericMetadata::getCascadingStrategy(), argumentsSet('symfony_validator_cascading_strategies'));
	expectedReturnValues(\Symfony\Component\Validator\Mapping\ClassMetadata::getCascadingStrategy(), \Symfony\Component\Validator\Mapping\CascadingStrategy::NONE);

	registerArgumentsSet('symfony_validator_traversal_strategies',
		\Symfony\Component\Validator\Mapping\TraversalStrategy::IMPLICIT |
		\Symfony\Component\Validator\Mapping\TraversalStrategy::NONE |
		\Symfony\Component\Validator\Mapping\TraversalStrategy::TRAVERSE
	);
	expectedReturnValues(\Symfony\Component\Validator\Mapping\MetadataInterface::getTraversalStrategy(), argumentsSet('symfony_validator_traversal_strategies'));
	expectedReturnValues(\Symfony\Component\Validator\Mapping\GenericMetadata::getTraversalStrategy(), argumentsSet('symfony_validator_traversal_strategies'));
	expectedReturnValues(\Symfony\Component\Validator\Mapping\ClassMetadata::getTraversalStrategy(), argumentsSet('symfony_validator_traversal_strategies'));
}