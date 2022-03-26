<?php declare(strict_types = 1);

namespace App\Orm\Repository;

use App\Core\Nextras\Repository;
use App\Orm\Entity\Book;
use App\Orm\Mapper\BookCollection;
use App\Orm\Mapper\BookMapper;


/**
 * @method BookMapper     getMapper()
 * @method Book|null      hydrateEntity(array $data)
 * @method void           attach(Book $entity)
 * @method void           detach(Book $entity)
 * @method Book|null      getBy(array $conds)
 * @method Book           getByChecked(array $conds)
 * @method Book|null      getById(string $primaryValue)
 * @method Book           getByIdChecked(string $primaryValue)
 * @method BookCollection findAll()
 * @method BookCollection findBy(array $where)
 * @method BookCollection findByIds(string[] $primaryValues)
 * @method Book           persist(Book $entity, bool $withCascade = true)
 * @method Book           persistAndFlush(Book $entity, bool $withCascade = true)
 * @method Book           remove(Book $entity, bool $withCascade = true)
 * @method Book           removeAndFlush(Book $entity, bool $withCascade = true)
 */
final class BookRepository extends Repository
{
	public static function getEntityClassNames(): array
	{
		return [Book::class];
	}
}
