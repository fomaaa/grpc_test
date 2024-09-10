<?php

namespace App\Services\User;
use GrpcServices\Test\Messages\PingMessage;
use GrpcServices\User\Messages\GetUserMessage;
use GrpcServices\User\Messages\UserMessage;
use Spiral\RoadRunner\GRPC\ContextInterface;
use Spiral\RoadRunner\GRPC\ServiceInterface;

interface UserRepository extends ServiceInterface
{
    const NAME = 'services.User';

    public function GetUser(ContextInterface $ctx, GetUserMessage $in): UserMessage;
}
