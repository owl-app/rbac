<?php

declare(strict_types=1);

namespace Owl\Component\Rbac\Provider;

use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Routing\Route;

final class RoutesPermissionProvider implements RoutesPermissionProviderInterface
{
    public function __construct(private RouterInterface $router)
    {

    }

    public function getPermissions(): array
    {
        $routes = $this->router->getRouteCollection();
        $permissions = [];

        foreach ($routes->all() as $name => $route) {
            $permission = $this->getDataFromRoute($name, $route);

            if($permission['group']) {
                $permissions[$name] = $permission;
            }
            
        }

        return $permissions;
    }

    private function getDataFromRoute(string $name, Route $route): array
    {
        $vars = $route->getDefaults()['_sylius']['vars'] ?? [];
        $group = $vars['permission']['group'] ?? false;
        $description = $vars['permission']['description'] ?? 'owl.ui.permission.'.$name;

        return ['group' => $group, 'description' => $description];
    }
}
