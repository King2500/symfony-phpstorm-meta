<?php

namespace PHPSTORM_META {

    registerArgumentsSet('symfony_url_reference_types',
        \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_PATH,
        \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_URL,
        \Symfony\Component\Routing\Generator\UrlGeneratorInterface::RELATIVE_PATH,
        \Symfony\Component\Routing\Generator\UrlGeneratorInterface::NETWORK_PATH
    );
    expectedArguments(\Symfony\Component\Routing\Router::generate(), 2, argumentsSet('symfony_url_reference_types'));
    expectedArguments(\Symfony\Component\Routing\Generator\UrlGenerator::generate(), 2, argumentsSet('symfony_url_reference_types'));
    expectedArguments(\Symfony\Component\Routing\Generator\UrlGenerator::doGenerate(), 6, argumentsSet('symfony_url_reference_types'));
    expectedArguments(\Symfony\Component\Routing\Generator\UrlGeneratorInterface::generate(), 2, argumentsSet('symfony_url_reference_types'));
    expectedArguments(\Symfony\Bundle\FrameworkBundle\Controller\ControllerTrait::generateUrl(), 2, argumentsSet('symfony_url_reference_types'));

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

	registerArgumentsSet('symfony_route_options',
		'utf8',
		'compiler_class'
	);
	expectedArguments(\Symfony\Component\Routing\Route::setOption(), 0, argumentsSet('symfony_route_options'));
	expectedArguments(\Symfony\Component\Routing\Route::getOption(), 0, argumentsSet('symfony_route_options'));
	expectedArguments(\Symfony\Component\Routing\Route::hasOption(), 0, argumentsSet('symfony_route_options'));
	expectedArguments(\Symfony\Component\Routing\RouteCollectionBuilder::setOption(), 0, argumentsSet('symfony_route_options'));

	registerArgumentsSet('symfony_route_loader_types',
		'annotation',
		'closure',
		'directory',
		'glob',
		'service',
		'php',
		'xml',
		'yaml'
	);
	expectedArguments(\Symfony\Component\Routing\RouteCollectionBuilder::import(), 2, argumentsSet('symfony_route_loader_types'));

	registerArgumentsSet('symfony_route_methods',
		'GET',
		'POST',
		'HEAD',
		'PUT',
		'PATCH',
		'DELETE',
		'PURGE',
		'OPTIONS',
		'TRACE',
		'CONNECT'
	);
	expectedArguments(\Symfony\Component\Routing\Annotation\Route::__construct(), 6, argumentsSet('symfony_route_methods'));

	registerArgumentsSet('symfony_route_schemes',
		'https',
		'http'
	);
	expectedArguments(\Symfony\Component\Routing\Annotation\Route::__construct(), 7, argumentsSet('symfony_route_schemes'));

	registerArgumentsSet('symfony_route_formats',
		'html',
		'txt',
		'js',
		'css',
		'json',
		'xml',
		'rdf',
		'atom',
		'rss',
		'form'
	);
	expectedArguments(\Symfony\Component\Routing\Annotation\Route::__construct(), 11, argumentsSet('symfony_route_formats'));

	expectedArguments(\Symfony\Component\Routing\Annotation\Route::__construct(), 14, 'dev', 'prod', 'test');
}