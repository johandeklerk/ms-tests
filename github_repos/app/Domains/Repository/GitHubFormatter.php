<?php

namespace App\Domains\Repository;

class GitHubFormatter implements RepositoryFormatterInterface
{
    public function format(array $repos): array
    {
        //Yes, can use laravel array functions... this is just simpler
        $response = [];
        foreach($repos as $repo) {
            $response[]['name'] = $repo['full_name'] ? $repo['full_name'] : 'n/a';
            $response[]['url'] = $repo['url'] ? $repo['url'] : 'n/a';
            $response[]['description'] = $repo['description'] ? $repo['description'] : 'n/a';
            //not sue if this is the correct count???
            $response[]['stars'] = $repo['stargazers_count'] ? $repo['stargazers_count'] : 'n/a';
        }

        return $response;
    }
}
