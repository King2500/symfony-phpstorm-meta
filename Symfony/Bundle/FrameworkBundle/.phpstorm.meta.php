<?php

namespace PHPSTORM_META {

	use Symfony\Component\HttpFoundation\Cookie;

	override(\Symfony\Bundle\FrameworkBundle\Templating\PhpEngine::get(0),
        map([
            'actions' => \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper::class,
            'assets' => \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper::class,
            'code' => \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper::class,
            'form' => \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper::class,
            'request' => \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper::class,
            'router' => \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper::class,
            'session' => \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper::class,
            //'stopwatch' => \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper::class,
            'stopwatch' => \Symfony\Component\Stopwatch\Stopwatch::class,
            'translator' => \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper::class,
        ])
    );
    override(new \Symfony\Bundle\FrameworkBundle\Templating\PhpEngine,
        map([
            'actions' => \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper::class,
            'assets' => \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper::class,
            'code' => \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper::class,
            'form' => \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper::class,
            'request' => \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper::class,
            'router' => \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper::class,
            'session' => \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper::class,
            //'stopwatch' => \Symfony\Bundle\FrameworkBundle\Templating\Helper\StopwatchHelper::class,
            'stopwatch' => \Symfony\Component\Stopwatch\Stopwatch::class,
            'translator' => \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper::class,
        ])
    );

	registerArgumentsSet('symfony_framework_templatereference_parameters',
		'bundle',
		'controller',
		'name',
		'format',
		'engine'
	);
	expectedArguments(\Symfony\Bundle\FrameworkBundle\Templating\TemplateReference::set(), 0, argumentsSet('symfony_framework_templatereference_parameters'));
	expectedArguments(\Symfony\Bundle\FrameworkBundle\Templating\TemplateReference::get(), 0, argumentsSet('symfony_framework_templatereference_parameters'));

	registerArgumentsSet('symfony_framework_templatereference_parameters_array', array(
		'bundle' => '',
		'controller' => '',
		'name' => '',
		'format' => '',
		'engine' => '',
	));
	expectedReturnValues(\Symfony\Bundle\FrameworkBundle\Templating\TemplateReference::all(), argumentsSet('symfony_framework_templatereference_parameters_array'));

	expectedArguments(\Symfony\Config\Framework\AnnotationsConfig::cache(), 0, 'php_array', 'file', 'none');
	expectedArguments(\Symfony\Config\Framework\HttpCacheConfig::traceLevel(), 0, 'none', 'short', 'full');
	expectedArguments(\Symfony\Config\Framework\RateLimiter\LimiterConfig::policy(), 0, 'fixed_window', 'token_bucket', 'sliding_window', 'no_limit');
	expectedArguments(\Symfony\Config\Framework\Workflows\WorkflowsConfig::type(), 0, 'state_machine', 'workflow');

	registerArgumentsSet('symfony_framework_cookie_samesite',
		Cookie::SAMESITE_LAX,
		Cookie::SAMESITE_STRICT,
		Cookie::SAMESITE_NONE,
		null
	);
	expectedArguments(\Symfony\Config\Framework\SessionConfig::cookieSamesite(), 0, argumentsSet('symfony_framework_cookie_samesite'));

	registerArgumentsSet('symfony_framework_email_validation_modes',
		\Symfony\Component\Validator\Constraints\Email::VALIDATION_MODE_HTML5,
		\Symfony\Component\Validator\Constraints\Email::VALIDATION_MODE_STRICT,
		\Symfony\Component\Validator\Constraints\Email::VALIDATION_MODE_LOOSE
	);
	expectedArguments(\Symfony\Config\Framework\ValidationConfig::emailValidationMode(), 0, argumentsSet('symfony_framework_email_validation_modes'));
}