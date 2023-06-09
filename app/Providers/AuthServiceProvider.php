<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\permission;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {

        foreach (permission::all() as $permission) {

            Gate::define($permission->code, function ($user) use($permission) {
                return $user->role->permissions()->where('code', $permission->code)->exists();
            });
        };
    }
}
