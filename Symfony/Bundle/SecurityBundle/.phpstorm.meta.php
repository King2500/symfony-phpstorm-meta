<?php

namespace PHPSTORM_META {

	registerArgumentsSet('symfony_security_session_auth_strategies',
		\Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy::MIGRATE,
		\Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy::INVALIDATE,
		\Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy::NONE
	);
	expectedArguments(\Symfony\Config\SecurityConfig::sessionFixationStrategy(), 0, argumentsSet('symfony_security_session_auth_strategies'));

	registerArgumentsSet('symfony_security_accessdecision_strategies',

		// we can't use them, as these are marked as @internal ...
		//\Symfony\Bundle\SecurityBundle\DependencyInjection\MainConfiguration::STRATEGY_AFFIRMATIVE,
		//\Symfony\Bundle\SecurityBundle\DependencyInjection\MainConfiguration::STRATEGY_CONSENSUS,
		//\Symfony\Bundle\SecurityBundle\DependencyInjection\MainConfiguration::STRATEGY_UNANIMOUS,
		//\Symfony\Bundle\SecurityBundle\DependencyInjection\MainConfiguration::STRATEGY_PRIORITY,

		'affirmative',
		'consensus',
		'unanimous',
		'priority'
	);
	expectedArguments(\Symfony\Config\Security\AccessDecisionManagerConfig::strategy(), 0, argumentsSet('symfony_security_accessdecision_strategies'));

	expectedArguments(\Symfony\Config\Security\FirewallConfig\RememberMeConfig::samesite(), 0, 'lax', 'strict', 'none', null);
}