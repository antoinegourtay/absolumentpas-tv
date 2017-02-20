<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use AppBundle\Entity\Programme;
use Symfony\Component\Routing\Annotation\Route;

class ProgrammeController extends Controller
{

    /**
     * @Route("/programme", name="page_programme")
     */
    public function programmeAction()
    {
        $em = $this->getDoctrine()->getManager();

        $programmes = $em->getRepository('AppBundle:Programme')->findAll();
        $actualities = $em->getRepository('AppBundle:Actuality')->findAll();

        return $this->render('AppBundle:Programme:index.html.twig', array(
            'actualities' => $actualities,
            'programmes' => $programmes,
        ));
    }



}
