<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Service\CaptchaValidator' shared autowired service.

include_once $this->targetDirs[3].'/src/Service/CaptchaValidator.php';

return $this->privates['App\Service\CaptchaValidator'] = new \App\Service\CaptchaValidator($this->getEnv('RECAPTCHA_KEY'), $this->getEnv('RECAPTCHA_SECRET'));
