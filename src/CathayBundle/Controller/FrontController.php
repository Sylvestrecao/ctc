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

    /**
     * @Route("/univers/fete", name="fest_universe")
     * @Method("GET")
     */
    public function festUniverseAction()
    {
        return $this->render('CathayBundle:Front:fest-universe.html.twig');
    }

    /**
     * @Route("/univers/papeterie", name="paper_universe")
     * @Method("GET")
     */
    public function paperUniverseAction()
    {
        return $this->render('CathayBundle:Front:paper-universe.html.twig');
    }

    /**
     * @Route("/univers/jouets", name="toy_universe")
     * @Method("GET")
     */
    public function toyUniverseAction()
    {
        return $this->render('CathayBundle:Front:toy-universe.html.twig');
    }

    /**
     * @Route("/univers/bien-etre", name="comfort_universe")
     * @Method("GET")
     */
    public function comfortUniverseAction()
    {
        return $this->render('CathayBundle:Front:comfort-universe.html.twig');
    }

    /**
     * @Route("/univers/outillage", name="tools_universe")
     * @Method("GET")
     */
    public function toolsUniverseAction()
    {
        return $this->render('CathayBundle:Front:tools-universe.html.twig');
    }

    /**
     * @Route("/univers/mercerie", name="haberdashery_universe")
     * @Method("GET")
     */
    public function haberdasheryUniverseAction()
    {
        return $this->render('CathayBundle:Front:haberdashery-universe.html.twig');
    }

    /**
     * @Route("/univers/bazar", name="bazar_universe")
     * @Method("GET")
     */
    public function bazarUniverseAction()
    {
        return $this->render('CathayBundle:Front:bazar-universe.html.twig');
    }
}
