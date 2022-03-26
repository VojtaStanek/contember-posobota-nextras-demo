<?php declare(strict_types = 1);

namespace App\Core\Nextras;

use Nextras;
use Nextras\Orm\Collection\ArrayCollection;
use Nextras\Orm\Collection\ICollection;


/**
 * @method Mapper getMapper()
 */
abstract class Repository extends Nextras\Orm\Repository\Repository
{
	public function findByIds(array $ids): ICollection
	{
		$collection = parent::findByIds($ids);

		if ($collection instanceof ArrayCollection) {
			return $this->getMapper()->wrapCollection($collection);
		}

		return $collection;
	}
}
