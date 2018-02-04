<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.guard.main' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Core/Authentication/Provider/AuthenticationProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Guard/Provider/GuardAuthenticationProvider.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/User/UserCheckerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Core/User/UserChecker.php';

return $this->privates['security.authentication.provider.guard.main'] = new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(new RewindableGenerator(function () {
    yield 0 => ($this->privates['App\Security\LoginFormAuthenticator'] ?? $this->load(__DIR__.'/getLoginFormAuthenticatorService.php'));
}, 1), ($this->privates['security.user.provider.concrete.db_provider'] ?? $this->load(__DIR__.'/getSecurity_User_Provider_Concrete_DbProviderService.php')), 'main', ($this->privates['security.user_checker'] ?? $this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker()));