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
     * @Route("/a-propos", name="about_us")
     * @Method("GET")
     */
    public function aboutUsAction()
    {
        return $this->render('CathayBundle:Front:about-us.html.twig');
    }

    /**
     * @Route("/mentions-legales", name="legal_notice")
     * @Method("GET")
     */
    public function legalNoticeAction()
    {
        return $this->render('CathayBundle:Front:legal-notice.html.twig');
    }

    /**
     * @Route("/conditions-commerciales", name="commercial_conditions")
     * @Method("GET")
     */
    public function commercialConditionsAction()
    {
        return $this->render('CathayBundle:Front:commercial-conditions.html.twig');
    }

    /**
     * @Route("/univers/electrique", name="electric_universe")
     * @Method("GET")
     */
    public function electricUniverseAction()
    {
        return $this->render('CathayBundle:Front:electric-universe.html.twig');
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
     * @Route("/univers/jouets", name="toys_universe")
     * @Method("GET")
     */
    public function toysUniverseAction()
    {
        return $this->render('CathayBundle:Front:toys-universe.html.twig');
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
