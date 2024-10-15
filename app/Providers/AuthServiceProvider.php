<?php

namespace App\Providers;

use App\Models\Despesa;
use App\Policies\DespesaPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Despesa::class => DespesaPolicy::class,
        User::class => UserPolicy::class
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
