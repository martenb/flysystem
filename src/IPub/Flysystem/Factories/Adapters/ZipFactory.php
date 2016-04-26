<?php
/**
 * ZipFactory.php
 *
 * @copyright      More in license.md
 * @license        http://www.ipublikuj.eu
 * @author         Adam Kadlec http://www.ipublikuj.eu
 * @package        iPublikuj:Flysystem!
 * @subpackage     Adapters
 * @since          1.0.0
 *
 * @date           23.04.16
 */

namespace IPub\Flysystem\Factories\Adapters;

use Nette;
use Nette\Utils;

use League\Flysystem;
use League\Flysystem\ZipArchive;

/**
 * ZIP compress adapter filesystem factory
 *
 * @package        iPublikuj:Flysystem!
 * @subpackage     Adapters
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ZipFactory
{
	/**
	 * @param Utils\ArrayHash $parameters
	 *
	 * @return ZipArchive\ZipArchiveAdapter
	 */
	public static function create(Utils\ArrayHash $parameters)
	{
		return new ZipArchive\ZipArchiveAdapter($parameters->location, $parameters->archive, $parameters->prefix);
	}
}
