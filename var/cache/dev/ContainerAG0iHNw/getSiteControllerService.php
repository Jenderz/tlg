<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\SiteController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/SiteController.php';

$this->services['App\Controller\SiteController'] = $instance = new \App\Controller\SiteController();

$instance->setContainer(($this->privates['service_locator.aqxUcvZ'] ?? $this->load(__DIR__.'/getServiceLocator_AqxUcvZService.php'))->withContext('App\\Controller\\SiteController', $this));

return $instance;
