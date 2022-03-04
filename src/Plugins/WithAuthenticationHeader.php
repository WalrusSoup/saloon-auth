<?php

namespace jl\SaloonAuth\Plugins;

use jl\SaloonAuth\MyCredentials;

trait WithAuthenticationHeader
{
    public function bootWithAuthenticationHeader() : void
    {
        $this->mergeHeaders([
            // this can be your own class, helper function, etc
            'Authorization' => 'Bearer ' . MyCredentials::token()
        ]);
    }
}