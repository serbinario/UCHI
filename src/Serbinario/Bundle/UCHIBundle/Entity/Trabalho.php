<?php

namespace Serbinario\Bundle\UCHIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trabalho
 *
 * @ORM\Table(name="trabalho")
 * @ORM\Entity
 */
class Trabalho
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_trabalho", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTrabalho;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_trabalho", type="string", length=40, nullable=false)
     */
    private $nomeTrabalho;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="CandidatoTemTrabalho", mappedBy="trabalhoTrabalho")
     */
    private $canditatoTemTrabalho;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->canditatoTemTrabalho = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idTrabalho
     *
     * @return integer 
     */
    public function getIdTrabalho()
    {
        return $this->idTrabalho;
    }

    /**
     * Set nomeTrabalho
     *
     * @param string $nomeTrabalho
     * @return Trabalho
     */
    public function setNomeTrabalho($nomeTrabalho)
    {
        $this->nomeTrabalho = $nomeTrabalho;

        return $this;
    }

    /**
     * Get nomeTrabalho
     *
     * @return string 
     */
    public function getNomeTrabalho()
    {
        return $this->nomeTrabalho;
    }

    /**
     * Add canditatoCanditato
     *
     * @param \Serbinario\Bundle\UCHIBundle\Entity\CandidatoTemTrabalho $candidatoTemTrabalho
     * @return Trabalho
     */
    public function addCandidatoTemTrabalho(\Serbinario\Bundle\UCHIBundle\Entity\CandidatoTemTrabalho $candidatoTemTrabalho)
    {
        $this->canditatoTemTrabalho[] = $candidatoTemTrabalho;

        return $this;
    }

    /**
     * Remove canditatoCanditato
     *
     * @param \Serbinario\Bundle\UCHIBundle\Entity\CandidatoTemTrabalho $candidatoTemTrabalho
     */
    public function removeCandidatoTemTrabalho(\Serbinario\Bundle\UCHIBundle\Entity\CandidatoTemTrabalho $candidatoTemTrabalho)
    {
        $this->canditatoTemTrabalho->removeElement($candidatoTemTrabalho);
    }

    /**
     * Get canditatoCanditato
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCandidatoTemTrabalho()
    {
        return $this->canditatoTemTrabalho;
    }
    
    /**
     * 
     * @return type
     */
    public function __toString() 
    {
        return $this->getNomeTrabalho();
    }
}
