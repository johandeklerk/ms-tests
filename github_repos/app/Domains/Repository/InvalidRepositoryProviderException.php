<?php

namespace App\Domains\Repository;

class InvalidRepositoryProviderException extends \Exception
{
    protected $message = 'Unknown repository - use "github" or "local"';
}
