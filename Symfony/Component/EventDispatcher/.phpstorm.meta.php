<?php

namespace PHPSTORM_META {

	override(\Symfony\Component\EventDispatcher\EventDispatcher::dispatch(0), type(0));
	override(\Symfony\Component\EventDispatcher\EventDispatcher::dispatch(0), type(1)); // BC for Symfony 4.x and lower

	override(\Symfony\Contracts\EventDispatcher\EventDispatcherInterface::dispatch(0), type(0));
	override(\Symfony\Contracts\EventDispatcher\EventDispatcherInterface::dispatch(0), type(1)); // BC for Symfony 4.x and lower

	registerArgumentsSet('symfony_events',
		\Symfony\Component\HttpKernel\KernelEvents::REQUEST,
		\Symfony\Component\HttpKernel\KernelEvents::EXCEPTION,
		\Symfony\Component\HttpKernel\KernelEvents::VIEW,
		\Symfony\Component\HttpKernel\KernelEvents::CONTROLLER,
		\Symfony\Component\HttpKernel\KernelEvents::CONTROLLER_ARGUMENTS,
		\Symfony\Component\HttpKernel\KernelEvents::RESPONSE,
		\Symfony\Component\HttpKernel\KernelEvents::TERMINATE,
		\Symfony\Component\HttpKernel\KernelEvents::FINISH_REQUEST,
		\Symfony\Component\Console\ConsoleEvents::COMMAND,
		\Symfony\Component\Console\ConsoleEvents::SIGNAL,
		\Symfony\Component\Console\ConsoleEvents::TERMINATE,
		\Symfony\Component\Console\ConsoleEvents::ERROR,
		\Symfony\Component\Form\FormEvents::PRE_SUBMIT,
		\Symfony\Component\Form\FormEvents::SUBMIT,
		\Symfony\Component\Form\FormEvents::POST_SUBMIT,
		\Symfony\Component\Form\FormEvents::PRE_SET_DATA,
		\Symfony\Component\Form\FormEvents::POST_SET_DATA,
		\Symfony\Component\Security\Core\AuthenticationEvents::AUTHENTICATION_SUCCESS,
		\Symfony\Component\Security\Core\AuthenticationEvents::AUTHENTICATION_FAILURE,
		\Symfony\Component\Security\Http\SecurityEvents::INTERACTIVE_LOGIN,
		\Symfony\Component\Security\Http\SecurityEvents::SWITCH_USER
	);

	expectedArguments(\Symfony\Component\EventDispatcher\EventDispatcherInterface::dispatch(), 1, argumentsSet('symfony_events'));
	expectedArguments(\Symfony\Component\EventDispatcher\EventDispatcherInterface::getListeners(), 0, argumentsSet('symfony_events'));
	expectedArguments(\Symfony\Component\EventDispatcher\EventDispatcherInterface::getListenerPriority(), 0, argumentsSet('symfony_events'));
	expectedArguments(\Symfony\Component\EventDispatcher\EventDispatcherInterface::hasListeners(), 0, argumentsSet('symfony_events'));
	expectedArguments(\Symfony\Component\EventDispatcher\EventDispatcherInterface::addListener(), 0, argumentsSet('symfony_events'));
	expectedArguments(\Symfony\Component\EventDispatcher\EventDispatcherInterface::removeListener(), 0, argumentsSet('symfony_events'));

}
