<?php

namespace App\Domains\Repository;

interface RepositoryProviderInterface {

	/**
	 * Return the name of the repository.
	 *
	 * eg: GitHub or Local
	 *
	 * @return string
	 */
	public function getName(): string;

	/**
	  * Return the most popular PHP repositories.
	  *
	  * The return value should contain an array of repositories, formatted as follows:
	  * [
	  *     [
	  *         'name' => 'laravel/laravel',
	  *         'url' => 'https://github.com/laravel/laravel',
	  *         'description' => 'A PHP framework for web artisans',
	  *         'stars' => 41946,
	  *     ],
	  *     [
	  *         'name' => 'symfony/symfony',
	  *         'url' => 'https://github.com/symfony/symfony',
	  *         'description' => 'The Symfony PHP framework',
	  *         'stars' => 17221,
	  *     ],
	  * ]
	  *
	  * @return array
	  */
	 public function getPopularRepositories(): array;
}