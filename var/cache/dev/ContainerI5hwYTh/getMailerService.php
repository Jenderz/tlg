<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Service\Mailer' shared autowired service.

include_once $this->targetDirs[3].'/src/Service/Mailer.php';

return $this->privates['App\Service\Mailer'] = new \App\Service\Mailer(($this->services['swiftmailer.mailer.default'] ?? $this->load(__DIR__.'/getSwiftmailer_Mailer_DefaultService.php')), ($this->services['router'] ?? $this->getRouterService()), ($this->services['twig'] ?? $this->getTwigService()), ($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()), 'noreply@noreply.com');
