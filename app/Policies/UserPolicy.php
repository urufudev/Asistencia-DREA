<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function viewAny(User $user)
    {
        return $user->can('lista usuarios');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Laboral  $laboral
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->can('ver usuarios');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('registrar usuarios');
    }


    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Laboral  $laboral
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->can('editar usuarios');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Laboral  $laboral
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->can('eliminar usuarios');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Laboral  $laboral
     * @return mixed
     */
    public function restore(User $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Laboral  $laboral
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        return $user->can('eliminar usuarios');
    }
}
