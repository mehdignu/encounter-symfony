<?php
namespace App\Controller\Welcome;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class LoginController extends AbstractController
{

    /**
     * @Route("/")
     * @Method({"GET"})
     */
    function index(){


        return $this->render('Welcome/index.html.twig');

    }




}