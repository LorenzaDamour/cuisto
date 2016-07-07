<?php

namespace Partage\PartageBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Partage\PartageBundle\Entity\Atelier;
use Partage\PartageBundle\Form\AtelierType;

class AtelierController extends Controller
{
  /**
 * Lists all Dons entities.
 *
 * @Route("/atelier", name="atelier_index")
 * @Method("GET")
 */
 public function indexAction()
 {
   $em = $this->getDoctrine()->getManager();
   $atelier = $em->getRepository('PartagePartageBundle:Atelier')->findAll();
   $user = $this->getUser();

     return $this->render('atelier/indexAtelier.html.twig', array(
       'atelier' => $atelier,
     ));

 }

  /**
   * Creates a new Atelier entity.
   *
   * @Route("/new", name="atelier_new")
   * @Method({"GET", "POST"})
   */
   public function newAction(Request $request)
   {
     $atelier = new Atelier();
     $form = $this->createForm('Partage\PartageBundle\Form\AtelierType', $atelier);
     $form->handleRequest($request);
     $userId = $this->getUser();
     $userId->getId();
     $atelier->setUser($userId);
     if ($form->isSubmitted() && $form->isValid()) {
       $em = $this->getDoctrine()->getManager();
       $em->persist($atelier);
       $em->flush();
       return $this->redirectToRoute('accueil');
     }
     return $this->render('atelier/new.html.twig', array(
       'atelier' => $atelier,
       'form' => $form->createView(),
     ));
   }
}
