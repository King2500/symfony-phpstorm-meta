<?php

namespace PHPSTORM_META {
	registerArgumentsSet('symfony_http_kernel_requests',
		\Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST,
		\Symfony\Component\HttpKernel\HttpKernelInterface::MAIN_REQUEST,
		\Symfony\Component\HttpKernel\HttpKernelInterface::SUB_REQUEST
	);

	expectedArguments(\Symfony\Component\HttpKernel\HttpKernelInterface::handle(), 1, argumentsSet('symfony_http_kernel_requests'));
	expectedArguments(\Symfony\Component\HttpKernel\HttpKernel::handle(), 1, argumentsSet('symfony_http_kernel_requests'));
	expectedArguments(\Symfony\Component\HttpKernel\HttpCache\HttpCache::handle(), 1, argumentsSet('symfony_http_kernel_requests'));
	expectedArguments(\Symfony\Component\HttpKernel\Kernel::handle(), 1, argumentsSet('symfony_http_kernel_requests'));
	expectedArguments(\Symfony\Component\HttpKernel\Event\KernelEvent::__construct(), 2, argumentsSet('symfony_http_kernel_requests'));
	expectedArguments(\Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent::__construct(), 2, argumentsSet('symfony_http_kernel_requests'));

	expectedReturnValues(\Symfony\Component\HttpKernel\Event\KernelEvent::getRequestType(), argumentsSet('symfony_http_kernel_requests'));

	expectedArguments(\Symfony\Component\HttpKernel\Fragment\FragmentHandler::render(), 1, 'inline', 'esi', 'ssi', 'hinclude');

	xAdvancedCompletion(\Symfony\Component\HttpKernel\Attribute\MapDateTime::__construct(), 0, 'date_format');
}
