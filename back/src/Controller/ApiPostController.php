<?php

namespace App\Controller;

use App\Entity\Mascot;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ApiPostController
{
        /**
     * @Route("/api/post/mascot", name="api_post_mascot", methods={"POST"})
     */
    public function store(Request $Request, SerializerInterface $Serializer, EntityManagerInterface $manager)
    {
        // return new Response('', 200, [
        //     'Access-Control-Allow-Origin' => '*',
        //     'Access-Control-Allow-Credentials' => 'true',
        //     'Access-Control-Allow-Methods' => 'GET, POST, PUT, DELETE, OPTIONS',
        //     'Access-Control-Allow-Headers' => 'DNT, X-User-Token, Keep-Alive, User-Agent, X-Requested-With, If-Modified-Since, Cache-Control, Content-Type',
        //     'Access-Control-Max-Age' => 1728000,
        //     'Content-Type' => 'text/plain charset=UTF-8',
        //     'Content-Length' => 0
        // ]);  

        // $response->headers->set('Content-Type', 'application/json');
        // $response->headers->set('Access-Control-Allow-Origin', '*');

        $recu = $Request->getContent();
        $post = $Serializer->deserialize($recu, Mascot::class, 'json');
        $manager->persist($post);
        $manager->flush();

        return new JsonResponse(
            [
                'status' => 'ok',
            ],
            JsonResponse::HTTP_CREATED
        );
        // $response->set->header("Access-Control-Allow-Origin: *");
        // return $response = new Response();
       
    }
}
