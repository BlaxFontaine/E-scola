<?php

namespace App\Controller;

use App\Repository\MascotRepository;
use App\Repository\VisitorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ApiGetController 
{
    /**
     * @Route("/api/get/mascot", name="api_get_mascot")
     */
    public function getMascot(MascotRepository $mascotRepository, NormalizerInterface $Normalizer, SerializerInterface $Serializer)
    {
        $product = $mascotRepository->findAll();
        $post = $Normalizer->normalize($product, null, ['groups' => 'mascot']);
        $json = json_encode($post);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 

      /**
     * @Route("/api/get/mascot/{id}", name="api_get_mascot_id, methods={"GET"})
     */
    // public function getMascotState($id, MascotRepository $mascotRepository, NormalizerInterface $Normalizer, SerializerInterface $Serializer)
    // {
    //     $product = $mascotRepository->findById($id);
    //     $post = $Normalizer->normalize($product, null, ['groups' => 'mascot']);
    //     $json = json_encode($post);
    //     $response = new Response($json, 200, [
    //             'content-type' => 'application/json',
    //             'Access-Control-Allow-Origin','*'
    //         ]);
    //     return $response;
    // }

        /**
     * @Route("/api/get/visitor", name="api_get_visitor")
     */
    // public function getVisitor(VisitorRepository $visitorRepository, NormalizerInterface $Normalizer, SerializerInterface $Serializer)
    // {
    //     $product = $visitorRepository->findAll();
    //     $post = $Normalizer->normalize($product, null);
    //     $json = json_encode($post);
    //     $response = new Response($json, 200, [
    //             'content-type' => 'application/json',
    //             'Access-Control-Allow-Origin','*'
    //         ]);
    //     return $response;
    // } 

}
