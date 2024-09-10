<?php

namespace App\Services\User;

use Symfony\Component\HttpFoundation\Response;
use vandarpay\ServiceRepository\ServiceException;

class UserException extends ServiceException
{
    public const NEW_ERROR = 'new_error';

    public function configureExceptions()
    {
        $this->addException(self::NEW_ERROR, Response::HTTP_BAD_REQUEST, 'this is a test exception');
    }
}
