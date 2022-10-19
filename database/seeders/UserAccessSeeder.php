<?php

namespace Database\Seeders;

use App\Models\UserAccess;
use Illuminate\Database\Seeder;
use Illuminate\Routing\Route;

class UserAccessSeeder extends Seeder
{

    private $routes;

    public function __construct()
    {
        $this->routes = collect(\Route::getRoutes())->map(function (Route $route) {
            return $route->getName();
        });
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->routes as $route) {
            $userAccess['route_name'] = $route;
            $userAccess['name'] = $this->getName($route);

            UserAccess::updateOrCreate(['route_name' => $userAccess['route_name']], $userAccess);
        }
    }

    private function getName($route)
    {
        return str_replace('.', ' ', $route);
    }
}
