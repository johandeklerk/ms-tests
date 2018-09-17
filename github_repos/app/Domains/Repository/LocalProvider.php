<?php

namespace App\Domains\Repository;

class LocalProvider implements RepositoryProviderInterface
{

    public function getName(): string
    {
        return Providers::LOCAL;
    }

    public function getPopularRepositories(): array
    {
        return [
            [
                'name' => 'masterstart/coding-tests',
                'url' => 'https://github.com/masterstart/coding-tests',
                'description' => 'A collection of MasterStart interview tests',
                'stars' => 0,
            ]
        ];
    }
}
