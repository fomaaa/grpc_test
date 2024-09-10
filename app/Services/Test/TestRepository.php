<?php

namespace App\Services\Test;
use Spiral\RoadRunner\GRPC\ServiceInterface;
use Spiral\RoadRunner\GRPC\ContextInterface;
use GrpcServices\Test\Messages\PingMessage;

interface TestRepository extends ServiceInterface
{
    const NAME = 'services.Test';


    public function Ping(ContextInterface $ctx, PingMessage $in): PingMessage;

}
