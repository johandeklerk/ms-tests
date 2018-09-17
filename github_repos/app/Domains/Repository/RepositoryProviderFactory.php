<?php

namespace App\Domains\Repository;


class RepositoryProviderFactory
{
    static function make($type) {
        if ($type && is_string($type)) {
            $type = trim(strtolower($type));
        }

        switch ($type) {
            case "github":
                $repository = new GitHubProvider();
                break;
            case "local":
                $repository = new LocalProvider();
                break;
            default:
                throw new InvalidRepositoryProviderException();
        }

        return $repository;
    }
}
