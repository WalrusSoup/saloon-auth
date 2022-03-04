<?php

namespace jl\SaloonAuth;

/**
 * This declares some credentials to use. the static keyword is used so you may create and call multiple connectors
 * in the lifecycle of servicing a request without hitting the database for credentials too many times
 */
class MyCredentials
{
    protected static string $token;

    public function __construct(string $tokenToUseForBearerHeader)
    {
        self::$token = $tokenToUseForBearerHeader;
    }

    public static function token() : string
    {
        return self::$token;
    }
}