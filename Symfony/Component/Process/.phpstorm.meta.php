<?php

namespace PHPSTORM_META {

	registerArgumentsSet('symfony_process_statuses',
		\Symfony\Component\Process\Process::STATUS_READY,
		\Symfony\Component\Process\Process::STATUS_STARTED,
		\Symfony\Component\Process\Process::STATUS_TERMINATED
	);
	expectedReturnValues(\Symfony\Component\Process\Process::getStatus(), argumentsSet('symfony_process_statuses'));

	registerArgumentsSet('symfony_process_iterator_flags',
		\Symfony\Component\Process\Process::ITER_NON_BLOCKING |
		\Symfony\Component\Process\Process::ITER_KEEP_OUTPUT |
		\Symfony\Component\Process\Process::ITER_SKIP_OUT |
		\Symfony\Component\Process\Process::ITER_SKIP_ERR
	);
	expectedArguments(\Symfony\Component\Process\Process::getIterator(), 0, argumentsSet('symfony_process_iterator_flags'));

	expectedArguments(\Symfony\Component\Process\Exception\ProcessTimedOutException::__construct(), 1, \Symfony\Component\Process\Exception\ProcessTimedOutException::TYPE_GENERAL, \Symfony\Component\Process\Exception\ProcessTimedOutException::TYPE_IDLE);
}