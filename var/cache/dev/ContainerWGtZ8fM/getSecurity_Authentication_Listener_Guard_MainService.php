<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.guard.main' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall/ListenerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Guard/Firewall/GuardAuthenticationListener.php';

$this->privates['security.authentication.listener.guard.main'] = $instance = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener(($this->privates['security.authentication.guard_handler'] ?? $this->load(__DIR__.'/getSecurity_Authentication_GuardHandlerService.php')), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), 'main', new RewindableGenerator(function () {
    yield 0 => ($this->privates['App\Security\LoginFormAuthenticator'] ?? $this->load(__DIR__.'/getLoginFormAuthenticatorService.php'));
}, 1), ($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()));

$instance->setRememberMeServices(($this->privates['security.authentication.rememberme.services.simplehash.main'] ?? $this->load(__DIR__.'/getSecurity_Authentication_Rememberme_Services_Simplehash_MainService.php')));

return $instance;
