<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {   
        $link = mysqli_connect("127.0.0.1", "root", "", "e_scola");

        if (!$link) {
            echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
            echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;
            echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

        echo "Succès : Une connexion correcte à MySQL a été faite! La base de donnée my_db est géniale." . PHP_EOL;
        echo "Information d'hôte : " . mysqli_get_host_info($link) . PHP_EOL;

        $email='assa@traore.com';
        $password='azerty';
        $firstname='Assa';
        $lastname='Traore';
        $role='pupil';
        $classes_id='';
        $attendances_id='';
        $teachers_id='';

        $query = "INSERT INTO users (email, password, firstname, lastname, role, classes_id, attendances_id, teachers_id) VALUES ('" . $email . "', '" . $password . "', '" . $firstname . "', '" . $lastname . "', '" . $role . "', NULL, NULL, NULL);";
        echo $query;
        $result = $link->query($query);
        echo $result;
        mysqli_close($link);

        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
