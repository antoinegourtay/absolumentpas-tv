<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProgrammeController extends Controller
{
    /**
     * @Route("/programme")
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
