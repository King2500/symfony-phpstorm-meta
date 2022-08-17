<?php

namespace PHPSTORM_META {

	registerArgumentsSet('symfony_httpclient_default_options', array(
		'auth_basic' => null, // array|string
		'auth_bearer' => null, // string
		'auth_ntlm' => null, // string // since Symfony 4.4
		'query' => [], // string[]
		'headers' => [
			'Accept' => '',
			'Accept-Charset' => '',
			'Accept-Encoding' => '',
			'Accept-Language' => '',
			'Access-Control-Request-Headers' => '',
			'Access-Control-Request-Method' => '',
			'Authorization' => '',
			'Cache-Control' => '',
			'Connection' => '',
			'Content-Encoding' => '',
			'Content-Length' => 0,
			'Content-Type' => '',
			'Cookie' => '',
			'Date' => '',
			'DNT' => '',
			'Downlink' => '',
			'DPR' => 1,
			'Early-Data' => 1,
			'Expect' => '',
			'Forwarded' => '',
			'From' => '',
			'Front-End-Https' => '',
			'Host' => '',
			'If-Match' => '',
			'If-Modified-Since' => '',
			'If-None-Match' => '',
			'If-Range' => '',
			'If-Unmodified-Since' => '',
			'Max-Forwards' => '',
			'Origin' => '',
			'Pragma' => '',
			'Proxy-Authorization' => '',
			'Proxy-Connection' => '',
			'Range' => '',
			'Referer' => '',
			'Save-Data' => '',
			'TE' => '',
			'Upgrade-Insecure-Requests' => '',
			'User-Agent' => '',
			'Via' => '',
			'Viewport-Width' => 0,
			'Width' => 0,
			'X-Forwarded-For' => '',
			'X-Forwarded-Host' => '',
			'X-Forwarded-Proto' => '',
			'X-Powered-By' => '',
			'X-Requested-With' => '',
		], // iterable|string[]|string[][]
		'body' => '', // array|string|resource|\Traversable|\Closure
		'json' => null, // array|object|\JsonSerializable
		'user_data' => null, // mixed
		'max_redirects' => 20, // int
		'http_version' => null, // string
		'base_uri' => null, // string
		'buffer' => true, // bool
		'on_progress' => null, // callable(int $dlNow, int $dlSize, array $info)
		'resolve' => [], // string[]
		'proxy' => null, // string
		'no_proxy' => null, // string
		'timeout' => null, // float
		'bindto' => '0', // string
		'verify_peer' => true,
		'verify_host' => true,
		'cafile' => null,
		'capath' => null,
		'local_cert' => null,
		'local_pk' => null,
		'passphrase' => null,
		'ciphers' => null,
		'peer_fingerprint' => null,
		'capture_peer_cert_chain' => false,
		'extra' => [],
	));
	expectedArguments(\Symfony\Component\HttpClient\HttpClient::create(), 0, argumentsSet('symfony_httpclient_default_options'));
	expectedArguments(\Symfony\Contracts\HttpClient\HttpClientInterface::request(), 2, argumentsSet('symfony_httpclient_default_options'));
	expectedArguments(\Symfony\Component\HttpClient\ScopingHttpClient::request(), 2, argumentsSet('symfony_httpclient_default_options'));

	registerArgumentsSet('symfony_httpclient_scoping_array_options', array(
		'*' => array(
			'auth_basic' => null, // array|string
			'auth_bearer' => null, // string
			'auth_ntlm' => null, // string // since Symfony 4.4
			'query' => [], // string[]
			'headers' => [
				'Accept' => '',
				'Accept-Charset' => '',
				'Accept-Encoding' => '',
				'Accept-Language' => '',
				'Access-Control-Request-Headers' => '',
				'Access-Control-Request-Method' => '',
				'Authorization' => '',
				'Cache-Control' => '',
				'Connection' => '',
				'Content-Encoding' => '',
				'Content-Length' => 0,
				'Content-Type' => '',
				'Cookie' => '',
				'Date' => '',
				'DNT' => '',
				'Downlink' => '',
				'DPR' => 1,
				'Early-Data' => 1,
				'Expect' => '',
				'Forwarded' => '',
				'From' => '',
				'Front-End-Https' => '',
				'Host' => '',
				'If-Match' => '',
				'If-Modified-Since' => '',
				'If-None-Match' => '',
				'If-Range' => '',
				'If-Unmodified-Since' => '',
				'Max-Forwards' => '',
				'Origin' => '',
				'Pragma' => '',
				'Proxy-Authorization' => '',
				'Proxy-Connection' => '',
				'Range' => '',
				'Referer' => '',
				'Save-Data' => '',
				'TE' => '',
				'Upgrade-Insecure-Requests' => '',
				'User-Agent' => '',
				'Via' => '',
				'Viewport-Width' => 0,
				'Width' => 0,
				'X-Forwarded-For' => '',
				'X-Forwarded-Host' => '',
				'X-Forwarded-Proto' => '',
				'X-Powered-By' => '',
				'X-Requested-With' => '',
			], // iterable|string[]|string[][]
			'body' => '', // array|string|resource|\Traversable|\Closure
			'json' => null, // array|object|\JsonSerializable
			'user_data' => null, // mixed
			'max_redirects' => 20, // int
			'http_version' => null, // string
			'base_uri' => null, // string
			'buffer' => true, // bool
			'on_progress' => null, // callable(int $dlNow, int $dlSize, array $info)
			'resolve' => [], // string[]
			'proxy' => null, // string
			'no_proxy' => null, // string
			'timeout' => null, // float
			'bindto' => '0', // string
			'verify_peer' => true,
			'verify_host' => true,
			'cafile' => null,
			'capath' => null,
			'local_cert' => null,
			'local_pk' => null,
			'passphrase' => null,
			'ciphers' => null,
			'peer_fingerprint' => null,
			'capture_peer_cert_chain' => false,
			'extra' => [],
		)
	));
	expectedArguments(\Symfony\Component\HttpClient\ScopingHttpClient::__construct(), 1, argumentsSet('symfony_httpclient_scoping_array_options'));

	registerArgumentsSet('symfony_httpclient_request_methods',
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
	expectedArguments(\Symfony\Contracts\HttpClient\HttpClientInterface::request(), 0, argumentsSet('symfony_httpclient_request_methods'));
	expectedArguments(\Nyholm\Psr7\Factory\Psr17Factory::createRequest(), 0, argumentsSet('symfony_httpclient_request_methods'));

	registerArgumentsSet('symfony_httpclient_infos', array(
		'response_headers' => '',
		'redirect_count' => 0,
		'redirect_url' => '',
		'start_time' => 0.0,
		'http_method' => '',
		'http_code' => 0,
		'error' => '',
		'user_data' => null,
		'url' => '',
	));
	expectedReturnValues(\Symfony\Contracts\HttpClient\ResponseInterface::getInfo(), argumentsSet('symfony_httpclient_infos'));

	registerArgumentsSet('symfony_httpclient_infos_keys',
		'response_headers',
		'redirect_count',
		'redirect_url',
		'start_time',
		'http_method',
		'http_code',
		'error',
		'debug', // since Symfony 4.4
		'user_data',
		'url'
	);
	expectedArguments(\Symfony\Contracts\HttpClient\ResponseInterface::getInfo(), 0, argumentsSet('symfony_httpclient_infos_keys'));

	registerArgumentsSet('symfony_httpclient_response_headers_array', array(
		'accept-ranges' => [],
		'accept-ch' => [],
		'accept-ch-lifetime' => [],
		'access-control-allow-credentials' => [],
		'access-control-allow-headers' => [],
		'access-control-allow-methods' => [],
		'access-control-allow-origin' => [],
		'access-control-expose-headers' => [],
		'access-control-max-age' => [],
		'age' => [],
		'allow' => [],
		'cache-control' => [],
		'clear-site-data' => [],
		'connection' => [],
		'content-dpr' => [],
		'content-encoding' => [],
		'content-language' => [],
		'content-length' => [],
		'content-location' => [],
		'content-md5' => [],
		'content-disposition' => [],
		'content-range' => [],
		'content-security-policy' => [],
		'content-security-policy-report-only' => [],
		'content-type' => [],
		'cross-origin-resource-policy' => [],
		'date' => [],
		'etag' => [],
		'expect-ct' => [],
		'expires' => [],
		'feature-policy' => [],
		'keep-alive' => [],
		'large-allocation' => [],
		'last-modified' => [],
		'link' => [],
		'location' => [],
		'p3p' => [],
		'pragma' => [],
		'proxy-authenticate' => [],
		'public-key-pins' => [],
		'public-key-pins-report-only' => [],
		'referrer-policy' => [],
		'refresh' => [],
		'retry-after' => [],
		'server' => [],
		'server-timing' => [],
		'set-cookie' => [],
		'sourcemap' => [],
		'status' => [],
		'strict-transport-security' => [],
		'timing-allow-origin' => [],
		'tk' => [],
		'trailer' => [],
		'transfer-encoding' => [],
		'vary' => [],
		'via' => [],
		'warning' => [],
		'www-authenticate' => [],
		'x-content-security-policy' => [],
		'x-content-type-options' => [],
		'x-dns-prefetch-control' => [],
		'x-frame-options' => [],
		'x-powered-by' => [],
		'x-robots-tag' => [],
		'x-sourcemap' => [],
		'x-ua-compatible' => [],
		'x-webkit-csp' => [],
		'x-xss-protection' => [],
	));
	expectedReturnValues(\Symfony\Contracts\HttpClient\ResponseInterface::getHeaders(), argumentsSet('symfony_httpclient_response_headers_array'));

    registerArgumentsSet('symfony_response_codes_client_exception',
        \Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND,
        \Symfony\Component\HttpFoundation\Response::HTTP_FORBIDDEN,
        \Symfony\Component\HttpFoundation\Response::HTTP_GONE,
        \Symfony\Component\HttpFoundation\Response::HTTP_BAD_REQUEST,
        \Symfony\Component\HttpFoundation\Response::HTTP_UNAUTHORIZED,
        \Symfony\Component\HttpFoundation\Response::HTTP_PAYMENT_REQUIRED,
        \Symfony\Component\HttpFoundation\Response::HTTP_METHOD_NOT_ALLOWED,
        \Symfony\Component\HttpFoundation\Response::HTTP_NOT_ACCEPTABLE,
        \Symfony\Component\HttpFoundation\Response::HTTP_PROXY_AUTHENTICATION_REQUIRED,
        \Symfony\Component\HttpFoundation\Response::HTTP_REQUEST_TIMEOUT,
        \Symfony\Component\HttpFoundation\Response::HTTP_CONFLICT,
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
        \Symfony\Component\HttpFoundation\Response::HTTP_TOO_EARLY,
        \Symfony\Component\HttpFoundation\Response::HTTP_UPGRADE_REQUIRED,
        \Symfony\Component\HttpFoundation\Response::HTTP_PRECONDITION_REQUIRED,
        \Symfony\Component\HttpFoundation\Response::HTTP_TOO_MANY_REQUESTS,
        \Symfony\Component\HttpFoundation\Response::HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE,
        \Symfony\Component\HttpFoundation\Response::HTTP_UNAVAILABLE_FOR_LEGAL_REASONS
    );
    expectedReturnValues(\Symfony\Component\HttpClient\Exception\ClientException::getCode(), argumentsSet('symfony_response_codes_client_exception'));
}
