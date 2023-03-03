<?php

declare(strict_types=1);

namespace Owl\Component\Rbac\Repository;

use Doctrine\ORM\QueryBuilder;
use Sylius\Component\Resource\Repository\RepositoryInterface;
use Owl\Component\Rbac\Model\AuthItemInterface;

interface PermissionRepositoryInterface extends RepositoryInterface
{
    /**
     * @return array|AuthItemInterface[]
     */
    public function findAllNames(): array;

    public function findOneByName(array ... $name): QueryBuilder;
}
