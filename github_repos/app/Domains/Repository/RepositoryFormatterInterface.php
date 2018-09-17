<?php

namespace App\Domains\Repository;

interface RepositoryFormatterInterface
{
    public function format(array $repos): array;
}
