<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
        return $this->render('change_name/index.html.twig', [
            'controller_name' => 'ChangeNameController',
            'name' => 'SAMMYB',
        ]);
    }

    /**
     * @Route("/show/name", name="show_name")
     */
    public function showName()
    {
        return $this->render('show_name/index.html.twig', [
            'controller_name' => 'showNameController',
            'name' => 'SAMMYB',
        ]);
    }
}
