<?php

namespace ContainerWYgWgZj;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultAnnotationMetadataDriverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.default_annotation_metadata_driver' shared service.
     *
     * @return \Doctrine\ORM\Mapping\Driver\AnnotationDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.orm.default_annotation_metadata_driver'] = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()), [0 => 'F:\\sensor_monitor_api\\src\\Entity']);
    }
}
