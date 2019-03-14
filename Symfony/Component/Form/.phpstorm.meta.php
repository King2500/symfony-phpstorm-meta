<?php

namespace PHPSTORM_META {

	registerArgumentsSet('symfony_form_methods',
		'GET', 'POST',
		'PUT', 'PATCH', 'DELETE' // handled by _method override field, see https://symfony.com/doc/current/form/action_method.html
	);
	expectedArguments(\Symfony\Component\Form\FormConfigBuilderInterface::setMethod(), 0, argumentsSet('symfony_form_methods'));
	expectedReturnValues(\Symfony\Component\Form\FormConfigBuilderInterface::getMethod(), argumentsSet('symfony_form_methods'));

	registerArgumentsSet('symfony_form_events',
		\Symfony\Component\Form\FormEvents::PRE_SUBMIT,
		\Symfony\Component\Form\FormEvents::SUBMIT,
		\Symfony\Component\Form\FormEvents::POST_SUBMIT,
		\Symfony\Component\Form\FormEvents::PRE_SET_DATA,
		\Symfony\Component\Form\FormEvents::POST_SET_DATA
	);
	expectedArguments(\Symfony\Component\Form\FormConfigBuilderInterface::addEventListener(), 0, argumentsSet('symfony_form_events'));

	registerArgumentsSet('symfony_rounding_modes',
		\Symfony\Component\Form\Extension\Core\DataTransformer\NumberToLocalizedStringTransformer::ROUND_CEILING,
		\Symfony\Component\Form\Extension\Core\DataTransformer\NumberToLocalizedStringTransformer::ROUND_FLOOR,
		\Symfony\Component\Form\Extension\Core\DataTransformer\NumberToLocalizedStringTransformer::ROUND_UP,
		\Symfony\Component\Form\Extension\Core\DataTransformer\NumberToLocalizedStringTransformer::ROUND_DOWN,
		\Symfony\Component\Form\Extension\Core\DataTransformer\NumberToLocalizedStringTransformer::ROUND_HALF_EVEN,
		\Symfony\Component\Form\Extension\Core\DataTransformer\NumberToLocalizedStringTransformer::ROUND_HALF_UP,
		\Symfony\Component\Form\Extension\Core\DataTransformer\NumberToLocalizedStringTransformer::ROUND_HALF_DOWN
	);
	expectedArguments(\Symfony\Component\Form\Extension\Core\DataTransformer\NumberToLocalizedStringTransformer::__construct(), 2, argumentsSet('symfony_rounding_modes'));
	expectedArguments(\Symfony\Component\Form\Extension\Core\DataTransformer\MoneyToLocalizedStringTransformer::__construct(), 2, argumentsSet('symfony_rounding_modes'));
	expectedArguments(\Symfony\Component\Form\Extension\Core\DataTransformer\IntegerToLocalizedStringTransformer::__construct(), 1, argumentsSet('symfony_rounding_modes'));

	registerArgumentsSet('symfony_percent_transformer_types',
		\Symfony\Component\Form\Extension\Core\DataTransformer\PercentToLocalizedStringTransformer::FRACTIONAL,
		\Symfony\Component\Form\Extension\Core\DataTransformer\PercentToLocalizedStringTransformer::INTEGER
	);
	expectedArguments(\Symfony\Component\Form\Extension\Core\DataTransformer\PercentToLocalizedStringTransformer::__construct(), 1, argumentsSet('symfony_percent_transformer_types'));

	registerArgumentsSet('symfony_form_guesser_confidences',
		\Symfony\Component\Form\Guess\Guess::VERY_HIGH_CONFIDENCE,
		\Symfony\Component\Form\Guess\Guess::HIGH_CONFIDENCE,
		\Symfony\Component\Form\Guess\Guess::MEDIUM_CONFIDENCE,
		\Symfony\Component\Form\Guess\Guess::LOW_CONFIDENCE
	);
	expectedArguments(\Symfony\Component\Form\Guess\Guess::__construct(), 0, argumentsSet('symfony_form_guesser_confidences'));
	expectedArguments(\Symfony\Component\Form\Guess\TypeGuess::__construct(), 2, argumentsSet('symfony_form_guesser_confidences'));
	expectedArguments(\Symfony\Component\Form\Guess\ValueGuess::__construct(), 1, argumentsSet('symfony_form_guesser_confidences'));
	expectedReturnValues(\Symfony\Component\Form\Guess\Guess::getConfidence(), argumentsSet('symfony_form_guesser_confidences'));
}