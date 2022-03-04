<?php

use jl\SaloonAuth\MyCredentials;
use jl\SaloonAuth\Requests\GetGameRequest;
use Sammyjo20\Saloon\Managers\RequestManager;

test('Gets the correct header, based on the plugin', function () {
    // Create an instance of our token class to use for upcoming requests
    $credentials = new MyCredentials('Miyazaki');
    // Run the game request, it should contain our header
    $requestManager = new RequestManager(new GetGameRequest());
    $requestManager->hydrate();
    expect($requestManager->getHeaders())->toEqual([
        'Accept' => 'application/json',
        'Authorization' => 'Bearer Miyazaki',
    ]);
});