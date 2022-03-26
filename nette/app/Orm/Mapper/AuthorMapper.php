<?php declare(strict_types = 1);

namespace App\Orm\Mapper;

use App\Core\Nextras\Mapper;
use Nextras\Orm\Collection\ICollection;


/**
 * @method AuthorCollection toCollection($data)
 */
final class AuthorMapper extends Mapper
{
	public function wrapCollection(ICollection $collection): AuthorCollection
	{
		return new AuthorCollection($collection);
	}
}
