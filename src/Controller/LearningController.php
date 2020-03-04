<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class LearningController extends AbstractController
{


    /**
     * @Route("/learning", name="learning")
     */
    public function index()
    {
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'Samira',
            'coach' => 'sicco',
        ]);

    }


    /**
     * @Route("/change/name", name="change_name")
     */
    public function changeName()
    {
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            $_SESSION['yourName'] =  $name;
        }

        return $this->render('change_name/index.html.twig', [
            'controller_name' => 'ChangeNameController',

        ]);
    }

    /**
     * @Route("/show/name", name="show_name")
     */
    public function showName()
    {
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            $_SESSION['yourName'] =  $name;
        }
        return $this->render('show_name/index.html.twig', [
            'controller_name' => 'showNameController',
            'name' => $name,
        ]);
    }
}
