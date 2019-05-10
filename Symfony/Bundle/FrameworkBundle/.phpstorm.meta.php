<?php

namespace PHPSTORM_META {

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

}