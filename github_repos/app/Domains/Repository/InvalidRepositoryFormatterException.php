<?php

namespace App\Domains\Repository;

class InvalidRepositoryFormatterException extends \Exception
{
    protected $message = 'Unknown formatter - use "github" or "local"';
}
