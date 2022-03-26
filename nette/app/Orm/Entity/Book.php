<?php declare(strict_types = 1);

namespace App\Orm\Entity;

use App\Core\Nextras\Entity;


/**
 * @property-read string $id     {primary}
 * @property-read string $title
 * @property-read Author $author {m:1 Author::$books}
 */
final class Book extends Entity
{
}
