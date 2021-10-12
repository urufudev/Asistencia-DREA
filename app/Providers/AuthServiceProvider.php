<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'Spatie\Permission\Models\Role' => 'App\Policies\RolePolicy',
        'Models\Laboral' => 'App\Policies\LaboralPolicy',
        'Models\Pension' => 'App\Policies\PensionPolicy',
        'Models\Office' => 'App\Policies\OfficePolicy',
        'Models\Condition' => 'App\Policies\ConditionPolicy',
        
        'Models\PresencialWork' => 'App\Policies\PresencialWorkPolicy',
        'Models\Event' => 'App\Policies\EventPolicy',
        
        'Models\Position' => 'App\Policies\PositionPolicy',
        'Models\Role' => 'App\Policies\RolePolicy',
        'Models\User' => 'App\Policies\UserPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //
        Gate::before(function (User $user, $ability) {
            if ($user->hasRole('Administrador')) return true;
        });
    }
}
