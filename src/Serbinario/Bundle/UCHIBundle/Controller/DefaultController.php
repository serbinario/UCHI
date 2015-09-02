<?php

namespace Serbinario\Bundle\UCHIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Serbinario\Bundle\UCHIBundle\Form\CanditatoType;
use Serbinario\Bundle\UCHIBundle\UTIL\GridClass;
use Serbinario\Bundle\UCHIBundle\AlgoritmosRanking\AlgoritmoRankingGeral;

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
    
    /**
     * @Route("/saveCandidato", name="saveCandidato")
     * @Template()
     */
    public function saveCandidatoAction(Request $request)
    {
        #Recuperando o serviço do modelo
        $candidatoRN = $this->get("rn_candidato");
      
        #Criando o formulário
        $form = $this->createForm(new CanditatoType());
          
        #Verficando se é uma submissão
        if($request->getMethod() === "POST") {
            #Repasando a requisição
            $form->handleRequest($request);

            #Verifica se os dados são válidos
            if($form->isValid()) {
                #Recuperando os dados
                $candidato = $form->getData();
                
                #Resultado da operação
                $result =  $candidatoRN->save($candidato);
                
                if($result) {
                    #Messagem de retorno
                    $this->addFlash('success', 'Dados cadastrado com sucesso!');
                } else {
                    $this->addFlash('danger', 'Houve um erro ao cadastrar os dados, tente novamente!');
                }
                     
                #Criando o formulário
                $form = $this->createForm(new CanditatoType());
               
                #Retorno
                return array("form" => $form->createView());
            } else {
                $this->addFlash('warning', 'Há campos obrigatório que não foram preenchidos');
            }
        }
        
        #Retorno
        return array("form" => $form->createView());
    }
    
    /**
     * 
     * @Route("/gridRankingGeral", name="gridRankingGeral")
     * @Template()
     */
    public function gridRankingGeralAction(Request $request)
    {
        if(GridClass::isAjax()) {
            
            $columns = array(    
                "a.nomeCanditato"
                );

            $entityJOIN = array();             
            $rankingArray        = array();
            $parametros           = $request->request->all();
            $entity               = "Serbinario\Bundle\UCHIBundle\Entity\Canditato"; 
            $columnWhereMain      = "";
            $whereValueMain       = "";
            $whereFull            = "";
            
            $gridClass = new GridClass($this->getDoctrine()->getManager(), 
                    $parametros,
                    $columns,
                    $entity,
                    $entityJOIN,           
                    $columnWhereMain,
                    $whereValueMain,
                    $whereFull);

            $resultCandidato = $gridClass->builderQuery();    
            $countTotal      = $gridClass->getCount();
            $countRanking    = count($resultCandidato);      
            
            #Execuçao do algoritmo de ranking
            $rankingRN      = $this->get("rn_hanking");
            $arrayHanking   = $rankingRN->all();
            $algHaking      = new AlgoritmoRankingGeral();
            $resultAlg      = $algHaking->executar($resultCandidato, $arrayHanking);
            
            #Ordenando o array
            $resultAlg->uasort(function ($valor1, $valor2) {
                if ($valor1->getValor() == $valor2->getValor()) {
                    return 0;
                }

                return ($valor1->getValor() < $valor2->getValor()) ? 1 : -1;
            });
            
            $arrayRetorno = $resultAlg->getArrayCopy();
            $contador     = 0;
            
            foreach ($arrayRetorno as $valor)
            {                
                $rankingArray[$contador]['DT_RowId'] = "row_".$contador;   
                $rankingArray[$contador]['nome']     = $valor->getNome();
                $rankingArray[$contador]['valor']    = $valor->getValor();
                
                $contador++;
            }

            //Se a variável $sqlFilter estiver vazio
            if(!$gridClass->isFilter()){
                $countRanking = $countTotal;
            }

            $columns = array(               
                'draw'              => $parametros['draw'],
                'recordsTotal'      => "{$countTotal}",
                'recordsFiltered'   => "{$countRanking}",
                'data'              => $rankingArray               
            );

            return new JsonResponse($columns);
        }else{            
            return array();            
        }
    }
    
}
