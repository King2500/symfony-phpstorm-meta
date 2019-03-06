<?php

namespace PHPSTORM_META {

    override(\Symfony\Component\Templating\PhpEngine::get(0),
        map([
            'slots' => \Symfony\Component\Templating\Helper\SlotsHelper::class,
        ])
    );
    override(new \Symfony\Component\Templating\PhpEngine,
        map([
            'slots' => \Symfony\Component\Templating\Helper\SlotsHelper::class,
        ])
    );

    expectedArguments(\Symfony\Component\Templating\Helper\SlotsHelper::output(), 0, '_content');
    expectedArguments(\Symfony\Component\Templating\Helper\SlotsHelper::get(), 0, '_content');
    expectedArguments(\Symfony\Component\Templating\Helper\SlotsHelper::has(), 0, '_content');
    //expectedArguments(\Symfony\Component\Templating\Helper\SlotsHelper::set(), 0, '_content');  // not recommended

    registerArgumentsSet('symfony_templatereference_parameters', 'name', 'engine');
    expectedArguments(\Symfony\Component\Templating\TemplateReferenceInterface::set(), 0, argumentsSet('symfony_templatereference_parameters'));
    expectedArguments(\Symfony\Component\Templating\TemplateReferenceInterface::get(), 0, argumentsSet('symfony_templatereference_parameters'));
    expectedArguments(\Symfony\Component\Templating\TemplateReference::set(), 0, argumentsSet('symfony_templatereference_parameters'));
    expectedArguments(\Symfony\Component\Templating\TemplateReference::get(), 0, argumentsSet('symfony_templatereference_parameters'));
}