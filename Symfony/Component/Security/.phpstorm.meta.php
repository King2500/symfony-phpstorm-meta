<?php

namespace PHPSTORM_META {

	registerArgumentsSet('symfony_security_vote_strategies',
		\Symfony\Component\Security\Core\Authorization\AccessDecisionManager::STRATEGY_AFFIRMATIVE,
		\Symfony\Component\Security\Core\Authorization\AccessDecisionManager::STRATEGY_CONSENSUS,
		\Symfony\Component\Security\Core\Authorization\AccessDecisionManager::STRATEGY_UNANIMOUS
	);
	expectedArguments(\Symfony\Component\Security\Core\Authorization\AccessDecisionManager::__construct(), 1, argumentsSet('symfony_security_vote_strategies'));

	registerArgumentsSet('symfony_security_voter_access',
		\Symfony\Component\Security\Core\Authorization\Voter\VoterInterface::ACCESS_GRANTED,
		\Symfony\Component\Security\Core\Authorization\Voter\VoterInterface::ACCESS_ABSTAIN,
		\Symfony\Component\Security\Core\Authorization\Voter\VoterInterface::ACCESS_DENIED
	);
	expectedReturnValues(\Symfony\Component\Security\Core\Authorization\Voter\VoterInterface::vote(), argumentsSet('symfony_security_voter_access'));
	expectedReturnValues(\Symfony\Component\Security\Core\Authorization\Voter\Voter::vote(), argumentsSet('symfony_security_voter_access'));
	expectedReturnValues(\Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter::vote(), argumentsSet('symfony_security_voter_access'));
	expectedReturnValues(\Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter::vote(), argumentsSet('symfony_security_voter_access'));
	expectedReturnValues(\Symfony\Component\Security\Core\Authorization\Voter\RoleVoter::vote(), argumentsSet('symfony_security_voter_access'));
	expectedReturnValues(\Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter::vote(), argumentsSet('symfony_security_voter_access'));
}