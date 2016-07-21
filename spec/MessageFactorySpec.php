<?php

namespace spec\Http\Message\Guzzle;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Http\Message\Guzzle\MessageFactory;
use PhpSpec\ObjectBehavior;

/**
 * @mixin MessageFactory
 */
class MessageFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(MessageFactory::class);
    }

    function it_creates_guzzle_psr7_request_object()
    {
        $this->createRequest('method', 'uri', [], 'body', '1.1')->shouldReturnAnInstanceOf(Request::class);
    }

    function it_creates_guzzle_psr7_response_object()
    {
        $this->createResponse(200)->shouldReturnAnInstanceOf(Response::class);
    }
}
