<?php

namespace Http\Message\Guzzle;

use GuzzleHttp\Psr7\Uri;
use Http\Message\UriFactory as UriFactoryInterface;

class UriFactory implements UriFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function createUri($uri)
    {
        return new Uri($uri);
    }
}
