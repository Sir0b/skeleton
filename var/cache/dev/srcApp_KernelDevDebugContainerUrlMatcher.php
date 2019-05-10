<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/category' => [[['_route' => 'category', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, false, false, null]],
            '/passpass' => [
                [['_route' => 'passpassapp_passpass_all', '_controller' => 'App\\Controller\\PasspassController::all'], null, ['GET' => 0], null, true, false, null],
                [['_route' => 'passpassapp_passpass_create', '_controller' => 'App\\Controller\\PasspassController::create'], null, ['POST' => 0], null, true, false, null],
            ],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/passpass/([^/]++)(*:25)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            25 => [[['_route' => 'passpassapp_passpass_single', '_controller' => 'App\\Controller\\PasspassController::single'], ['id'], ['GET' => 0], null, false, true, null]],
        ];
    }
}
