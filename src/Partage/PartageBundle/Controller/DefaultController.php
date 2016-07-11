<?php

namespace Partage\PartageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="index_page")
     */
    public function indexAction()
    {
        return $this->render('PartagePartageBundle:Accueil:index.html.twig');
    }

    /**
 * @Route("/notif")
 * Page de notification pour le particulier
 */
 public function notificationAction()
 {
    $userId = $this->getUser();
    $userId->getId();
   $atelier = $this->getDoctrine()->getManager();
   $listeAtelier = $atelier->getRepository('PartagePartageBundle:Atelier')->findBy(['user'=>$userId]);
   return $this->render('PartagePartageBundle:Default:notifications.html.twig', array(
     'atelier' => $listeAtelier,
   ));
 }

}
