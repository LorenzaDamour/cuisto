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
  public function indexAction(){
  $em = $this->getDoctrine()->getManager();
  $participation = $em->getRepository('PartagePartageBundle:Participation')->findAll();
   }
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
  $participation->setUser($userId);


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


}
