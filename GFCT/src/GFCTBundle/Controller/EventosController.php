<?php

namespace GFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventosController extends Controller
{
    public function allAction()
    {
      $repository=$this->getDoctrine()->getRepository('GFCTBundle:Eventos');

      //find *all* events
      $events=$repository->findAll();
        return $this->render('GFCTBundle:Eventos:all.html.twig', array("eventos"=>$events));
    }
}
