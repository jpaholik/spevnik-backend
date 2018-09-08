<?php

namespace Efata\Bundle\SongbookApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
//        $treeBuilder = new TreeBuilder();
//        $rootNode = $treeBuilder->root('sme_premium_content_api_client');
//
//        $rootNode
//            ->children()
//                ->arrayNode('api')
//                    ->addDefaultsIfNotSet()
//                    ->children()
//                        ->scalarNode('url')
//                            ->cannotBeEmpty()
//                            ->defaultValue('http://service.sme.localhost/api/premium-content/jsonrpc')
//                        ->end()
//                        ->scalarNode('key')
//                            ->cannotBeEmpty()
//                        ->end()
//                        ->scalarNode('secret')
//                            ->cannotBeEmpty()
//                        ->end()
//                    ->end()
//                ->end()
//                ->arrayNode('paywall')
//                    ->addDefaultsIfNotSet()
//                    ->children()
//                        ->arrayNode('payment_change_cookie')
//                            ->addDefaultsIfNotSet()
//                            ->children()
//                                ->scalarNode('secret_key')
//                                    ->cannotBeEmpty()
//                                ->end()
//                            ->end()
//                        ->end()
//                    ->end()
//                ->end()
//            ->end();

//        return $treeBuilder;
    }
}
