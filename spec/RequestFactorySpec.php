<?php

namespace spec\Http\Message\Guzzle;

use GuzzleHttp\Psr7\Request;
use Http\Message\Guzzle\RequestFactory;
use PhpSpec\ObjectBehavior;

/**
 * @mixin RequestFactory
 */
class RequestFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RequestFactory::class);
    }

    function it_creates_guzzle_psr7_request_object()
    {
        $this->createRequest('method', 'uri', [], 'body', '1.1')->shouldReturnAnInstanceOf(Request::class);
    }
}
