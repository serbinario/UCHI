<?php

namespace Serbinario\Bundle\UCHIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    
    /**
     * @Route("/login", name="login")
     * @Template()
     */
    public function loginAction(Request $request)
    {
        $dados = $request->request->all();
        
        if($dados['_username'] == "uchi" && $dados['_password'] == "uchi") {
           return $this->redirect($this->generateUrl("home"));
        } else {
           $this->addFlash("danger", "Login ou senha inválidos");
        }
        
        return $this->redirect($this->generateUrl("index"));
    }
    
    /**
     * @Route("/home", name="home")
     * @Template()
     */
    public function homeAction()
    {
        return array();
    }
}
