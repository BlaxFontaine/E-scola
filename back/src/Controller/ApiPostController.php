<?php

namespace App\Controller;

use App\Entity\Users;
use App\Entity\Mascot;
use App\Entity\Classes;
use App\Entity\Students;
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
     * @Route("/api/post/mascot", name="api_post_mascot")
     */
    public function store2(Request $Request, SerializerInterface $Serializer, EntityManagerInterface $manager)
    {
        
        echo ("request" . $Request->isMethod("options"));
        return new Response('', 200, [
            'Access-Control-Allow-Origin' => '*',
            'Access-Control-Allow-Credentials' => 'true',
            'Access-Control-Allow-Methods' => 'GET, POST, PUT, DELETE, OPTIONS',
            'Access-Control-Allow-Headers' => 'DNT, X-User-Token, Keep-Alive, User-Agent, X-Requested-With, If-Modified-Since, Cache-Control, Content-Type',
            'Access-Control-Max-Age' => 1728000,
            'Content-Type' => 'text/plain charset=UTF-8',
            'Content-Length' => 0
        ]);


        $recu = $Request->getContent();
        $lol = json_decode($recu);
        $post = $Serializer->deserialize($recu, Mascot::class, 'json');
;
        $manager->persist($post);
        $manager->flush();

        return new JsonResponse(
            [
                'status' => 'ok',
            ],
            JsonResponse::HTTP_CREATED
        );


    }


      /**
     * @Route("/api/post/new/student", name="api_post_new_student")
     */
    public function registerNewStudent(Request $Request, SerializerInterface $Serializer, EntityManagerInterface $manager)
    {

    $recu = $Request->getContent();
    $parametersAsArray = json_decode($recu, true);

    $post = $Serializer->deserialize($recu, Students::class, 'json');
    $post->getFirstname();
    $post->setFirstname("kk");

    $manager->persist($post);
    $manager->flush();

    return new Response();
    }
}
