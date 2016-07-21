<?php

namespace Http\Message\Guzzle;

use GuzzleHttp\Psr7\Stream;
use Http\Message\StreamFactory as StreamFactoryInterface;

class StreamFactory implements StreamFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function createStream($body = null)
    {
        return new Stream($body);
    }
}
