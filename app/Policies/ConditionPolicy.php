<?php

namespace App\Policies;

use App\Models\Condition;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConditionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->can('lista condición laboral');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Condition  $condition
     * @return mixed
     */
    public function view(User $user, Condition $condition)
    {
        return $user->can('ver condición laboral');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('registrar condición laboral');
    }


    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Condition  $condition
     * @return mixed
     */
    public function update(User $user, Condition $condition)
    {
        return $user->can('editar condición laboral');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Condition  $condition
     * @return mixed
     */
    public function delete(User $user, Condition $condition)
    {
        return $user->can('eliminar condición laboral');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Condition  $condition
     * @return mixed
     */
    public function restore(User $user, Condition $condition)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Condition  $condition
     * @return mixed
     */
    public function forceDelete(User $user, Condition $condition)
    {
        return $user->can('eliminar condición laboral');
    }
}
