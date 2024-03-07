<?php

namespace ContainerD56MZY2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_State_ErrorProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.state.error_provider' shared service.
     *
     * @return \ApiPlatform\State\ErrorProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/State/ErrorProvider.php';

        return $container->privates['api_platform.state.error_provider'] = new \ApiPlatform\State\ErrorProvider(true, ($container->privates['api_platform.resource_class_resolver'] ?? self::getApiPlatform_ResourceClassResolverService($container)));
    }
}
