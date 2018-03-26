<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/cv", name="homepage")
     * @Template
     */
    public function indexAction()
    {
        $loisirs = $this->getDoctrine()->getRepository("AppBundle:Loisirs")->findAll();
        $forms = $this->getDoctrine()->getRepository("AppBundle:Formations")->findAll();
        $exps = $this->getDoctrine()->getRepository("AppBundle:Experiences")->findAll();
        
        return array('name'=> 'seignard','firstname'=> 'aurelien','loisirs'=> $loisirs, 'formations'=> $forms, 'experiences'=> $exps);
    }
    
    /**
     * @Route("/admin", name="admin")
     * @Template
     */
    public function adminAction()
    {
        return array();
    }
}
