<?php

namespace ContainerVgz7bPf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAvanceTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\AvanceType' shared autowired service.
     *
     * @return \App\Form\AvanceType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/AvanceType.php';

        return $container->privates['App\\Form\\AvanceType'] = new \App\Form\AvanceType();
    }
}
