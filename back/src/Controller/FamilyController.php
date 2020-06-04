<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FamilyController extends AbstractController
{
    /**
     * @Route("/family", name="family")
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

        $id = 1;
        $firstname = "Assa";
        $lastname = "Traore";

        $find_child = "SELECT id FROM users WHERE firstname='" . $firstname ."' AND lastname='" . $lastname . "';";
        $child_id = intval($link->query($find_child)->fetch_array(MYSQLI_NUM)[0]);
        $query = "INSERT INTO pupils_parents (parents_id, pupils_id) VALUES (" . $id . ", " . $child_id . ");";
        
        echo $query;
        $result = $link->query($query);

        mysqli_close($link);

        return $this->render('user/index.html.twig', [
            'controller_name' => 'FamilyController',
        ]);
    }
}
