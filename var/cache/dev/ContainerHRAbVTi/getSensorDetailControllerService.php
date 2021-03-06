<?php

namespace ContainerHRAbVTi;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSensorDetailControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\SensorDetailController' shared autowired service.
     *
     * @return \App\Controller\SensorDetailController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\SensorDetailController'] = $instance = new \App\Controller\SensorDetailController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\SensorDetailController', $container));

        return $instance;
    }
}
