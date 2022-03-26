<?php declare(strict_types = 1);

namespace App\Orm\Mapper;

use App\Core\Nextras\Mapper;
use Nextras\Orm\Collection\ICollection;


/**
 * @method BookCollection toCollection($data)
 */
final class BookMapper extends Mapper
{
	public function wrapCollection(ICollection $collection): BookCollection
	{
		return new BookCollection($collection);
	}
}
