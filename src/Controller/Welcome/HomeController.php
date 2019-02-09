<?php
namespace App\Controller\Welcome;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Form\CreateFormType;


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


    /**
     * @Route("/create", name="create_encounter")
     */
    public function create(Request $request){

        $form = $this->createForm(CreateFormType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $searchFormData = $form->getData();


        }


        return $this->render('Home/create.html.twig', [
            'our_form' => $form->createView()
        ]);

    }


}