<?php

namespace App\Policies;
use App\Models\Pension;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PensionPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function viewAny(User $user)
    {
        return $user->can('lista régimen de pensión');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pension  $pension
     * @return mixed
     */
    public function view(User $user, Pension $pension)
    {
        return $user->can('ver régimen de pensión');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->can('registrar régimen de pensión');
    }


    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pension  $pension
     * @return mixed
     */
    public function update(User $user, Pension $pension)
    {
        return $user->can('editar régimen de pensión');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pension  $pension
     * @return mixed
     */
    public function delete(User $user, Pension $pension)
    {
        return $user->can('eliminar régimen de pensión');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pension  $pension
     * @return mixed
     */
    public function restore(User $user, Pension $pension)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Pension  $pension
     * @return mixed
     */
    public function forceDelete(User $user, Pension $pension)
    {
        return $user->can('eliminar régimen de pensión');
    }
}
