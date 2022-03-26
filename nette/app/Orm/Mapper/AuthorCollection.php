<?php declare(strict_types = 1);

namespace App\Orm\Mapper;

use App\Core\Nextras\Collection;
use App\Orm\Entity\Author;
use Traversable;


/**
 * @method Author|null          getBy(array $conds)
 * @method Author               getByChecked(array $conds)
 * @method Author|null          getById($id)
 * @method Author               getByIdChecked($id)
 * @method self                 findBy(array $conds)
 * @method self                 orderBy($column, string $direction = self::ASC)
 * @method self                 resetOrderBy()
 * @method self                 limitBy(int $limit, ?int $offset = null)
 * @method Author|null          fetch()
 * @method Author[]             fetchAll()
 * @method Traversable|Author[] getIterator()
 *
 * @phpstan-extends Collection<Author>
 */
final class AuthorCollection extends Collection
{
}
