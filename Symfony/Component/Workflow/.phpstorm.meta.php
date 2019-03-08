<?php

namespace PHPSTORM_META {

	registerArgumentsSet('symfony_workflow_plantuml_transition_types',
		\Symfony\Component\Workflow\Dumper\PlantUmlDumper::STATEMACHINE_TRANSITION,
		\Symfony\Component\Workflow\Dumper\PlantUmlDumper::WORKFLOW_TRANSITION
	);
	expectedArguments(\Symfony\Component\Workflow\Dumper\PlantUmlDumper::__construct(), 0, argumentsSet('symfony_workflow_plantuml_transition_types'));
}