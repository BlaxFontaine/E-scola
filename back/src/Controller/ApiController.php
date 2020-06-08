<?php

namespace App\Controller;

use App\Entity\Caregiver;
use App\Entity\Mascot;
use App\Repository\MascotRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ApiController
{
    /**
     * @Route("/api/get/caregivers", name="api_get_caregivers", methods={"GET"})
     */
    // public function getCaregivers(CaregiverRepository $CaregiverRepository, NormalizerInterface $Normalizer, SerializerInterface $Serializer)
    // {
    //     $product = $CaregiverRepository->findAll();
    //     $post = $Normalizer->normalize($product, null, ['groups' => 'care']);
    //     $json = json_encode($post);
    //     $response = new Response($json, 200, [
    //             'content-type' => 'application/json',
    //             'Access-Control-Allow-Origin','*'
    //         ]);
    //     return $response;
    // }

        /**
     * @Route("/api/get/caregiver/{id}", name="api_get_caregivers", methods={"GET"})
     */
    // public function getCaregiver($id, CaregiverRepository $CaregiverRepository, NormalizerInterface $Normalizer, SerializerInterface $Serializer)
    // {
    //     $product = $CaregiverRepository->findById($id);
    //     $post = $Normalizer->normalize($product, null, ['groups' => 'care']);
    //     $json = json_encode($post);
    //     $response = new Response($json, 200, [
    //             'content-type' => 'application/json',
    //             'Access-Control-Allow-Origin','*'
    //         ]);
    //     return $response;
    // }

    /**
     * @Route("/api/get/mascot", name="api_get_mascot", methods={"GET"})
     */
    public function getMascot(MascotRepository $MascotRepository, NormalizerInterface $Normalizer, SerializerInterface $Serializer)
    {
        $product = $MascotRepository->findAll();
        $post = $Normalizer->normalize($product, null, ['groups' => 'mascot']);
        $json = json_encode($post);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    }

    /**
     * @Route("/api/get/pupils", name="api_get_pupils", methods={"GET"})
     */
    // public function getPupils(PupilRepository $pupilRepository, NormalizerInterface $Normalizer, SerializerInterface $Serializer)
    // {
    //     $product = $pupilRepository->findAll();
    //     $post = $Normalizer->normalize($product, null, ['groups' => 'pupil']);
    //     $json = json_encode($post);
    //     $response = new Response($json, 200, [
    //             'content-type' => 'application/json',
    //             'Access-Control-Allow-Origin','*'
    //         ]);
    //     return $response;
    // }

        /**
     * @Route("/api/get/pupil/{id}", name="api_get_pupil", methods={"GET"})
     */
    // public function getPupil($id, PupilRepository $pupilRepository, NormalizerInterface $Normalizer, SerializerInterface $Serializer)
    // {
    //     $product = $pupilRepository->findById($id);
    //     $post = $Normalizer->normalize($product, null, ['groups' => 'pupil']);
    //     $json = json_encode($post);
    //     $response = new Response($json, 200, [
    //             'content-type' => 'application/json',
    //             'Access-Control-Allow-Origin','*'
    //         ]);
    //     return $response;
    // }

       /**
     * @Route("/api/get/teachers", name="api_get_teachers", methods={"GET"})
     */
    // public function getTeachers(TeacherRepository $teacherRepository, NormalizerInterface $Normalizer, SerializerInterface $Serializer)
    // {
    //     $product = $teacherRepository->findAll();
    //     $post = $Normalizer->normalize($product, null, ['groups' => 'teach']);
    //     $json = json_encode($post);
    //     $response = new Response($json, 200, [
    //             'content-type' => 'application/json',
    //             'Access-Control-Allow-Origin','*'
    //         ]);
    //     return $response;
    // }

           /**
     * @Route("/api/get/teacher/{id}", name="api_get_teacher", methods={"GET"})
     */
    // public function getTeacher($id, TeacherRepository $teacherRepository, NormalizerInterface $Normalizer, SerializerInterface $Serializer)
    // {
    //     $product = $teacherRepository->findById($id);
    //     $post = $Normalizer->normalize($product, null, ['groups' => 'teach']);
    //     $json = json_encode($post);
    //     $response = new Response($json, 200, [
    //             'content-type' => 'application/json',
    //             'Access-Control-Allow-Origin','*'
    //         ]);
    //     return $response;
    // }

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
