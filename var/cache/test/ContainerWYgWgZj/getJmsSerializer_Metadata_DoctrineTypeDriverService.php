<?php

namespace ContainerWYgWgZj;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_Metadata_DoctrineTypeDriverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'jms_serializer.metadata.doctrine_type_driver' shared service.
     *
     * @return \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['jms_serializer.metadata.doctrine_type_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(($container->privates['jms_serializer.metadata.chain_driver'] ?? $container->load('getJmsSerializer_Metadata_ChainDriverService')), ($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['jms_serializer.type_parser'] ?? ($container->privates['jms_serializer.type_parser'] = new \JMS\Serializer\Type\Parser())));
    }
}
