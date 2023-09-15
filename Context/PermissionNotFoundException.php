<?php

declare(strict_types=1);

namespace Owl\Component\Rbac\Context;

final class PermissionNotFoundException extends \RuntimeException
{
    public function __construct(?string $message = null, \Exception $previousException = null)
    {
        parent::__construct($message ?: 'Permissions could not be found!', 0, $previousException);
    }
}
