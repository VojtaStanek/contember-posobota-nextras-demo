<?php declare(strict_types = 1);

namespace App\Orm\Entity;

use App\Core\Nextras\Entity;
use App\Orm\Mapper\BookCollection;


/**
 * @property-read string         $id    {primary}
 * @property-read string         $name
 * @property-read BookCollection $books {1:m Book::$author}
 */
final class Author extends Entity
{
	public function getFormattedName(): string
	{
		// sPoNgE cAsE
		$str = '';
		foreach (str_split($this->name) as $char) {
			$str .= rand(0, 1) === 1 ? strtoupper($char) : strtolower($char);
		}
		return $str;
	}
}
