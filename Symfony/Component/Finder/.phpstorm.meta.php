<?php

namespace PHPSTORM_META {

	registerArgumentsSet('symfony_finder_date_prefixes',
		'since ',
		'since now',
		'since today',
		'since yesterday',
		'after ',
		'after tomorrow',
		'until ',
		'until now',
		'until tomorrow',
		'before ',
		'before today',
		'before yesterday',
		'> ', '< ', '>= ', '<= ', '== ', '!= '
	);
	expectedArguments(\Symfony\Component\Finder\Finder::date(), 0, argumentsSet('symfony_finder_date_prefixes'));

	registerArgumentsSet('symfony_finder_size_prefixes',
		'> ', '< ', '>= ', '<= ', '== ', '!= '
	);
	expectedArguments(\Symfony\Component\Finder\Finder::size(), 0, argumentsSet('symfony_finder_size_prefixes'));

	registerArgumentsSet('symfony_finder_operators',
		'==', '!=', '>', '<', '>=', '<='
	);
	expectedArguments(\Symfony\Component\Finder\Comparator\Comparator::setOperator(), 0, argumentsSet('symfony_finder_operators'));
	expectedReturnValues(\Symfony\Component\Finder\Comparator\Comparator::getOperator(), argumentsSet('symfony_finder_operators'));

	registerArgumentsSet('symfony_finder_date_operators',
		'since', 'until', 'before', 'after', '==', '!=', '>', '<', '>=', '<='
	);
	expectedArguments(\Symfony\Component\Finder\Comparator\DateComparator::setOperator(), 0, argumentsSet('symfony_finder_date_operators'));
	expectedReturnValues(\Symfony\Component\Finder\Comparator\DateComparator::getOperator(), argumentsSet('symfony_finder_date_operators'));
}