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
     * @Route('/programme')
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

//    /**
//     * @Rest\View()
//     * @Rest\Get("/programmes")
//     */
//
//    public function getProgrammesAction(Request $request)
//    {
//        $programmes = $this->get('doctrine.orm.entity_manager')
//                        ->getRepository('AppBundle:Programme')
//                        ->findAll();
//        /* @var $programmes Programme[] */
//
//        return $programmes;
//    }
//
//    /**
//     * @Rest\View()
//     * @Rest\Get("/programmes/{id}")
//     */
//
//    public function getProgrammeAction(Request $request)
//    {
//        $programme = $this->get('doctrine.orm.entity_manager')
//                    ->getRepository('AppBundle:Programme')
//                    ->find($request->get('program_id'));
//        /* @var $programme Programme */
//
//        if (empty($programme)) {
//            return new JsonResponse(['message' => 'Programme not found'], Response::HTTP_NOT_FOUND);
//        }
//
//        return $programme;
//    }

}
