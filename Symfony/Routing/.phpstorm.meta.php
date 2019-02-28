<?php

namespace PHPSTORM_META {
// BUGGED !
//    registerArgumentsSet('symfony_url_reference_types',
//        \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_PATH,
//        \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_URL,
//        \Symfony\Component\Routing\Generator\UrlGeneratorInterface::RELATIVE_PATH,
//        \Symfony\Component\Routing\Generator\UrlGeneratorInterface::NETWORK_PATH
//    );

//    expectedArguments(\Symfony\Component\Routing\Router::generate(), 2, argumentsSet('symfony_url_reference_types'));
//    expectedArguments(\Symfony\Component\Routing\Generator\UrlGenerator::generate(), 2, argumentsSet('symfony_url_reference_types'));
//    expectedArguments(\Symfony\Component\Routing\Generator\UrlGenerator::doGenerate(), 6, argumentsSet('symfony_url_reference_types'));
//    expectedArguments(\Symfony\Component\Routing\Generator\UrlGeneratorInterface::generate(), 2, argumentsSet('symfony_url_reference_types'));
//    expectedArguments(\Symfony\Bundle\FrameworkBundle\Controller\ControllerTrait::generateUrl(), 2, argumentsSet('symfony_url_reference_types'));

    expectedArguments(\Symfony\Component\Routing\RequestContext::__construct(), 2, 'localhost');
    expectedArguments(\Symfony\Component\Routing\RequestContext::__construct(), 3, 'http', 'https');
    expectedArguments(\Symfony\Component\Routing\RequestContext::__construct(), 4, 80, 8080, 8081, 8090, 8008, 3128);
    expectedArguments(\Symfony\Component\Routing\RequestContext::__construct(), 5, 443);

    registerArgumentsSet('symfony_router_options',
        'cache_dir',
        'debug',
        'generator_class',
        'generator_base_class',
        'generator_dumper_class',
        'generator_cache_class',
        'matcher_class',
        'matcher_base_class',
        'matcher_dumper_class',
        'matcher_cache_class',
        'resource_type',
        'strict_requirements'
    );

    expectedArguments(\Symfony\Component\Routing\Router::setOption(), 0, argumentsSet('symfony_router_options'));
    expectedArguments(\Symfony\Component\Routing\Router::getOption(), 0, argumentsSet('symfony_router_options'));
}