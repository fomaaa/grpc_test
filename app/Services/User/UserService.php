<?php

namespace App\Services\User;

use GrpcServices\Test\Messages\PingMessage;
use GrpcServices\User\Messages\GetUserMessage;
use GrpcServices\User\Messages\UserMessage;
use Spiral\RoadRunner\GRPC\ContextInterface;

class UserService implements UserRepository
{
    public function GetUser(ContextInterface $ctx, GetUserMessage $in): UserMessage
    {
        $userId = $in->getId();
        //logic

        $user = new UserMessage();
        $user->setId($userId);
        $user->setName('Vasiliy');
        $user->setSurName('Petrov');
        $user->setCityId(1);

        return $user;
    }
}
