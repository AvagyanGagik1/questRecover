<?php

namespace App\Http\Helpers\UserAccess;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @property User $user
 * @property array $access;
 */
class UserAccessChecker
{
    protected $user;
    protected $access;

    public function __construct()
    {
        $this->user = Auth::user();
        $this->access = $this->user->access;
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function getUserAccess(Request $request): bool
    {
        $routeName = $request->route()->getName();
        if ($this->isAdmin()) {
            return true;
        }
        return $this->getAccess($routeName);
    }

    /**
     * @return bool
     */
    private function isAdmin(): bool
    {
        return in_array(Role::ADMIN, $this->user->roles);
    }

    /**
     * @param $routeName
     * @return bool
     */
    private function getAccess($routeName): bool
    {
        return in_array($routeName, $this->access);
    }
}
