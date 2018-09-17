<?php

namespace App\Domains\Repository;

class LocalFormatter implements RepositoryFormatterInterface
{
    public function format(array $repos): array
    {
        return $repos;
    }
}
