<?php
namespace Lukasbableck\ContaoTobiiLightboxBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Lukasbableck\ContaoTobiiLightboxBundle\ContaoTobiiLightboxBundle;

class Plugin implements BundlePluginInterface {
	public function getBundles(ParserInterface $parser): array {
		return [BundleConfig::create(ContaoTobiiLightboxBundle::class)->setLoadAfter([ContaoCoreBundle::class])];
	}
}
