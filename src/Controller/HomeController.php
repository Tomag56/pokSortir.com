<?php

namespace App\Controller;

use App\Entity\Participant;
use App\Form\ParticipantType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        $participant = new Participant();
        $form = $this->createForm(ParticipantType::class, $participant);
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            "form"=> $form->createView()
        ]);
    }
}
