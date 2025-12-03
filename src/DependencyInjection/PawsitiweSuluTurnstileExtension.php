<?php

namespace Pawsitiwe\SuluTurnstileBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class PawsitiweSuluTurnstileExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new \Symfony\Component\DependencyInjection\Loader\YamlFileLoader(
            $container,
            new \Symfony\Component\Config\FileLocator(__DIR__.'/../../Resources/config')
        );

        $loader->load('services.yaml');
    }
}
