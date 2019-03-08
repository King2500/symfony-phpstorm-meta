<?php

namespace PHPSTORM_META {

	expectedArguments(\Symfony\Component\Ldap\Ldap::create(), 0, 'ext_ldap');
	expectedArguments(\Symfony\Component\Ldap\Ldap::query(), 0, 'dc=');
	expectedArguments(\Symfony\Component\Ldap\Entry::__construct(), 0, 'cn=');

	registerArgumentsSet('symfony_ldap_connection_options',
		'api_info',
		'deref',
		'sizelimit',
		'timelimit',
		'referrals',
		'restart',
		'protocol_version',
		'server_controls',
		'client_controls',
		'api_feature_info',
		'host_name',
		'error_number',
		'error_string',
		'matched_dn',
		'debug_level',
		'timeout',
		'network_timeout',
		'x_sasl_mech',
		'x_sasl_realm',
		'x_sasl_authcid',
		'x_sasl_authzid'
	);
	expectedArguments(\Symfony\Component\Ldap\Adapter\ExtLdap\Connection::setOption(), 0, argumentsSet('symfony_ldap_connection_options'));
	expectedArguments(\Symfony\Component\Ldap\Adapter\ExtLdap\Connection::getOption(), 0, argumentsSet('symfony_ldap_connection_options'));
	expectedArguments(\Symfony\Component\Ldap\Adapter\ExtLdap\ConnectionOptions::getOptionName(), 0, argumentsSet('symfony_ldap_connection_options'));
	expectedArguments(\Symfony\Component\Ldap\Adapter\ExtLdap\ConnectionOptions::getOption(), 0, argumentsSet('symfony_ldap_connection_options'));
	expectedArguments(\Symfony\Component\Ldap\Adapter\ExtLdap\ConnectionOptions::isOption(), 0, argumentsSet('symfony_ldap_connection_options'));

	registerArgumentsSet('symfony_ldap_escape_flags',
		\Symfony\Component\Ldap\LdapInterface::ESCAPE_FILTER,
		\Symfony\Component\Ldap\LdapInterface::ESCAPE_DN
	);
	expectedArguments(\Symfony\Component\Ldap\LdapInterface::escape(), 2, argumentsSet('symfony_ldap_escape_flags'));
	expectedArguments(\Symfony\Component\Ldap\Ldap::escape(), 2, argumentsSet('symfony_ldap_escape_flags'));
	expectedArguments(\Symfony\Component\Ldap\Adapter\AdapterInterface::escape(), 2, argumentsSet('symfony_ldap_escape_flags'));
	expectedArguments(\Symfony\Component\Ldap\Adapter\ExtLdap\Adapter::escape(), 2, argumentsSet('symfony_ldap_escape_flags'));

	registerArgumentsSet('symfony_ldap_update_operation_types',
		\LDAP_MODIFY_BATCH_ADD,
		\LDAP_MODIFY_BATCH_REMOVE,
		\LDAP_MODIFY_BATCH_REMOVE_ALL,
		\LDAP_MODIFY_BATCH_REPLACE
	);
	expectedArguments(\Symfony\Component\Ldap\Adapter\ExtLdap\UpdateOperation::__construct(), 0, argumentsSet('symfony_ldap_update_operation_types'));
}