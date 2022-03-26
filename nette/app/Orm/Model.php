<?php declare(strict_types = 1);

namespace App\Orm;

use App;
use Nextras\Orm\Model\Model as Model1;


/**
 * @property-read App\Orm\Repository\AuthorRepository $author
 * @property-read App\Orm\Repository\BookRepository   $book
 */
final class Model extends Model1
{
}
