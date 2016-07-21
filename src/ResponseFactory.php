<?php

namespace Http\Message\Guzzle;

use GuzzleHttp\Psr7\Response;
use Http\Message\ResponseFactory as ResponseFactoryInterface;

class ResponseFactory implements ResponseFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function createResponse(
        $statusCode = 200,
        $reasonPhrase = null,
        array $headers = [],
        $body = null,
        $protocolVersion = '1.1'
    ) {
        return new Response($statusCode, $headers, $body, $protocolVersion, $reasonPhrase);
    }
}
