<?php

namespace App\Controller;

use Doctrine\ORM\EntityRepository;
use App\Repository\MascotRepository;
use App\Repository\MessagesRepository;
use App\Repository\ClassesRepository;
use App\Repository\LessonsRepository;
use App\Repository\StudentsRepository;
use App\Repository\TeachersRepository;
use App\Repository\HomeVisitRepository;
use App\Repository\ActivitiesRepository;
use App\Repository\AssigmentsRepository;
use App\Repository\CaregiversRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ApiGetController 
{

    /**
     * @Route("/api/get/messages", name="api_get_messages")
    */
    public function getMessages(MessagesRepository $messagesRepository, NormalizerInterface $Normalizer)
    {
        $get = $messagesRepository->findAll();
        $object = $Normalizer->normalize($get, null, ['groups' => 'mess']);
        $json = json_encode($object);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 

    /**
     * @Route("/api/get/mascot", name="api_get_mascot")
    */
    public function getMascot(MascotRepository $mascotRepository, NormalizerInterface $Normalizer)
    {
        $get = $mascotRepository->findAll();
        $object = $Normalizer->normalize($get, null, ['groups' => 'mascot']);
        $json = json_encode($object);
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

        $get = $homeVisitRepository->findBy(array('count' => '1'), array('id' => 'desc'), 1, 0);
        $object = $Normalizer->normalize($get, null, ['groups' => 'visit']);
        $json = json_encode($object);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 

    /**
     * @Route("/api/get/classes/all", name="api_get_classes")
     */
    public function getClasses(ClassesRepository $classesRepository, NormalizerInterface $Normalizer)
    {
        $get = $classesRepository->findAll();
        $object = $Normalizer->normalize($get, null, ['groups' => 'classes']);
        $json = json_encode($object);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 


        /**
     * @Route("/api/get/classes/students/all", name="api_get_classes_strrudents")
     */
    public function getStudentsClasses(ClassesRepository $classesRepository, NormalizerInterface $Normalizer)
    {
        $get = $classesRepository->findAll();
        $object = $Normalizer->normalize($get, null, ['groups' => 'stuclas']);
        $json = json_encode($object);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 

            /**
     * @Route("/api/get/classe/{id}/students/", name="api_get_classes_students")
     */
    public function getStudentsOfOneClasse($id, ClassesRepository $classesRepository, NormalizerInterface $Normalizer)
    {
        $get = $classesRepository->findById($id);
        $object = $Normalizer->normalize($get, null, ['groups' => 'stuclas']);
        $json = json_encode($object);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 

                /**
     * @Route("/api/get/classe/{id}/activities/", name="api_get_classes_students")
     */
    public function getActivitiesOfOneClasse($id, ClassesRepository $classesRepository, NormalizerInterface $Normalizer)
    {
        $get = $classesRepository->findById($id);
        $object = $Normalizer->normalize($get, null, ['groups' => 'stuact']);
        $json = json_encode($object);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 

        /**
     * @Route("/api/get/teachers/all", name="api_get_teachers_id_all_details")
     */
    public function getAllDetailsSortedByTeachers(TeachersRepository $teachersRepository, NormalizerInterface $Normalizer)
    {

        $get = $teachersRepository->findAll();
        $object = $Normalizer->normalize($get, null, ['groups' => 'teachers']);
        $json = json_encode($object);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 


    /**
     * @Route("/api/get/teacher/{id}/all", name="api_get_teacher_id_all_details")
     */
    public function getTeacher($id, TeachersRepository $teachersRepository, NormalizerInterface $Normalizer)
    {

        $get = $teachersRepository->findById($id);
        $object = $Normalizer->normalize($get, null, ['groups' => 'teachers']);
        $json = json_encode($object);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 


     /**
     * @Route("/api/get/students/list", name="api_get_all_students_list")
     */
    public function getAllStudents (StudentsRepository $studentsRepository, NormalizerInterface $Normalizer)
    {

        $get = $studentsRepository->findAll();
        $object = $Normalizer->normalize($get, null, ['groups' => 'students']);
        $json = json_encode($object);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 


        /**
     * @Route("/api/get/student/{id}/all", name="api_get_all_students_details")
     */
    public function getStudent ($id, StudentsRepository $studentsRepository, NormalizerInterface $Normalizer)
    {

        $get = $studentsRepository->findById($id);
        $object = $Normalizer->normalize($get, null, ['groups' => 'student']);
        $json = json_encode($object);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 

    /**
     * @Route("/api/get/teachers/list", name="api_get_teachers_list")
     */
    public function getAllTeachers (TeachersRepository $teachersRepository, NormalizerInterface $Normalizer)
    {

        $get = $teachersRepository->findAll();
        $object = $Normalizer->normalize($get, null, ['groups' => 'teacherss']);
        $json = json_encode($object);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 

            /**
     * @Route("/api/get/caregivers/list", name="api_get_all_caregivers")
     */
    public function getCaregivers (CaregiversRepository $caregiversRepository, NormalizerInterface $Normalizer)
    {

        $get = $caregiversRepository->findAll();
        $object = $Normalizer->normalize($get, null, ['groups' => 'caregivers']);
        $json = json_encode($object);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 

            /**
     * @Route("/api/get/student/{id}/assigments", name="api_get_all_students_daetails")
     */
    public function getStudentAssigments ($id, AssigmentsRepository $assigmentsRepository, NormalizerInterface $Normalizer)
    {

        $get = $assigmentsRepository->findBy(array('student' => $id), array('id' => 'desc'), 40, 0);
        $object = $Normalizer->normalize($get, null, ['groups' => 'assig']);
        $json = json_encode($object);
        $response = new Response($json, 200, [
                'content-type' => 'application/json',
                'Access-Control-Allow-Origin','*'
            ]);
        return $response;
    } 

}