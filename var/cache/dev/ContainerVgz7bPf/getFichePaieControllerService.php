<?php

namespace ContainerVgz7bPf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFichePaieControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FichePaieController' shared autowired service.
     *
     * @return \App\Controller\FichePaieController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/FichePaieController.php';

        $container->services['App\\Controller\\FichePaieController'] = $instance = new \App\Controller\FichePaieController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\FichePaieController', $container));

        return $instance;
    }
}
