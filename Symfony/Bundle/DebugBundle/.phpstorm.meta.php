<?php

namespace PHPSTORM_META {

	registerArgumentsSet(\Symfony\Config\DebugConfig::theme(), 0, 'dark', 'light');
	registerArgumentsSet(\Symfony\Config\DebugConfig::dumpDestination(), 0, 'php://stderr', 'php://stdout', 'tcp://%env(VAR_DUMPER_SERVER)%');

}