<?php

namespace jl\SaloonAuth\Requests;

use jl\SaloonAuth\Connectors\MyConnector;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonRequest;

class GetGameRequest extends SaloonRequest
{
    protected ?string $method = Saloon::GET;
    protected ?string $connector = MyConnector::class;

    public function defineEndpoint(): string
    {
        return '/game';
    }
}