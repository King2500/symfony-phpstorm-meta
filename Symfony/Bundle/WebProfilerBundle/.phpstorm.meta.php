<?php

namespace PHPSTORM_META {

	registerArgumentsSet('symfony_webprofiler_listener_modes',
		\Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener::ENABLED,
		\Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener::DISABLED
	);
	expectedArguments(\Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener::__construct(), 2, argumentsSet('symfony_webprofiler_listener_modes'));
}