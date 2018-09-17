<?php
namespace App\Domains\Repository;

use GrahamCampbell\GitHub\Facades\GitHub;

class GitHubProvider implements RepositoryProviderInterface {
	
	public function getName(): string {
		return Providers::GITHUB; 
	}	

	public function getPopularRepositories(): array {
	    $repos = [];

	    try {
	        // Not sure if this is the correct query... prob not
            $repos = GitHub::api('search')->repositories('language:php fork:false page:1', 'stars', 'desc');
        }
        catch (\Exception $e) {
	        $repos['error'] = 'Error getting data from Github';
	        $repos['message'] = $e->getMessage();
        }

        if (isset($repos['items'])) {
            return $repos['items'];
        }

        $repos['error'] = 'Error retrieving repo items from Github';
        return $repos;
	}
}
