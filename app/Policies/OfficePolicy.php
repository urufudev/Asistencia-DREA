<?php

namespace App\Policies;

use App\Models\Office;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OfficePolicy
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
        return $user->can('lista oficinas');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Office  $office
     * @return mixed
     */
    public function view(User $user, Office $office)
    {
        return $user->can('ver oficinas');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('registrar oficinas');
    }


    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Office  $office
     * @return mixed
     */
    public function update(User $user, Office $office)
    {
        return $user->can('editar oficinas');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Office  $office
     * @return mixed
     */
    public function delete(User $user, Office $office)
    {
        return $user->can('eliminar oficinas');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Office  $office
     * @return mixed
     */
    public function restore(User $user, Office $office)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Office  $office
     * @return mixed
     */
    public function forceDelete(User $user, Office $office)
    {
        return $user->can('eliminar oficinas');
    }
}
