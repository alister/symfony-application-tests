<?php

namespace Webfactory\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 * Controller that is not configured as a service.
 */
class NonServiceController
{
    /**
     * A simple action.
     */
    public function testAction()
    {
        return new Response();
    }
}
