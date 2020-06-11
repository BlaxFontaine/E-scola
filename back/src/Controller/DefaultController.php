<?php
    
namespace App\Controller;
    
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    
class DefaultController extends AbstractController
{
    /**
     * @Route("/{reactRouting}", name="home", defaults={"reactRouting": null})
     */
    public function index()
    {
        return new Response();
    }


/**
     * @Route("/api/getstudent", name="getStudent")
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getStudent()
    {
        $student = [
            'id' => 'text',
            'studentName' => 'toto',
            'studentClasse' => 'Ce2'
        ];

        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        $response->setContent(json_encode($student));
        
        return $response;
    }
    
}
