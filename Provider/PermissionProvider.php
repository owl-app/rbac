<?php

declare(strict_types=1);

namespace Owl\Component\Rbac\Provider;

use Owl\Bundle\RbacManagerBundle\Manager\ManagerInterface;
use Owl\Component\User\Security\Provider\PermissionProviderInterface;

final class PermissionProvider implements PermissionProviderInterface
{
    /** @var ManagerInterface */
    private $manager;

    public function __construct(ManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    public function getPermissionsByUserId(int $userId): array
    {
        return $this->manager->getPermissionsByUser($userId);
    }
}
