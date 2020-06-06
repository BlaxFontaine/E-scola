<?php

namespace App\Controller;

use Doctrine\ORM\EntityRepository;
use App\Repository\UsersRepository;
use App\Repository\MascotRepository;
use App\Repository\ClassesRepository;
use App\Repository\LessonsRepository;
use App\Repository\TeachersRepository;
use App\Repository\HomeVisitRepository;
use App\Repository\ActivitiesRepository;
use App\Repository\CaregiversRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ApiGetController 
{
    /**
     * @Route("/api/get/mascot", name="api_get_mascot")
     */
    public function getMascot(MascotRepository $mascotRepository, NormalizerInterface $Normalizer)
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
     * @Route("/api/get/homeVisit", name="api_get_homeVisit")
     */
    public function getVisitor(HomeVisitRepository $homeVisitRepository, NormalizerInterface $Normalizer)
    {

        $product = $homeVisitRepository->findBy(array('count' => '1'), array('id' => 'desc'), 1, 0);
        $post = $Normalizer->normalize($product, null, ['groups' => 'visit']);
        $json = json_encode($post);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 

    /**
     * @Route("/api/get/classes", name="api_get_classes")
     */
    public function getClasses(ClassesRepository $classesRepository, NormalizerInterface $Normalizer)
    {
        $product = $classesRepository->findAll();
        $post = $Normalizer->normalize($product, null, ['groups' => 'classes']);
        $json = json_encode($post);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 

        /**
     * @Route("/api/get/activities", name="api_get_activities")
     */
    public function getActivities(ActivitiesRepository $activitiesRepository, NormalizerInterface $Normalizer)
    {
        $product = $activitiesRepository->findAll();
        $post = $Normalizer->normalize($product, null, ['groups' => 'activities']);
        $json = json_encode($post);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    }

            /**
     * @Route("/api/get/lessons", name="api_get_lessons")
     */
    public function getLessons(LessonsRepository $lessonsRepository, NormalizerInterface $Normalizer)
    {
        $product = $lessonsRepository->findAll();
        $post = $Normalizer->normalize($product, null, ['groups' => 'lessons']);
        $json = json_encode($post);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    }

        /**
     * @Route("/api/get/teachersdetails", name="api_get_teachers_details")
     */
    public function getteachers(TeachersRepository $teachersRepository, NormalizerInterface $Normalizer)
    {

        $product = $teachersRepository->findAll();
        $post = $Normalizer->normalize($product, null, ['groups' => 'teachers']);
        $json = json_encode($post);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 


        /**
     * @Route("/api/get/teachers/{id}", name="api_get_teachers_id")
     */
    public function getTeacher($id, TeachersRepository $teachersRepository, NormalizerInterface $Normalizer)
    {

        $product = $teachersRepository->findById($id);
        $post = $Normalizer->normalize($product, null, ['groups' => 'teachers']);
        $json = json_encode($post);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 

    /**
     * @Route("/api/get/caregiversDetails", name="api_get_caregivers_detail")
     */
    public function getCaregivers(CaregiversRepository $caregiversRepository, NormalizerInterface $Normalizer)
    {
        $product = $caregiversRepository->findAll();
        $post = $Normalizer->normalize($product, null, ['groups' => 'caregivers']);
        $json = json_encode($post);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 

            /**
     * @Route("/api/get/students", name="api_get_all_students")
     */
    public function getAllStudents (UsersRepository $usersRepository, NormalizerInterface $Normalizer)
    {

        $product = $usersRepository->findBy(array('role' => 'student'), array('id' => 'desc'), 500, 0);
        $post = $Normalizer->normalize($product, null, ['groups' => 'students']);
        $json = json_encode($post);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 

                /**
     * @Route("/api/get/caregivers", name="api_get_all_caregivers")
     */
    public function getAllCaregivers (UsersRepository $usersRepository, NormalizerInterface $Normalizer)
    {

        $product = $usersRepository->findBy(array('role' => 'caregiver'), array('id' => 'desc'), 500, 0);
        $post = $Normalizer->normalize($product, null, ['groups' => 'caregivers']);
        $json = json_encode($post);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 


        /**
     * @Route("/api/get/user/{id}", name="api_get_user_id")
     */
    public function getStudent ($id, UsersRepository $usersRepository, NormalizerInterface $Normalizer)
    {

        $product = $usersRepository->findById($id);
        $post = $Normalizer->normalize($product, null, ['groups' => 'user']);
        $json = json_encode($post);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 

    /**
     * @Route("/api/get/teachers", name="api_get_caregivers")
     */
    public function getAllTeachers (UsersRepository $usersRepository, NormalizerInterface $Normalizer)
    {

        $product = $usersRepository->findBy(array('role' => 'teacher'), array('id' => 'desc'), 500, 0);
        $post = $Normalizer->normalize($product, null, ['groups' => 'teachers']);
        $json = json_encode($post);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 

}