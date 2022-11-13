<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Mendaftarkan Role di Laravel
        Gate::define('isAdmin', function ($user) {
            return $user->role == 'admin';
        });
        Gate::define('isSiswa', function ($user) {
            return $user->role == 'siswa';
        });
        Gate::define('isAdminSiswa', function ($user) {
            return $user->role == 'siswa' or 'admin';
        });
    }
}
