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
        return $this->render('PartagePartageBundle:Default:index.html.twig');
    }
}
