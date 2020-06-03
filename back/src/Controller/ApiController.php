<?php

namespace App\Controller;

use App\Entity\Caregiver;
use App\Repository\PupilRepository;
use App\Repository\MascotRepository;
use App\Repository\TeacherRepository;
use App\Repository\CaregiverRepository;
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
    public function getCaregivers(CaregiverRepository $CaregiverRepository, NormalizerInterface $Normalizer, SerializerInterface $Serializer)
    {
        $product = $CaregiverRepository->findAll();
        $post = $Normalizer->normalize($product, null, ['groups' => 'care']);
        $json = json_encode($post);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    }

        /**
     * @Route("/api/get/caregiver/{id}", name="api_get_caregivers", methods={"GET"})
     */
    public function getCaregiver($id, CaregiverRepository $CaregiverRepository, NormalizerInterface $Normalizer, SerializerInterface $Serializer)
    {
        $product = $CaregiverRepository->findById($id);
        $post = $Normalizer->normalize($product, null, ['groups' => 'care']);
        $json = json_encode($post);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    }

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
    public function getPupils(PupilRepository $pupilRepository, NormalizerInterface $Normalizer, SerializerInterface $Serializer)
    {
        $product = $pupilRepository->findAll();
        $post = $Normalizer->normalize($product, null, ['groups' => 'pupil']);
        $json = json_encode($post);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    }

        /**
     * @Route("/api/get/pupil/{id}", name="api_get_pupil", methods={"GET"})
     */
    public function getPupil($id, PupilRepository $pupilRepository, NormalizerInterface $Normalizer, SerializerInterface $Serializer)
    {
        $product = $pupilRepository->findById($id);
        $post = $Normalizer->normalize($product, null, ['groups' => 'pupil']);
        $json = json_encode($post);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    }

       /**
     * @Route("/api/get/teachers", name="api_get_teachers", methods={"GET"})
     */
    public function getTeachers(TeacherRepository $teacherRepository, NormalizerInterface $Normalizer, SerializerInterface $Serializer)
    {
        $product = $teacherRepository->findAll();
        $post = $Normalizer->normalize($product, null, ['groups' => 'teach']);
        $json = json_encode($post);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    }

           /**
     * @Route("/api/get/teacher/{id}", name="api_get_teacher", methods={"GET"})
     */
    public function getTeacher($id, TeacherRepository $teacherRepository, NormalizerInterface $Normalizer, SerializerInterface $Serializer)
    {
        $product = $teacherRepository->findById($id);
        $post = $Normalizer->normalize($product, null, ['groups' => 'teach']);
        $json = json_encode($post);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    }

    

}
