<?php

namespace PHPSTORM_META {

	registerArgumentsSet('symfony_weblink_rels',
		\Symfony\Component\WebLink\Link::REL_ALTERNATE,
		\Symfony\Component\WebLink\Link::REL_AUTHOR,
		\Symfony\Component\WebLink\Link::REL_HELP,
		\Symfony\Component\WebLink\Link::REL_ICON,
		\Symfony\Component\WebLink\Link::REL_LICENSE,
		\Symfony\Component\WebLink\Link::REL_SEARCH,
		\Symfony\Component\WebLink\Link::REL_STYLESHEET,
		\Symfony\Component\WebLink\Link::REL_NEXT,
		\Symfony\Component\WebLink\Link::REL_PREV,
		\Symfony\Component\WebLink\Link::REL_PRELOAD,
		\Symfony\Component\WebLink\Link::REL_DNS_PREFETCH,
		\Symfony\Component\WebLink\Link::REL_PRECONNECT,
		\Symfony\Component\WebLink\Link::REL_PREFETCH,
		\Symfony\Component\WebLink\Link::REL_PRERENDER,
		\Symfony\Component\WebLink\Link::REL_MERCURE,
		'alternate',
		'author',
		'help',
		'icon',
		'license',
		'search',
		'stylesheet',
		'next',
		'prev',
		'preload',
		'dns-prefetch',
		'preconnect',
		'prefetch',
		'prerender',
		'mercure'
	);
	expectedArguments(\Symfony\Component\WebLink\Link::__construct(), 0, argumentsSet('symfony_weblink_rels'));
	expectedArguments(\Symfony\Component\WebLink\GenericLinkProvider::getLinksByRel(), 0, argumentsSet('symfony_weblink_rels'));
	expectedArguments(\Psr\Link\EvolvableLinkInterface::withRel(), 0, argumentsSet('symfony_weblink_rels'));
	expectedArguments(\Psr\Link\EvolvableLinkInterface::withoutRel(), 0, argumentsSet('symfony_weblink_rels'));

	registerArgumentsSet('symfony_weblink_attributes',
		'as',
		'pr',
		'crossorigin',
		'nopush'
	);
	expectedArguments(\Psr\Link\EvolvableLinkInterface::withAttribute(), 0, argumentsSet('symfony_weblink_attributes'));
	expectedArguments(\Psr\Link\EvolvableLinkInterface::withoutAttribute(), 0, argumentsSet('symfony_weblink_attributes'));
}