<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\Get;
use AppBundle\Entity\Actuality;

class ActualityController extends Controller
{
    /**
     * @Get("/", name="homepage")
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
