<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\SecurityController:login' => function () {
    return ($this->privates['service_locator.ltE88OR'] ?? $this->load(__DIR__.'/getServiceLocator_LtE88ORService.php'));
}, 'App\\Controller\\UserController:activate' => function () {
    return ($this->privates['service_locator.jeIjwcP'] ?? $this->load(__DIR__.'/getServiceLocator_JeIjwcPService.php'));
}, 'App\\Controller\\UserController:edit' => function () {
    return ($this->privates['service_locator.IwzJ4c9'] ?? $this->load(__DIR__.'/getServiceLocator_IwzJ4c9Service.php'));
}, 'App\\Controller\\UserController:register' => function () {
    return ($this->privates['service_locator.yGezXnx'] ?? $this->load(__DIR__.'/getServiceLocator_YGezXnxService.php'));
}, 'App\\Controller\\UserController:requestPasswordReset' => function () {
    return ($this->privates['service_locator.vbh71Ar'] ?? $this->load(__DIR__.'/getServiceLocator_Vbh71ArService.php'));
}, 'App\\Controller\\UserController:resetPassword' => function () {
    return ($this->privates['service_locator.hTYAA69'] ?? $this->load(__DIR__.'/getServiceLocator_HTYAA69Service.php'));
}, 'App\\Controller\\SecurityController::login' => function () {
    return ($this->privates['service_locator.ltE88OR'] ?? $this->load(__DIR__.'/getServiceLocator_LtE88ORService.php'));
}, 'App\\Controller\\UserController::activate' => function () {
    return ($this->privates['service_locator.jeIjwcP'] ?? $this->load(__DIR__.'/getServiceLocator_JeIjwcPService.php'));
}, 'App\\Controller\\UserController::edit' => function () {
    return ($this->privates['service_locator.IwzJ4c9'] ?? $this->load(__DIR__.'/getServiceLocator_IwzJ4c9Service.php'));
}, 'App\\Controller\\UserController::register' => function () {
    return ($this->privates['service_locator.yGezXnx'] ?? $this->load(__DIR__.'/getServiceLocator_YGezXnxService.php'));
}, 'App\\Controller\\UserController::requestPasswordReset' => function () {
    return ($this->privates['service_locator.vbh71Ar'] ?? $this->load(__DIR__.'/getServiceLocator_Vbh71ArService.php'));
}, 'App\\Controller\\UserController::resetPassword' => function () {
    return ($this->privates['service_locator.hTYAA69'] ?? $this->load(__DIR__.'/getServiceLocator_HTYAA69Service.php'));
})));
