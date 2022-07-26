<?php

namespace App\Providers;

use App\Models\Product;
use App\Models\Team;
use App\Models\User;
use App\Policies\ProductPolicy;
use App\Policies\TeamPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
        Product::class=> ProductPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin_auth', static function(User $user){
            return $user->type === 'Admin';
        });
        Gate::define('user_auth', static function(User $user){
            return $user->type === 'User';
        });
    }
}
