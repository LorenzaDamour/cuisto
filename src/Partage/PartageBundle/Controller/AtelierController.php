<?php

namespace Partage\PartageBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Partage\PartageBundle\Entity\Atelier;
use Partage\PartageBundle\Form\AtelierType;
use Partage\PartageBundle\Entity\StatutAtelier;

/**
* Atelier controller.
*
* @Route("/atelier")
*/
class AtelierController extends Controller
{
  /**
 * Lists all Atelier entities.
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
       return $this->redirectToRoute('atelier_index');
     }
     return $this->render('atelier/new.html.twig', array(
       'atelier' => $atelier,
       'form' => $form->createView(),
     ));
   }

   /**
  * @Route("/atelier/accepte/{id}/{atelierId}", name="atelier_accepte")
  * @Method("GET")
* le cuisinier accepte
  */
  public function atelierAccepteAction(Request $request, Atelier $atelier, $atelierId)
  {
    $statut = new StatutAtelier();
    $user = $this->getDoctrine()->getManager()->getRepository('PartagePartageBundle:Users')->find($atelierId);
    $statut->setUser($user);
    $statut->setStatut('Accepte');
    $statut->setAtelier($atelier);
    $em = $this->getDoctrine()->getManager();
    $em->persist($statut);
    $em->flush();
    return $this->render('PartagePartageBundle:Default:atelierAccepte.html.twig',  array('id' => $atelier->getId()
  ));
}

/**
* @Route("/atelier/refuse/{id}/{atelierId}", name="atelier_refuse")
* @Method("GET")
* Le particulier refuse l'atelier
*/
public function atelierRefuseAction(Request $request, Atelier $atelier, $atelierId)
{
  $statut = new StatutAtelier();
  $user = $this->getDoctrine()->getManager()->getRepository('PartagePartageBundle:Users')->find($atelierId);
  $statut->setUser($user);
  $statut->setStatut('Refuse');
  $statut->setAtelier($atelier);
  $em = $this->getDoctrine()->getManager();
  $em->persist($statut);
  $em->flush();
  return $this->render('PartagePartageBundle:Default:atelierRefuse.html.twig',  array(
    'id' => $atelier->getId(),
  ));
}
   /**
* Finds and displays a Atelier entity.
*
* @Route("/{id}", name="atelier_show")
* @Method("GET")
*/
public function showAction(Atelier $atelier)
{

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

  /**
  * Deletes a Atelier entity.
  *
  * @Route("/{id}", name="atelier_delete")
  * @Method("DELETE")
  */
  public function deleteAction(Request $request, Atelier $atelier)
  {
    $form = $this->createDeleteForm($atelier);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->remove($atelier);
      $em->flush();
    }
    return $this->redirectToRoute('accueil');
  }

  /**
* Creates a form to delete a Atelier entity.
*
* @param Atelier $atelier The Atelier entity
*
* @return \Symfony\Component\Form\Form The form
*/
private function createDeleteForm(Atelier $atelier)
{
  return $this->createFormBuilder()
  ->setAction($this->generateUrl('atelier_delete', array('id' => $atelier->getId())))
  ->setMethod('DELETE')
  ->getForm()
  ;
}
}
