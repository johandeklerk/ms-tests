<?php

namespace App\Providers;

use App\Domains\Repository\GitHubProvider;
use App\Domains\Repository\RepositoryProviderInterface;
use Illuminate\Support\ServiceProvider;


class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(RepositoryProviderInterface::class, function ($app) {
            return new GitHubProvider();
        });
    }
}
