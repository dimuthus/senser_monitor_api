<?php

namespace ContainerWYgWgZj;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_Metadata_XmlDriverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'jms_serializer.metadata.xml_driver' shared service.
     *
     * @return \JMS\Serializer\Metadata\Driver\XmlDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['jms_serializer.metadata.xml_driver'] = new \JMS\Serializer\Metadata\Driver\XmlDriver(($container->privates['jms_serializer.metadata.file_locator'] ?? ($container->privates['jms_serializer.metadata.file_locator'] = new \Metadata\Driver\FileLocator([]))), ($container->privates['jms_serializer.serialized_name_annotation_strategy'] ?? $container->load('getJmsSerializer_SerializedNameAnnotationStrategyService')), ($container->privates['jms_serializer.type_parser'] ?? ($container->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }
}
