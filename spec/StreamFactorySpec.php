<?php

namespace spec\Http\Message\Guzzle;

use GuzzleHttp\Psr7\Stream;
use Http\Message\Guzzle\StreamFactory;
use PhpSpec\ObjectBehavior;

/**
 * @mixin StreamFactory
 */
class StreamFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(StreamFactory::class);
    }

    function it_creates_guzzle_psr7_stream_object()
    {
        $this->createStream(fopen('php://memory', 'r'))->shouldReturnAnInstanceOf(Stream::class);
    }
}
