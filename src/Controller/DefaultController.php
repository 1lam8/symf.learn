<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller

{
    /**
     * @Route("/")
     * @param Request $request
     * @return Response
     */
    public function hello(Request $request)
    {
        $name = $request->query->get('name');
        if ($name) {
            $text = 'Hello '.$name;
        } else {
            $text = 'there is no such name to hello with';
        }

        return $this->render('hello.html.twig', ['text' => $text]);
    }
}
