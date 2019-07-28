<?php
/**
 * Created by Joseph Daigle.
 * Date: 2019-07-28
 * Time: 18:50
 */

namespace JoeDaCo\QuickBooks\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Configuration.
 *
 * Allows users to configure API keys using Symfony config conventions.
 * https://symfony.com/doc/current/components/config.html
 *
 * @package JoeDaCo\QuickBooks\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
	public function getConfigTreeBuilder()
	{
		$treeBuilder = new TreeBuilder('qb_api_bundle');

		$treeBuilder->getRootNode()
            ->children()
	            ->arrayNode('dev')
		            ->children()
			            ->scalarNode('client_id')->end()
			            ->scalarNode('client_secret')->end()
                    ->end()
                ->end()
				->arrayNode('prod')
					->children()
						->scalarNode('client_id')->end()
						->scalarNode('client_secret')->end()
				->end()
            ->end();

		return $treeBuilder;
	}
}