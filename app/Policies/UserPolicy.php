<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        return $user->role_id==Role::IS_OWNER ||  $user->role_id==Role::IS_ADMIN;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->role_id==Role::IS_OWNER;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, User $model)
    {
        return $user->role_id==Role::IS_OWNER ||  $user->role_id==Role::IS_ADMIN;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, User $model)
    {
        return $user->role_id==Role::IS_OWNER;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, User $model)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model)
    {
        //
    }
}
