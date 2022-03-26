<?php declare(strict_types = 1);

namespace App\Orm\Repository;

use App\Core\Nextras\Repository;
use App\Orm\Entity\Author;
use App\Orm\Mapper\AuthorCollection;
use App\Orm\Mapper\AuthorMapper;


/**
 * @method AuthorMapper     getMapper()
 * @method Author|null      hydrateEntity(array $data)
 * @method void             attach(Author $entity)
 * @method void             detach(Author $entity)
 * @method Author|null      getBy(array $conds)
 * @method Author           getByChecked(array $conds)
 * @method Author|null      getById(string $primaryValue)
 * @method Author           getByIdChecked(string $primaryValue)
 * @method AuthorCollection findAll()
 * @method AuthorCollection findBy(array $where)
 * @method AuthorCollection findByIds(string[] $primaryValues)
 * @method Author           persist(Author $entity, bool $withCascade = true)
 * @method Author           persistAndFlush(Author $entity, bool $withCascade = true)
 * @method Author           remove(Author $entity, bool $withCascade = true)
 * @method Author           removeAndFlush(Author $entity, bool $withCascade = true)
 */
final class AuthorRepository extends Repository
{
	public static function getEntityClassNames(): array
	{
		return [Author::class];
	}
}
