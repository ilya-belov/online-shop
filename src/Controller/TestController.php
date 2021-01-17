<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class TestController extends AbstractController
{
    public function test(): Response
    {
        $jopa = $this->getDoctrine()->getConnection();
        dump($jopa->connect());
        die();
        return new Response("hello");
    }
}