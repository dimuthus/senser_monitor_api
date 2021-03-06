<?php

namespace ContainerWYgWgZj;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultMetadataDriverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.default_metadata_driver' shared service.
     *
     * @return \Doctrine\Persistence\Mapping\Driver\MappingDriverChain
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['doctrine.orm.default_metadata_driver'] = $instance = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $instance->addDriver(($container->privates['doctrine.orm.default_annotation_metadata_driver'] ?? $container->load('getDoctrine_Orm_DefaultAnnotationMetadataDriverService')), 'App\\Entity');

        return $instance;
    }
}
