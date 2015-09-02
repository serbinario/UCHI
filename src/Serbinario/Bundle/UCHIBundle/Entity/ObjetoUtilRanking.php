<?php
namespace Serbinario\Bundle\UCHIBundle\Entity;

/**
 * Description of ObjetoUtilRanking
 *
 * @author serbinario
 */
class ObjetoUtilRanking 
{
    /**
     *
     * @var type 
     */
    private $nome;
    
    /**
     *
     * @var type 
     */
    private $valor;
    
    /**
     * 
     * @param \Serbinario\Bundle\UCHIBundle\Entity\type $nome
     * @param \Serbinario\Bundle\UCHIBundle\Entity\type $valor
     */
    public function __construct($nome, $valor) 
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    
    /**
     * 
     * @return type
     */
    public function getNome() 
    {
        return $this->nome;
    }

    /**
     * 
     * @return type
     */
    public function getValor() 
    {
        return $this->valor;
    }

    /**
     * 
     * @param type $nome
     */
    public function setNome($nome) 
    {
        $this->nome = $nome;
    }

    /**
     * 
     * @param type $valor
     */
    public function setValor($valor) 
    {
       $this->valor = $valor;
    }
    
}