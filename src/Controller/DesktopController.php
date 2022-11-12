<?php

namespace App\Controller;

use App\Entity\Desktop;
use App\Entity\User;
use App\Form\DesktopType;
use App\Repository\DesktopRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/desktop")
 */
class DesktopController extends AbstractController
{
    private DesktopRepository $desktopRepository;

    public function __construct(DesktopRepository $desktopRepository)
    {
        $this->desktopRepository = $desktopRepository;
    }

    public function checkUserAccess(): void
    {
        $user = $this->getUser();

        if (!$user) {
            throw $this->createAccessDeniedException('You cannot access this page!');
        }

        if (!$user->getIsProfessionnal()) {
            throw $this->createAccessDeniedException('You are not allowed to access this page');
        }
    }

    /**
     * @Route("/", name="app_desktop_index", methods={"GET"})
     */
    public function index(): Response
    {

        $this->checkUserAccess();

        return $this->render('desktop/index.html.twig', [
            'desktops' => $this->desktopRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_desktop_new", methods={"GET", "POST"})
     */
    public function new(Request $request, DesktopRepository $desktopRepository): Response
    {
        $this->checkUserAccess();

        $desktop = new Desktop();
        $form = $this->createForm(DesktopType::class, $desktop);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $desktopRepository->add($desktop);
            return $this->redirectToRoute('app_desktop_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('desktop/new.html.twig', [
            'desktop' => $desktop,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_desktop_show", methods={"GET"})
     */
    public function show(Desktop $desktop): Response
    {
        return $this->render('desktop/show.html.twig', [
            'desktop' => $desktop,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_desktop_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Desktop $desktop, DesktopRepository $desktopRepository): Response
    {
        $form = $this->createForm(DesktopType::class, $desktop);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $desktopRepository->add($desktop);
            return $this->redirectToRoute('app_desktop_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('desktop/edit.html.twig', [
            'desktop' => $desktop,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_desktop_delete", methods={"POST"})
     */
    public function delete(Request $request, Desktop $desktop, DesktopRepository $desktopRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$desktop->getId(), $request->request->get('_token'))) {
            $desktopRepository->remove($desktop);
        }

        return $this->redirectToRoute('app_desktop_index', [], Response::HTTP_SEE_OTHER);
    }
}
