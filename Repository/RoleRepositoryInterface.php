<?php

declare(strict_types=1);

namespace Owl\Component\Rbac\Repository;

use Sylius\Component\Resource\Repository\RepositoryInterface;
use Owl\Component\Rbac\Model\RoleInterface;

/**
 * @template T of RoleInterface
 *
 * @extends RepositoryInterface<T>
 */
interface RoleRepositoryInterface extends RepositoryInterface
{

}
