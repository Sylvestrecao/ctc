<?php

namespace CathayBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
class FrontController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render('CathayBundle:Front:index.html.twig');
    }

    /**
     * @Route("/contactez-nous", name="contact")
     * @Method("GET")
     */
    public function contactAction()
    {
        return $this->render('CathayBundle:Front:contact.html.twig');
    }

    /**
     * @Route("/commander", name="order")
     * @Method("GET")
     */
    public function orderAction()
    {
       return $this->render('CathayBundle:Front:order.html.twig');
    }

    /**
     * @Route("/univers/electronique", name="electronic_universe")
     * @Method("GET")
     */
    public function electronicUniverseAction()
    {
        return $this->render('CathayBundle:Front:electronic-universe.html.twig');
    }
    
}
