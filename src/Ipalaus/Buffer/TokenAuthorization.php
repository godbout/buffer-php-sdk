<?php

namespace Ipalaus\Buffer;

use GuzzleHttp\Psr7\Request;

class TokenAuthorization implements AuthorizationInterface
{

    /**
     * Authorization token.
     *
     * @var string
     */
    protected $token;

    /**
     * Create a new token authoritzation instance.
     *
     * @param  string  $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Add the authoritzation credentials to a request.
     *
     * @param  \GuzzleHttp\Psr7\Request  $request
     * @return \GuzzleHttp\Psr7\Request
     */
    public function addCredentialsToRequest(Request $request)
    {
        return $request->addHeader('Authorization', 'Bearer ' . $this->token);
    }

    public function getToken()
    {
        return $this->token;
    }
}
