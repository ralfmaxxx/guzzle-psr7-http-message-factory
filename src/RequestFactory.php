<?php

namespace Http\Message\Guzzle;

use GuzzleHttp\Psr7\Request;
use Http\Message\RequestFactory as RequestFactoryInterface;

class RequestFactory implements RequestFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function createRequest(
        $method,
        $uri,
        array $headers = [],
        $body = null,
        $protocolVersion = '1.1'
    ) {
        return new Request($method, $uri, $headers, $body, $protocolVersion);
    }
}
