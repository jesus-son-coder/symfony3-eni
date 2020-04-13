<?php

namespace DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class WelcomeController extends Controller
{
    /**
     * @Route("/hello/world")
     */
    public function indexAction()
    {
        return new Response("Hello world !");
    }
}
