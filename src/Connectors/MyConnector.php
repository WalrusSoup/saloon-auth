<?php

namespace jl\SaloonAuth\Connectors;

use jl\SaloonAuth\Plugins\WithAuthenticationHeader;
use Sammyjo20\Saloon\Traits\Plugins\AcceptsJson;

class MyConnector extends \Sammyjo20\Saloon\Http\SaloonConnector
{
    use AcceptsJson;
    use WithAuthenticationHeader;

    public function defineBaseUrl(): string
    {
        return 'https://saloon-auth.test/api/';
    }

    public function defaultHeaders(): array
    {
        return [];
    }
}