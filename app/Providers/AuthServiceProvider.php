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
        //
        $this->registerPolicies();


        Gate::define("isSupperAdmin", fn (User $user) => $user->isSupperAdmin);
        Gate::define("isUser", fn (User $user) => !$user->isSupperAdmin && !$user->isAdmin);
        Gate::define("isAdmin", fn (User $user) => $user->isAdmin);
        Gate::define("create", fn (User $user) => $user->isAdmin);
        Gate::define("update", fn (User $user) => $user->isAdmin);
        // Gate::define("update", fn (User $user, News $news) => $user->isSupperAdmin || $user->id === $news->user_id);
        Gate::define("delete", fn (User $user) => $user->isSupperAdmin);
    }
}
