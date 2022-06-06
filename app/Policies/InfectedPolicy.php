<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Infected;
use Illuminate\Auth\Access\HandlesAuthorization;

class InfectedPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function viewAny(User $user)
    {
        return $user->can('lista infectado');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Infected  $infected
     * @return mixed
     */
    public function view(User $user, Infected $infected)
    {
        return $user->can('ver infectado');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('registrar infectado');
    }


    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Infected  $infected
     * @return mixed
     */
    public function update(User $user, Infected $infected)
    {
        return $user->can('editar infectado');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Infected  $infected
     * @return mixed
     */
    public function delete(User $user, Infected $infected)
    {
        return $user->can('eliminar infectado');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Infected  $infected
     * @return mixed
     */
    public function restore(User $user, Infected $infected)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Infected  $infected
     * @return mixed
     */
    public function forceDelete(User $user, Infected $infected)
    {
        return $user->can('eliminar infectado');
    }
}
