<?php

namespace App\Domains\Repository;


class RepositoryFormatterFactory
{
    static function make($type)
    {
        if ($type && is_string($type)) {
            $type = trim(strtolower($type));
        }

        switch ($type) {
            case "github":
                $formatter = new GitHubFormatter();
                break;
            case "local":
                $formatter = new LocalFormatter();
                break;
            default:
                throw new InvalidRepositoryFormatterException();
        }

        return $formatter;
    }
}
