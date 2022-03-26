<?php declare(strict_types = 1);

namespace App\Orm\Mapper;

use App\Core\Nextras\Collection;
use App\Orm\Entity\Book;
use Traversable;


/**
 * @method Book|null          getBy(array $conds)
 * @method Book               getByChecked(array $conds)
 * @method Book|null          getById($id)
 * @method Book               getByIdChecked($id)
 * @method self               findBy(array $conds)
 * @method self               orderBy($column, string $direction = self::ASC)
 * @method self               resetOrderBy()
 * @method self               limitBy(int $limit, ?int $offset = null)
 * @method Book|null          fetch()
 * @method Book[]             fetchAll()
 * @method Traversable|Book[] getIterator()
 *
 * @phpstan-extends Collection<Book>
 */
final class BookCollection extends Collection
{
}
