<?php
/**
 * Created by Joseph Daigle.
 * Date: 2019-07-28
 * Time: 08:34
 */

namespace JoeDaCo\QuickBooks\DependencyInjection;


use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

/**
 * QuickBooksApiExtension.
 *
 * Extends Symfony framework to use QuickBooks API Bundle.
 *
 * @package JoeDaCo\QuickBooks\DependencyInjection
 */
class QuickBooksApiExtension extends Extension
{
	/**
	 * Load the bundle extension for Symfony.
	 *
	 * @param array            $configs
	 * @param ContainerBuilder $container
	 */
	public function load(array $configs, ContainerBuilder $container)
	{
		// import configuration settings
		$config = $this->loadConfigurations($configs);
	}

	/**
	 * Loads configuration files for the bundle.
	 * This is how the bundle gets the api keys from clients.
	 *
	 * @param array $configs
	 *
	 * @return array
	 */
	public function loadConfigurations(array $configs)
	{
		$configuration = new Configuration();

		return $this->processConfiguration($configuration, $configs);
	}

}