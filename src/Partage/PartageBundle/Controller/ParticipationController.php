<?php

namespace Partage\PartageBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Partage\PartageBundle\Entity\Participation;
use Partage\PartageBundle\Form\ParticipationType;

class ParticipationController extends Controller
{
  /**
   * Creates a new Atelier entity.
   *
   * @Route("atelier/{id}/participation", name="participation_new")
   * @Method({"GET", "POST"})
   */
   public function newAction(Request $request)
   {
  $participation = new Participation();
  $form = $this->createForm('Partage\PartageBundle\Form\ParticipationType', $participation);
  $form->handleRequest($request);
  $userId = $this->getUser();
  $userId->getId();

  if ($form->isSubmitted() && $form->isValid()) {
    $em = $this->getDoctrine()->getManager();
    $em->persist($participation);
    $em->flush();
    return $this->redirectToRoute('accueil');
  }
  return $this->render('participation/participation.html.twig', array(
    'participation' => $participation,
    'form' => $form->createView(),
  ));
}


/**
* @Route("/atelier/{id}", name="atelier_show")
* @Method("GET")
*/
 public function showAction(Atelier $atelier)
 {
   $atelier = new Atelier();
   $deleteForm = $this->createDeleteForm($atelier);
  $user = $this->getUser();
  $userId = $this->getUser();
   $userId->getId();
   $atelier->addAssisteAtelier($userId);
   $em = $this->getDoctrine()->getManager();
   $em->persist($atelier);
   $em->flush();
   return $this->render('atelier/atelierInteresse.html.twig',  array('id' => $atelier->getId()));

}
}
