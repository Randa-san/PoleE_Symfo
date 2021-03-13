<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Job;
use App\Form\JobType;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $authChecker = $this->container->get('security.authorization_checker');
        if (($authChecker->isGranted('ROLE_ADMIN') === true)||($authChecker->isGranted('ROLE_USER') === true)) {
            return $this->redirectToRoute('home_show');
        } else {
            return $this->redirectToRoute('user_new');
        }   
    }

    /**
     * @Route("/home", name="home_show")
     */
    public function show(): Response
    {
        $jobs = $this->getDoctrine()->getRepository(Job::class)->findAll();
        return $this->render('home/show.html.twig', array(
            'jobs' => $jobs
        ));
    }

    /**
     * @Route("/home/add", name="home_add")
     */
    public function add(Request $request): Response
    {
        $authChecker = $this->container->get('security.authorization_checker');
        if (true === $authChecker->isGranted('ROLE_ADMIN')) {
            $job = new Job();
        $form = $this->createForm(JobType::class, $job); 
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager(); 
            $em->persist($job);
            $em->flush();
            return $this->redirectToRoute('home_show');
        }
    	return $this->render('home/add.html.twig', [
            'form' => $form->createView()
        ]);
        } elseif (true === $authChecker->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('home_show');
        } else {
            return $this->redirectToRoute('user_new');
        }
    }

    /**
     * @Route("/home/delete/{ref}", name="home_delete")
     */
    public function delete($ref): Response
    {
        $authChecker = $this->container->get('security.authorization_checker');
        if (true === $authChecker->isGranted('ROLE_ADMIN')) {
            $em = $this->getDoctrine()->getManager(); 
            $repository = $this->getDoctrine()->getRepository(Job::class);
            $job = $repository->findOneBy(['ref'=>$ref]);
            $em->remove($job);
            $em->flush();
            return $this->redirectToRoute('home_show');
        } elseif (true === $authChecker->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('home_show');
        } else {
            return $this->redirectToRoute('user_new');
        }
    }

    /**
     * @Route("/home/modify/{ref}", name="home_modify")
     */
    public function modify(Request $request, $ref): Response
    {
        $authChecker = $this->container->get('security.authorization_checker');
        if (true === $authChecker->isGranted('ROLE_ADMIN')) {
            $repository = $this->getDoctrine()->getRepository(Job::class);
            $job = $repository->findOneBy(['ref'=>$ref]);
            $form = $this->createForm(JobType::class, $job);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager(); 
                $em->persist($job);
                $em->flush();
                return $this->redirectToRoute('home_show');
            }
            return $this->render('home/add.html.twig', [
                'form' => $form->createView()
            ]);
        } elseif (true === $authChecker->isGranted('ROLE_USER')) {
            return $this->redirectToRoute('home_show');
        } else {
            return $this->redirectToRoute('user_new');
        }
    }
}
