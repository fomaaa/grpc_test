<?php
namespace App\Protobuf\Clients;

use GrpcServices\Test\Messages\PingMessage;
use vandarpay\LaravelGrpc\Exceptions\GrpcServiceException;
use vandarpay\LaravelGrpc\GrpcClient;

class TestClient extends GrpcClient
{
    protected string $service = 'services.Test';

    /**
     * @throws GrpcServiceException
     */
    public function send(string $message): PingMessage
    {
        $request = new PingMessage();
        $request->setMsg($message);

        $response =  $this->client->simpleRequest('Ping', $request);

        /* @var PingMessage $response */
        $jsonResponse = $response->serializeToJsonString();
        dd($jsonResponse);
    }

}
