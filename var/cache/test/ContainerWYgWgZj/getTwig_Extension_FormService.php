<?php

namespace ContainerWYgWgZj;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Extension_FormService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'twig.extension.form' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\FormExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['twig.extension.form'] = new \Symfony\Bridge\Twig\Extension\FormExtension(NULL);
    }
}