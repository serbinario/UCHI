<?php
namespace Serbinario\Bundle\UCHIBundle\AlgoritmosRanking;

use Serbinario\Bundle\UCHIBundle\Entity\ObjetoUtilRanking;

/**
 * Description of AlgoritmoRankingGeral
 *
 * @author serbinario
 */
class AlgoritmoRankingGeral 
{
    /**
     * 
     * @param array $dados
     * @param array $ranking
     * @return \ArrayObject
     */
    public function executar(array $dados, array $ranking)
    {
        $dadosArray   = new \ArrayObject($dados);
        $rankingArray = new \ArrayObject($ranking);
        $retornoArray = new \ArrayObject();
        
        #Resolução do algorítmo de ranking
        for ($i = 0; $i < $dadosArray->count(); $i++) {         
            #Variáveis Academico
            $valorExperienciaAcademico  = 0;
            $valorPosGraduacaoAcademico = 0;
            $valorTrabalhosPubAcademico = 0;  
            $somaValorAcademico         = 0;
            
            #Variáveis Mercado
            $valorExperienciaMercado    = 0;
            $valorPosGraduacaoMercado   = 0;
            $valorTrabalhosPubMercado   = 0;
            $somaValorMercado           = 0;
            
            #Variáveis Empresa
            $valorExperienciaEmpresa    = 0;
            $valorPosGraduacaoEmpresa   = 0;
            $valorTrabalhosPubEmpresa   = 0;  
            $somaValorEmpresa           = 0;
          
            ################################################ Cálculo da soma do perfil Acadêmico #########################################################            
            #Experiência
            $idExperiencia = $dadosArray->offsetGet($i)->getExperienciaProfissionalExperienciaProfissional()->getIdExperienciaProfissional();
            
            #Escolha da multiplicação do valor de Experiência
            switch ($idExperiencia) {
               case 1 : $valorExperienciaAcademico = $rankingArray->offsetGet(0)->getExpHanking();break;
               case 2 : $valorExperienciaAcademico = $rankingArray->offsetGet(0)->getExpHanking() * 2;break;
               case 3 : $valorExperienciaAcademico = $rankingArray->offsetGet(0)->getExpHanking() * 3;break;
            }
            
            #PosGraduação
            $valorPosGraduacaoAcademico = count($dadosArray->offsetGet($i)->getPosGraduacaoPosGraduacao()) * $rankingArray->offsetGet(0)->getPgHanking();
 
            #TrabalhosPublicados
            $valorTrabalhosPubAcademico = count($dadosArray->offsetGet($i)->getCandidatoTemTrabalho()) * $rankingArray->offsetGet(0)->getTtHanking();
            
            #SomaTotalAcademico
            $somaValorAcademico = $valorExperienciaAcademico + $valorPosGraduacaoAcademico + $valorTrabalhosPubAcademico;
             
            ################################################ Cálculo da soma do perfil Empresa #########################################################         
            #Experiência
            $idExperiencia = $dadosArray->offsetGet($i)->getExperienciaProfissionalExperienciaProfissional()->getIdExperienciaProfissional();
            
            #Escolha da multiplicação do valor de Experiência
            switch ($idExperiencia) {
               case 1 : $valorExperienciaEmpresa = $rankingArray->offsetGet(1)->getExpHanking();break;
               case 2 : $valorExperienciaEmpresa = $rankingArray->offsetGet(1)->getExpHanking() * 2;break;
               case 3 : $valorExperienciaEmpresa = $rankingArray->offsetGet(1)->getExpHanking() * 3;break;
            }
            
            #PosGraduação
            $valorPosGraduacaoEmpresa = count($dadosArray->offsetGet($i)->getPosGraduacaoPosGraduacao()) * $rankingArray->offsetGet(1)->getPgHanking();
            
            #TrabalhosPublicados
            $valorTrabalhosPubEmpresa = count($dadosArray->offsetGet($i)->getCandidatoTemTrabalho()) * $rankingArray->offsetGet(1)->getTtHanking();
            
            #SomaTotalEmpresa
            $somaValorEmpresa = $valorExperienciaEmpresa + $valorPosGraduacaoEmpresa + $valorTrabalhosPubEmpresa;
            
            ################################################ Cálculo da soma do perfil Mercado #########################################################         
            #Experiência
            $idExperiencia = $dadosArray->offsetGet($i)->getExperienciaProfissionalExperienciaProfissional()->getIdExperienciaProfissional();
            
            #Escolha da multiplicação do valor de Experiência
            switch ($idExperiencia) {
               case 1 : $valorExperienciaMercado = $rankingArray->offsetGet(2)->getExpHanking();break;
               case 2 : $valorExperienciaMercado = $rankingArray->offsetGet(2)->getExpHanking() * 2;break;
               case 3 : $valorExperienciaMercado = $rankingArray->offsetGet(2)->getExpHanking() * 3;break;
            }
            
            #PosGraduação
            $valorPosGraduacaoMercado = count($dadosArray->offsetGet($i)->getPosGraduacaoPosGraduacao()) * $rankingArray->offsetGet(2)->getPgHanking();
            
            #TrabalhosPublicados
            $valorTrabalhosPubMercado = count($dadosArray->offsetGet($i)->getCandidatoTemTrabalho()) * $rankingArray->offsetGet(2)->getTtHanking();
            
            #SomaTotalEmpresa
            $somaValorMercado = $valorExperienciaMercado + $valorPosGraduacaoMercado + $valorTrabalhosPubMercado;
            
            
            #Array de Retorno
            $retornoArray->append(
                    new ObjetoUtilRanking($dadosArray->offsetGet($i)->getNomeCanditato()
                            ,($somaValorMercado + $somaValorAcademico + $somaValorEmpresa))                    
                    );
        }  
        
        return $retornoArray;        
    }
}
