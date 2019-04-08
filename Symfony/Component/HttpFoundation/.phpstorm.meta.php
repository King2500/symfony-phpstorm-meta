<?php

namespace PHPSTORM_META {

    registerArgumentsSet('symfony_request_methods',
        \Symfony\Component\HttpFoundation\Request::METHOD_GET,
        \Symfony\Component\HttpFoundation\Request::METHOD_POST,
        \Symfony\Component\HttpFoundation\Request::METHOD_HEAD,
        \Symfony\Component\HttpFoundation\Request::METHOD_PUT,
        \Symfony\Component\HttpFoundation\Request::METHOD_PATCH,
        \Symfony\Component\HttpFoundation\Request::METHOD_DELETE,
        \Symfony\Component\HttpFoundation\Request::METHOD_PURGE,
        \Symfony\Component\HttpFoundation\Request::METHOD_OPTIONS,
        \Symfony\Component\HttpFoundation\Request::METHOD_TRACE,
        \Symfony\Component\HttpFoundation\Request::METHOD_CONNECT,
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
    expectedArguments(\Symfony\Component\HttpFoundation\Request::create(), 1, argumentsSet('symfony_request_methods'));
    expectedArguments(\Symfony\Component\HttpFoundation\Request::setMethod(), 0, argumentsSet('symfony_request_methods'));
    expectedArguments(\Symfony\Component\HttpFoundation\Request::isMethod(), 0, argumentsSet('symfony_request_methods'));
    expectedArguments(\Symfony\Component\HttpFoundation\Request::isMethodSafe(), 0, argumentsSet('symfony_request_methods'));
    expectedReturnValues(\Symfony\Component\HttpFoundation\Request::getMethod(), argumentsSet('symfony_request_methods'));
    expectedReturnValues(\Symfony\Component\HttpFoundation\Request::getRealMethod(), argumentsSet('symfony_request_methods'));
	expectedArguments(\Symfony\Component\HttpFoundation\RequestMatcher::matchMethod(), 0, argumentsSet('symfony_request_methods'));

    expectedArguments(\Symfony\Component\Routing\RequestContext::__construct(), 1, argumentsSet('symfony_request_methods'));
    expectedArguments(\Symfony\Component\Routing\RequestContext::setMethod(), 0, argumentsSet('symfony_request_methods'));
    expectedReturnValues(\Symfony\Component\Routing\RequestContext::getMethod(), argumentsSet('symfony_request_methods'));

	expectedArguments(\Symfony\Component\BrowserKit\Client::request(), 0, argumentsSet('symfony_request_methods'));
	expectedArguments(\Symfony\Component\BrowserKit\Client::submitForm(), 2, argumentsSet('symfony_request_methods'));

	expectedArguments(\Symfony\Component\DomCrawler\Crawler::link(), 0, argumentsSet('symfony_request_methods'));
	expectedArguments(\Symfony\Component\DomCrawler\Crawler::form(), 1, argumentsSet('symfony_request_methods'));
	expectedArguments(\Symfony\Component\DomCrawler\AbstractUriElement::__construct(), 2, argumentsSet('symfony_request_methods'));
	expectedArguments(\Symfony\Component\DomCrawler\Form::__construct(), 2, argumentsSet('symfony_request_methods'));
	expectedReturnValues(\Symfony\Component\DomCrawler\Link::getMethod(), argumentsSet('symfony_request_methods'));
	expectedReturnValues(\Symfony\Component\DomCrawler\Form::getMethod(), argumentsSet('symfony_request_methods'));

    registerArgumentsSet('symfony_request_trusted_header_set',
        \Symfony\Component\HttpFoundation\Request::HEADER_FORWARDED |
        \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_FOR |
        \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_HOST |
        \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_PROTO |
        \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_PORT |
        \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_ALL |
        \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_AWS_ELB
    );

    expectedArguments(\Symfony\Component\HttpFoundation\Request::setTrustedProxies(), 1, argumentsSet('symfony_request_trusted_header_set'));
    expectedReturnValues(\Symfony\Component\HttpFoundation\Request::getTrustedHeaderSet(), argumentsSet('symfony_request_trusted_header_set'));

    registerArgumentsSet('symfony_request_formats', 'html', 'txt', 'js', 'css', 'json', 'xml', 'rdf', 'atom', 'rss', 'form');
    expectedArguments(\Symfony\Component\HttpFoundation\Request::getMimeType(), 0, argumentsSet('symfony_request_formats'));
    expectedArguments(\Symfony\Component\HttpFoundation\Request::getMimeTypes(), 0, argumentsSet('symfony_request_formats'));
    expectedArguments(\Symfony\Component\HttpFoundation\Request::setFormat(), 0, argumentsSet('symfony_request_formats'));
    expectedArguments(\Symfony\Component\HttpFoundation\Request::getRequestFormat(), 0, argumentsSet('symfony_request_formats'));
    expectedArguments(\Symfony\Component\HttpFoundation\Request::setRequestFormat(), 0, argumentsSet('symfony_request_formats'));
    expectedReturnValues(\Symfony\Component\HttpFoundation\Request::getFormat(), argumentsSet('symfony_request_formats'));
    expectedReturnValues(\Symfony\Component\HttpFoundation\Request::getRequestFormat(), argumentsSet('symfony_request_formats'));
    expectedReturnValues(\Symfony\Component\HttpFoundation\Request::getContentType(), argumentsSet('symfony_request_formats'));

    registerArgumentsSet('symfony_request_mimes',
        'text/html',
        'text/plain',
        'application/javascript',
        'text/css',
        'application/json',
        'text/xml',
        'application/rdf+xml',
        'application/atom+xml',
        'application/rss+xml',
        'application/x-www-form-urlencoded'
    );

    expectedArguments(\Symfony\Component\HttpFoundation\Request::getFormat(), 0, argumentsSet('symfony_request_mimes'));
    expectedReturnValues(\Symfony\Component\HttpFoundation\Request::getMimeType(), argumentsSet('symfony_request_mimes'));

    registerArgumentsSet('symfony_http_protocols', 'https', 'http');
	expectedReturnValues(\Symfony\Component\HttpFoundation\Request::getScheme(), argumentsSet('symfony_http_protocols'));
	expectedArguments(\Symfony\Component\HttpFoundation\RequestMatcher::matchScheme(), 0, argumentsSet('symfony_http_protocols'));
	expectedArguments(\Symfony\Component\Routing\RequestContext::__construct(), 3, argumentsSet('symfony_http_protocols'));
	expectedArguments(\Symfony\Component\Routing\RequestContext::setScheme(), 0, argumentsSet('symfony_http_protocols'));
	expectedReturnValues(\Symfony\Component\Routing\RequestContext::getScheme(), argumentsSet('symfony_http_protocols'));
	expectedArguments(\Symfony\Component\Routing\Route::hasScheme(), 0, argumentsSet('symfony_http_protocols'));
	expectedArguments(\Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher::redirect(), 2, argumentsSet('symfony_http_protocols'));

    registerArgumentsSet('symfony_ports_http_https', 80, 443, 8080, 8081, 8090, 8008, 3128);
	expectedReturnValues(\Symfony\Component\HttpFoundation\Request::getPort(), argumentsSet('symfony_ports_http_https'));

	registerArgumentsSet('symfony_ports_http', 80, 8080, 8081, 8090, 8008, 3128);
	expectedArguments(\Symfony\Component\Routing\RequestContext::__construct(), 4, argumentsSet('symfony_ports_http'));
	expectedArguments(\Symfony\Component\Routing\RequestContext::setHttpPort(), 0, argumentsSet('symfony_ports_http'));
	expectedReturnValues(\Symfony\Component\Routing\RequestContext::getHttpPort(), argumentsSet('symfony_ports_http'));

	registerArgumentsSet('symfony_ports_https', 443);
	expectedArguments(\Symfony\Component\Routing\RequestContext::__construct(), 5, argumentsSet('symfony_ports_https'));
	expectedArguments(\Symfony\Component\Routing\RequestContext::setHttpsPort(), 0, argumentsSet('symfony_ports_https'));
	expectedReturnValues(\Symfony\Component\Routing\RequestContext::getHttpsPort(), argumentsSet('symfony_ports_https'));

    registerArgumentsSet('symfony_common_hostnames', 'localhost');
    expectedReturnValues(\Symfony\Component\HttpFoundation\Request::getHost(), argumentsSet('symfony_common_hostnames'));
    expectedReturnValues(\Symfony\Component\HttpFoundation\Request::getHttpHost(), argumentsSet('symfony_common_hostnames'));
    expectedReturnValues(\Symfony\Component\HttpFoundation\Request::getSchemeAndHttpHost(), 'http://localhost', 'https://localhost');
    expectedArguments(\Symfony\Component\HttpFoundation\RequestMatcher::matchHost(), 0, argumentsSet('symfony_common_hostnames'));

	expectedArguments(\Symfony\Component\Routing\RequestContext::__construct(), 2, argumentsSet('symfony_common_hostnames'));
	expectedArguments(\Symfony\Component\Routing\RequestContext::setHost(), 0, argumentsSet('symfony_common_hostnames'));
	expectedReturnValues(\Symfony\Component\Routing\RequestContext::getHost(), argumentsSet('symfony_common_hostnames'));
	expectedArguments(\Symfony\Component\Routing\Route::__construct(), 4, argumentsSet('symfony_common_hostnames'));
	expectedArguments(\Symfony\Component\Routing\Route::setHost(), 0, argumentsSet('symfony_common_hostnames'));
	expectedReturnValues(\Symfony\Component\Routing\Route::getHost(), argumentsSet('symfony_common_hostnames'));
	expectedArguments(\Symfony\Component\Routing\RouteCollection::setHost(), 0, argumentsSet('symfony_common_hostnames'));

    expectedArguments(\Symfony\Component\HttpFoundation\RequestMatcher::matchIp(), 0, '127.0.0.1', '192.168.');

    registerArgumentsSet('symfony_response_codes',
        \Symfony\Component\HttpFoundation\Response::HTTP_OK,
        \Symfony\Component\HttpFoundation\Response::HTTP_FOUND,
        \Symfony\Component\HttpFoundation\Response::HTTP_MOVED_PERMANENTLY,
        \Symfony\Component\HttpFoundation\Response::HTTP_TEMPORARY_REDIRECT,
        \Symfony\Component\HttpFoundation\Response::HTTP_PERMANENTLY_REDIRECT,
        \Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND,
        \Symfony\Component\HttpFoundation\Response::HTTP_FORBIDDEN,
        \Symfony\Component\HttpFoundation\Response::HTTP_INTERNAL_SERVER_ERROR,
        \Symfony\Component\HttpFoundation\Response::HTTP_CONTINUE,
        \Symfony\Component\HttpFoundation\Response::HTTP_SWITCHING_PROTOCOLS,
        \Symfony\Component\HttpFoundation\Response::HTTP_PROCESSING,
        \Symfony\Component\HttpFoundation\Response::HTTP_CREATED,
        \Symfony\Component\HttpFoundation\Response::HTTP_ACCEPTED,
        \Symfony\Component\HttpFoundation\Response::HTTP_NON_AUTHORITATIVE_INFORMATION,
        \Symfony\Component\HttpFoundation\Response::HTTP_NO_CONTENT,
        \Symfony\Component\HttpFoundation\Response::HTTP_RESET_CONTENT,
        \Symfony\Component\HttpFoundation\Response::HTTP_PARTIAL_CONTENT,
        \Symfony\Component\HttpFoundation\Response::HTTP_MULTI_STATUS,
        \Symfony\Component\HttpFoundation\Response::HTTP_ALREADY_REPORTED,
        \Symfony\Component\HttpFoundation\Response::HTTP_IM_USED,
        \Symfony\Component\HttpFoundation\Response::HTTP_MULTIPLE_CHOICES,
        \Symfony\Component\HttpFoundation\Response::HTTP_SEE_OTHER,
        \Symfony\Component\HttpFoundation\Response::HTTP_NOT_MODIFIED,
        \Symfony\Component\HttpFoundation\Response::HTTP_USE_PROXY,
        \Symfony\Component\HttpFoundation\Response::HTTP_RESERVED,
        \Symfony\Component\HttpFoundation\Response::HTTP_BAD_REQUEST,
        \Symfony\Component\HttpFoundation\Response::HTTP_UNAUTHORIZED,
        \Symfony\Component\HttpFoundation\Response::HTTP_PAYMENT_REQUIRED,
        \Symfony\Component\HttpFoundation\Response::HTTP_METHOD_NOT_ALLOWED,
        \Symfony\Component\HttpFoundation\Response::HTTP_NOT_ACCEPTABLE,
        \Symfony\Component\HttpFoundation\Response::HTTP_PROXY_AUTHENTICATION_REQUIRED,
        \Symfony\Component\HttpFoundation\Response::HTTP_REQUEST_TIMEOUT,
        \Symfony\Component\HttpFoundation\Response::HTTP_CONFLICT,
        \Symfony\Component\HttpFoundation\Response::HTTP_GONE,
        \Symfony\Component\HttpFoundation\Response::HTTP_LENGTH_REQUIRED,
        \Symfony\Component\HttpFoundation\Response::HTTP_PRECONDITION_FAILED,
        \Symfony\Component\HttpFoundation\Response::HTTP_REQUEST_ENTITY_TOO_LARGE,
        \Symfony\Component\HttpFoundation\Response::HTTP_REQUEST_URI_TOO_LONG,
        \Symfony\Component\HttpFoundation\Response::HTTP_UNSUPPORTED_MEDIA_TYPE,
        \Symfony\Component\HttpFoundation\Response::HTTP_REQUESTED_RANGE_NOT_SATISFIABLE,
        \Symfony\Component\HttpFoundation\Response::HTTP_EXPECTATION_FAILED,
        \Symfony\Component\HttpFoundation\Response::HTTP_I_AM_A_TEAPOT,
        \Symfony\Component\HttpFoundation\Response::HTTP_MISDIRECTED_REQUEST,
        \Symfony\Component\HttpFoundation\Response::HTTP_UNPROCESSABLE_ENTITY,
        \Symfony\Component\HttpFoundation\Response::HTTP_LOCKED,
        \Symfony\Component\HttpFoundation\Response::HTTP_FAILED_DEPENDENCY,
        \Symfony\Component\HttpFoundation\Response::HTTP_RESERVED_FOR_WEBDAV_ADVANCED_COLLECTIONS_EXPIRED_PROPOSAL,
        \Symfony\Component\HttpFoundation\Response::HTTP_UPGRADE_REQUIRED,
        \Symfony\Component\HttpFoundation\Response::HTTP_PRECONDITION_REQUIRED,
        \Symfony\Component\HttpFoundation\Response::HTTP_TOO_MANY_REQUESTS,
        \Symfony\Component\HttpFoundation\Response::HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE,
        \Symfony\Component\HttpFoundation\Response::HTTP_UNAVAILABLE_FOR_LEGAL_REASONS,
        \Symfony\Component\HttpFoundation\Response::HTTP_NOT_IMPLEMENTED,
        \Symfony\Component\HttpFoundation\Response::HTTP_BAD_GATEWAY,
        \Symfony\Component\HttpFoundation\Response::HTTP_SERVICE_UNAVAILABLE,
        \Symfony\Component\HttpFoundation\Response::HTTP_GATEWAY_TIMEOUT,
        \Symfony\Component\HttpFoundation\Response::HTTP_VERSION_NOT_SUPPORTED,
        \Symfony\Component\HttpFoundation\Response::HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL,
        \Symfony\Component\HttpFoundation\Response::HTTP_INSUFFICIENT_STORAGE,
        \Symfony\Component\HttpFoundation\Response::HTTP_LOOP_DETECTED,
        \Symfony\Component\HttpFoundation\Response::HTTP_NOT_EXTENDED,
        \Symfony\Component\HttpFoundation\Response::HTTP_NETWORK_AUTHENTICATION_REQUIRED
    );
	registerArgumentsSet('symfony_response_codes_redirect',
		\Symfony\Component\HttpFoundation\Response::HTTP_FOUND,
		\Symfony\Component\HttpFoundation\Response::HTTP_MOVED_PERMANENTLY,
		\Symfony\Component\HttpFoundation\Response::HTTP_SEE_OTHER,
		\Symfony\Component\HttpFoundation\Response::HTTP_TEMPORARY_REDIRECT,
		\Symfony\Component\HttpFoundation\Response::HTTP_PERMANENTLY_REDIRECT
	);

    expectedArguments(\Symfony\Component\HttpFoundation\Response::__construct(), 1, argumentsSet('symfony_response_codes'));
    expectedArguments(\Symfony\Component\HttpFoundation\Response::create(), 1, argumentsSet('symfony_response_codes'));
    expectedArguments(\Symfony\Component\HttpFoundation\Response::setStatusCode(), 0, argumentsSet('symfony_response_codes'));
	expectedReturnValues(\Symfony\Component\HttpFoundation\Response::getStatusCode(), argumentsSet('symfony_response_codes'));
    expectedArguments(\Symfony\Component\HttpFoundation\RedirectResponse::__construct(), 1, argumentsSet('symfony_response_codes_redirect'));
    expectedArguments(\Symfony\Component\HttpFoundation\RedirectResponse::create(), 1, argumentsSet('symfony_response_codes_redirect'));
    expectedArguments(\Symfony\Component\HttpFoundation\JsonResponse::__construct(), 1, argumentsSet('symfony_response_codes'));
    expectedArguments(\Symfony\Component\HttpFoundation\JsonResponse::create(), 1, argumentsSet('symfony_response_codes'));
    expectedArguments(\Symfony\Component\HttpFoundation\JsonResponse::fromJsonString(), 1, argumentsSet('symfony_response_codes'));
    expectedArguments(\Symfony\Component\HttpFoundation\StreamedResponse::__construct(), 1, argumentsSet('symfony_response_codes'));
    expectedArguments(\Symfony\Component\HttpFoundation\StreamedResponse::create(), 1, argumentsSet('symfony_response_codes'));
    expectedArguments(\Symfony\Component\HttpFoundation\BinaryFileResponse::__construct(), 1, argumentsSet('symfony_response_codes'));
    expectedArguments(\Symfony\Component\HttpFoundation\BinaryFileResponse::create(), 1, argumentsSet('symfony_response_codes'));

    expectedArguments(\Symfony\Component\HttpKernel\Exception\HttpException::__construct(), 0, argumentsSet('symfony_response_codes'));

    expectedArguments(\Symfony\Bundle\FrameworkBundle\Controller\ControllerTrait::redirect(), 1, argumentsSet('symfony_response_codes_redirect'));
    expectedArguments(\Symfony\Bundle\FrameworkBundle\Controller\ControllerTrait::redirectToRoute(), 2, argumentsSet('symfony_response_codes_redirect'));
    expectedArguments(\Symfony\Bundle\FrameworkBundle\Controller\ControllerTrait::json(), 1, argumentsSet('symfony_response_codes'));

    expectedArguments(\Symfony\Component\Security\Http\HttpUtils::createRedirectResponse(), 2, argumentsSet('symfony_response_codes_redirect'));

    expectedArguments(\header(), 2, argumentsSet('symfony_response_codes'));
	expectedArguments(\http_response_code(), 0, argumentsSet('symfony_response_codes'));
    expectedReturnValues(\http_response_code(), argumentsSet('symfony_response_codes'));

    registerArgumentsSet('symfony_response_disposition',
        \Symfony\Component\HttpFoundation\ResponseHeaderBag::DISPOSITION_ATTACHMENT,
        \Symfony\Component\HttpFoundation\ResponseHeaderBag::DISPOSITION_INLINE
    );

    expectedArguments(\Symfony\Component\HttpFoundation\ResponseHeaderBag::makeDisposition(), 0, argumentsSet('symfony_response_disposition'));
    expectedArguments(\Symfony\Component\HttpFoundation\BinaryFileResponse::__construct(), 4, argumentsSet('symfony_response_disposition'));
    expectedArguments(\Symfony\Component\HttpFoundation\BinaryFileResponse::create(), 4, argumentsSet('symfony_response_disposition'));
    expectedArguments(\Symfony\Component\HttpFoundation\BinaryFileResponse::setFile(), 1, argumentsSet('symfony_response_disposition'));
    expectedArguments(\Symfony\Component\HttpFoundation\BinaryFileResponse::setContentDisposition(), 0, argumentsSet('symfony_response_disposition'));
    expectedArguments(\Symfony\Bundle\FrameworkBundle\Controller\ControllerTrait::file(), 2, argumentsSet('symfony_response_disposition'));

    expectedArguments(\Symfony\Component\HttpFoundation\ResponseHeaderBag::getCookies(), 0,
        \Symfony\Component\HttpFoundation\ResponseHeaderBag::COOKIES_FLAT,
        \Symfony\Component\HttpFoundation\ResponseHeaderBag::COOKIES_ARRAY
    );

    registerArgumentsSet('symfony_json_encoding_options',
        \Symfony\Component\HttpFoundation\JsonResponse::DEFAULT_ENCODING_OPTIONS |
        JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_FORCE_OBJECT | JSON_PRESERVE_ZERO_FRACTION | JSON_UNESCAPED_UNICODE | JSON_PARTIAL_OUTPUT_ON_ERROR | JSON_UNESCAPED_LINE_TERMINATORS | JSON_THROW_ON_ERROR
    );

    expectedArguments(\Symfony\Component\HttpFoundation\JsonResponse::setEncodingOptions(), 0, argumentsSet('symfony_json_encoding_options'));
    expectedReturnValues(\Symfony\Component\HttpFoundation\JsonResponse::getEncodingOptions(), argumentsSet('symfony_json_encoding_options'));

    registerArgumentsSet('symfony_cookie_samesite',
        null,
        \Symfony\Component\HttpFoundation\Cookie::SAMESITE_LAX,
        \Symfony\Component\HttpFoundation\Cookie::SAMESITE_STRICT
    );
    expectedArguments(\Symfony\Component\HttpFoundation\Cookie::__construct(), 8, argumentsSet('symfony_cookie_samesite'));
    expectedReturnValues(\Symfony\Component\HttpFoundation\Cookie::getSameSite(), argumentsSet('symfony_cookie_samesite'));

    expectedArguments(\Symfony\Component\HttpFoundation\ParameterBag::filter(), 2,
        FILTER_DEFAULT,
        FILTER_VALIDATE_BOOLEAN,
        FILTER_VALIDATE_DOMAIN,
        FILTER_VALIDATE_EMAIL,
        FILTER_VALIDATE_FLOAT,
        FILTER_VALIDATE_INT,
        FILTER_VALIDATE_IP,
        FILTER_VALIDATE_MAC,
        FILTER_VALIDATE_REGEXP,
        FILTER_VALIDATE_URL,
        FILTER_SANITIZE_EMAIL,
        FILTER_SANITIZE_ENCODED,
        FILTER_SANITIZE_MAGIC_QUOTES,
        FILTER_SANITIZE_NUMBER_FLOAT,
        FILTER_SANITIZE_NUMBER_INT,
        FILTER_SANITIZE_SPECIAL_CHARS,
        FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        FILTER_SANITIZE_STRING,
        FILTER_SANITIZE_STRIPPED,
        FILTER_SANITIZE_URL,
        FILTER_UNSAFE_RAW,
        FILTER_CALLBACK
    );

    expectedArguments(\Symfony\Component\HttpFoundation\ParameterBag::filter(), 3,
        FILTER_REQUIRE_SCALAR |
        FILTER_REQUIRE_ARRAY |
        FILTER_FORCE_ARRAY |
        FILTER_NULL_ON_FAILURE |
        FILTER_FLAG_STRIP_LOW |
        FILTER_FLAG_STRIP_HIGH |
        FILTER_FLAG_STRIP_BACKTICK |
        FILTER_FLAG_ALLOW_FRACTION |
        FILTER_FLAG_ALLOW_THOUSAND |
        FILTER_FLAG_ALLOW_SCIENTIFIC |
        FILTER_FLAG_NO_ENCODE_QUOTES |
        FILTER_FLAG_ENCODE_LOW |
        FILTER_FLAG_ENCODE_HIGH |
        FILTER_FLAG_ENCODE_AMP |
        FILTER_FLAG_ALLOW_OCTAL |
        FILTER_FLAG_ALLOW_HEX |
        FILTER_FLAG_EMAIL_UNICODE |
        FILTER_FLAG_IPV4 |
        FILTER_FLAG_IPV6 |
        FILTER_FLAG_NO_PRIV_RANGE |
        FILTER_FLAG_NO_RES_RANGE |
        FILTER_FLAG_SCHEME_REQUIRED |
        FILTER_FLAG_HOST_REQUIRED |
        FILTER_FLAG_PATH_REQUIRED |
        FILTER_FLAG_QUERY_REQUIRED
    );
}
