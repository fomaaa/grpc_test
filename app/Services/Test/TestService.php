<?php

namespace App\Services\Test;

use Exception;
use GrpcServices\Test\Messages\PingMessage;
use Spiral\RoadRunner\GRPC\ContextInterface;

class TestService implements TestRepository
{
    /**
     * @throws Exception
     */
    public function Ping(ContextInterface $ctx, PingMessage $in): PingMessage
    {
        $msg = new PingMessage();
        $message = $in->getMsg();

        if ($message === 'error') {

        }
        $msg->setMsg('response +  ' . $message . ' ' . date('Y-m-d H:i:s'));

        return $msg;
    }
}
