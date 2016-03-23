<?php

namespace ShopwarePlugin;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/**
 * Class Plugin
 * @package ShopwarePlugin
 */
class Plugin implements PluginInterface
{
    /**
     * @param Composer $composer
     * @param IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $manager = $composer->getRepositoryManager();

        $shopwareRepository = new ShopwareRepository();

        $manager->addRepository($shopwareRepository);
    }
}