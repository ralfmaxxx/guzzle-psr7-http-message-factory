<?php

namespace spec\Http\Message\Guzzle;

use GuzzleHttp\Psr7\Response;
use Http\Message\Guzzle\ResponseFactory;
use PhpSpec\ObjectBehavior;

/**
 * @mixin ResponseFactory
 */
class ResponseFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ResponseFactory::class);
    }

    function it_creates_guzzle_psr7_response_object()
    {
        $this->createResponse(200)->shouldReturnAnInstanceOf(Response::class);
    }
}
