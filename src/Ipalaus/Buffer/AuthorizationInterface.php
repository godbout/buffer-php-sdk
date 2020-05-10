<?php

namespace Ipalaus\Buffer;

use GuzzleHttp\Psr7\Request;

interface AuthorizationInterface
{

    /**
     * Add the authoritzation credentials to a request.
     *
     * @param  \GuzzleHttp\Psr7\Request  $request
     * @return \GuzzleHttp\Psr7\Request
     */
    public function addCredentialsToRequest(Request $request);
}
