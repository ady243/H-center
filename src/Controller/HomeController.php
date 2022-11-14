<?php

namespace App\Controller;

use App\Entity\PropertySearch;
use App\Form\PropertySearchType;
use App\Repository\DesktopRepository;
use PhpParser\Node\Stmt\Property;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index( DesktopRepository $desktopRepository ): Response
    {

        $search = new PropertySearch();
        $form = $this->createForm(PropertySearchType::class, $search);
        $form->handleRequest($_REQUEST);



        return $this->render('home/index.html.twig', [
            'desktops' => $desktopRepository->findAll(),
            'form' =>$form->createView()
           
        ]);
    }

}
