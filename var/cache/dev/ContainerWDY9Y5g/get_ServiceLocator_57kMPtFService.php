<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.57kMPtF' shared service.

return $this->privates['.service_locator.57kMPtF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'password' => ['privates', '.errored..service_locator.57kMPtF.App\\Entity\\Password', NULL, 'Cannot autowire service ".service_locator.57kMPtF": it references class "App\\Entity\\Password" but no such service exists.'],
]);
