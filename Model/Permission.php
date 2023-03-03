<?php

declare(strict_types=1);

namespace Owl\Component\Rbac\Model;

class Permission extends AuthItem implements PermissionInterface
{
    public function getType(): string
    {
        return 'permission';
    }
}
