<?php

namespace App\Console\Commands;

use App\Protobuf\Clients\TestClient;
use App\Protobuf\Clients\UserClient;
use GrpcServices\User\Messages\GetUserMessage;
use Illuminate\Console\Command;
use vandarpay\LaravelGrpc\Exceptions\GrpcServiceException;

class TestGrpc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-grpc {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     * @throws GrpcServiceException
     */
    public function handle()
    {
        $id = $this->argument('id');
        $user = new GetUserMessage();

        $client = new UserClient();
        $response = $client->send($id);

        echo '<pre>';
        print_r($response->serializeToJsonString());
        echo '</pre>';

//        $msg = $this->argument('msg');
//        $client = new TestClient();
//        $response = $client->send($msg);
//
//
//        dd($response);
    }
}
