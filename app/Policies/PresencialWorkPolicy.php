<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Event;
use App\Models\PresencialWork;
use Illuminate\Auth\Access\HandlesAuthorization;

class PresencialWorkPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->can('lista presencial');
    }

    public function create(User $user)
    {
        return $user->can('registrar presencial');
    }


    public function delete(User $user, PresencialWork $presencial)
    {
        return $user->can('eliminar presencial');
    }

    public function attendance(User $user)
    {
        return $user->can('registrar asistencia');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PresencialWork  $presencial
     * @return mixed
     */
    public function restore(User $user, PresencialWork $presencial)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PresencialWork  $presencial
     * @return mixed
     */
    public function forceDelete(User $user, Event $presencial)
    {
        return $user->can('eliminar presencial');
    }

    public function deleteAttendance(User $user)
    {
        return $user->can('eliminar presencial');
    }

    


}
