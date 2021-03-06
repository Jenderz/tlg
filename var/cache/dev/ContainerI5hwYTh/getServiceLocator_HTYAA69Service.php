<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.hTYAA69' shared service.

return $this->privates['service_locator.hTYAA69'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('authenticatorHandler' => function () {
    return ($this->privates['security.authentication.guard_handler'] ?? $this->load(__DIR__.'/getSecurity_Authentication_GuardHandlerService.php'));
}, 'encoder' => function () {
    return ($this->services['security.password_encoder'] ?? $this->load(__DIR__.'/getSecurity_PasswordEncoderService.php'));
}, 'loginFormAuthenticator' => function (): ?\App\Security\LoginFormAuthenticator {
    return ($this->privates['App\Security\LoginFormAuthenticator'] ?? $this->load(__DIR__.'/getLoginFormAuthenticatorService.php'));
}));
