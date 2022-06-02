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
        if ($this->user->role = Role::ADMIN) {
            return true;
        }
        return in_array($request->getRequestUrl(), $this->access);
    }
}
