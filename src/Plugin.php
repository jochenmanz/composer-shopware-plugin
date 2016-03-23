<?php

namespace ShopwarePlugin;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Plugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $manager = $composer->getRepositoryManager();

        $shopwareRepository = new ShopwareRepository();

        $manager->addRepository($shopwareRepository);
    }
}