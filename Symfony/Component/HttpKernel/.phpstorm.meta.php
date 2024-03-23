<?php

namespace PHPSTORM_META {
	registerArgumentsSet('symfony_http_kernel_requests',
		\Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST,
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

    registerArgumentsSet('php_filters',
    \Symfony\Component\HttpKernel\HttpKernelInterface::MASTER_REQUEST,
        \FILTER_VALIDATE_BOOLEAN,
        \FILTER_VALIDATE_DOMAIN,
        \FILTER_VALIDATE_EMAIL,
        \FILTER_VALIDATE_FLOAT,
        \FILTER_VALIDATE_INT,
        \FILTER_VALIDATE_IP,
        \FILTER_VALIDATE_MAC,
        \FILTER_VALIDATE_REGEXP,
        \FILTER_VALIDATE_URL,
        \FILTER_SANITIZE_EMAIL,
        \FILTER_SANITIZE_ENCODED,
        \FILTER_SANITIZE_MAGIC_QUOTES,
        \FILTER_SANITIZE_ADD_SLASHES,
        \FILTER_SANITIZE_NUMBER_FLOAT,
        \FILTER_SANITIZE_NUMBER_INT,
        \FILTER_SANITIZE_SPECIAL_CHARS,
        \FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        \FILTER_SANITIZE_STRING,
        \FILTER_SANITIZE_STRIPPED,
        \FILTER_SANITIZE_URL,
        \FILTER_UNSAFE_RAW,
        \FILTER_DEFAULT,
    );
    expectedArguments(\Symfony\Component\HttpKernel\Attribute\MapQueryParameter::__construct(), 1, argumentsSet('php_filters'));

    registerArgumentsSet('php_filter_flags',
        \FILTER_FLAG_STRIP_LOW,
        \FILTER_FLAG_STRIP_HIGH,
        \FILTER_FLAG_STRIP_BACKTICK,
        \FILTER_FLAG_ALLOW_FRACTION,
        \FILTER_FLAG_ALLOW_THOUSAND,
        \FILTER_FLAG_ALLOW_SCIENTIFIC,
        \FILTER_FLAG_NO_ENCODE_QUOTES,
        \FILTER_FLAG_ENCODE_LOW,
        \FILTER_FLAG_ENCODE_HIGH,
        \FILTER_FLAG_ENCODE_AMP,
        \FILTER_NULL_ON_FAILURE,
        \FILTER_FLAG_ALLOW_OCTAL,
        \FILTER_FLAG_ALLOW_HEX,
        \FILTER_FLAG_EMAIL_UNICODE,
        \FILTER_FLAG_IPV4,
        \FILTER_FLAG_IPV6,
        \FILTER_FLAG_NO_PRIV_RANGE,
        \FILTER_FLAG_NO_RES_RANGE,
        \FILTER_FLAG_GLOBAL_RANGE,
        \FILTER_FLAG_SCHEME_REQUIRED,
        \FILTER_FLAG_HOST_REQUIRED,
        \FILTER_FLAG_PATH_REQUIRED,
        \FILTER_FLAG_QUERY_REQUIRED,
        \FILTER_REQUIRE_SCALAR,
        \FILTER_REQUIRE_ARRAY,
        \FILTER_FORCE_ARRAY,
    );
    expectedArguments(\Symfony\Component\HttpKernel\Attribute\MapQueryParameter::__construct(), 2, argumentsSet('php_filter_flags'));

	xAdvancedCompletion(\Symfony\Component\HttpKernel\Attribute\MapDateTime::__construct(), 0, 'date_format');
}