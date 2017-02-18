<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class IndexController extends Controller
{
    /**
     * @Route("/home")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $actualities = $em->getRepository('AppBundle:Actuality')->findAll();
        $programmes = $em->getRepository('AppBundle:Programme')->findAll();

        return $this->render('AppBundle:Index:index.html.twig', array(
            'actualities' => $actualities,
            'programmes' => $programmes,
        ));
    }

}
