<?php

namespace App\Protobuf\Clients;

use GrpcServices\Test\Messages\PingMessage;
use GrpcServices\User\Messages\GetUserMessage;
use GrpcServices\User\Messages\UserMessage;
use vandarpay\LaravelGrpc\Exceptions\GrpcServiceException;
use vandarpay\LaravelGrpc\GrpcClient;

class UserClient extends GrpcClient
{
    protected string $service = 'services.User';

    /**
     * @throws GrpcServiceException
     */
    public function send(int $id): UserMessage
    {
        $request = new GetUserMessage();
        $request->setId($id);

        $response = $this->client->simpleRequest('GetUser', $request);
        echo '<pre>';
        print_r($response->serializeToJsonString());
        echo '</pre>';


        /* @var UserMessage $response */
//       return $response->serializeToJsonString();
    }
}
