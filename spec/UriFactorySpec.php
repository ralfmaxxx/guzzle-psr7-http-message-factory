<?php

namespace spec\Http\Message\Guzzle;

use GuzzleHttp\Psr7\Uri;
use Http\Message\Guzzle\UriFactory;
use PhpSpec\ObjectBehavior;

/**
 * @mixin UriFactory
 */
class UriFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(UriFactory::class);
    }

    function it_creates_guzzle_psr7_uri_object()
    {
        $this->createUri('')->shouldReturnAnInstanceOf(Uri::class);
    }
}
