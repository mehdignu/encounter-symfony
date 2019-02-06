<?php
namespace App\Controller\Welcome;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;



class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home_page")
     * @Method({"GET"})
     */
    function index(){

        return $this->render('Home/index.html.twig');

    }


    /**
     * @Route("/encounter/{id}", name="encounter_page")
     */
    public function encounter($id)
    {
        return $this->render('Home/encounter.html.twig');
    }


}