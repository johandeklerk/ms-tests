<?php

namespace App\Http\Controllers;

use App\Domains\Repository\Providers;
use App\Domains\Repository\RepositoryFormatterFactory;
use App\Domains\Repository\RepositoryProviderFactory;
use App\Domains\Repository\RepositoryProviderInterface;


class RepositoriesController extends Controller
{

    public function index($type, RepositoryProviderFactory $repositoryProviderFactory, RepositoryFormatterFactory $repositoryFormatterFactory)
    {
        $repositoryProvider = $repositoryProviderFactory::make($type);
        $repositoryFormatter = $repositoryFormatterFactory::make($type);
        $response = $repositoryFormatter->format($repositoryProvider->getPopularRepositories());

        return response()->json($response);
    }
}
