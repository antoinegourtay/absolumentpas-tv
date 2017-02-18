<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ActualityController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function actualityAction()
    {
        $em = $this->getDoctrine()->getManager();
        $actualities = $em->getRepository('AppBundle:Actuality')->findAll();
        $programmes = $em ->getRepository('AppBundle:Programme')->findAll();

        return $this->render('AppBundle:Actuality:index.html.twig', array(
            'actualities' => $actualities,
            'programmes' => $programmes,
        ));
    }

}
