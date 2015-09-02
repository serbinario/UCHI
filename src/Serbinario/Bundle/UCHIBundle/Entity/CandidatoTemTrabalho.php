<?php

namespace Serbinario\Bundle\UCHIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CandidatoTemTrabalho
 *
 * @ORM\Table(name="candidato_tem_trabalho", indexes={@ORM\Index(name="IDX_2500A8E1B873AD9B", columns={"candidato_id_candidato"}), @ORM\Index(name="IDX_2500A8E1FA7D85A5", columns={"trabalho_id_trabalho"})})
 * @ORM\Entity
 */
class CandidatoTemTrabalho
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="qtd_candidato_tem_trabalho", type="integer", nullable=false)
     */
    private $qtdCandidatoTemTrabalho;

    /**
     * @var \Canditato
     *
     * @ORM\ManyToOne(targetEntity="Canditato")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidato_id_candidato", referencedColumnName="id_canditato")
     * })
     */
    private $candidatoCandidato;

    /**
     * @var \Trabalho
     *
     * @ORM\ManyToOne(targetEntity="Trabalho")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="trabalho_id_trabalho", referencedColumnName="id_trabalho")
     * })
     */
    private $trabalhoTrabalho;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set qtdCandidatoTemTrabalho
     *
     * @param integer $qtdCandidatoTemTrabalho
     * @return CandidatoTemTrabalho
     */
    public function setQtdCandidatoTemTrabalho($qtdCandidatoTemTrabalho)
    {
        $this->qtdCandidatoTemTrabalho = $qtdCandidatoTemTrabalho;

        return $this;
    }

    /**
     * Get qtdCandidatoTemTrabalho
     *
     * @return integer 
     */
    public function getQtdCandidatoTemTrabalho()
    {
        return $this->qtdCandidatoTemTrabalho;
    }

    /**
     * Set candidatoCandidato
     *
     * @param \Serbinario\Bundle\UCHIBundle\Entity\Canditato $candidatoCandidato
     * @return CandidatoTemTrabalho
     */
    public function setCandidatoCandidato(\Serbinario\Bundle\UCHIBundle\Entity\Canditato $candidatoCandidato = null)
    {
        $this->candidatoCandidato = $candidatoCandidato;

        return $this;
    }

    /**
     * Get candidatoCandidato
     *
     * @return \Serbinario\Bundle\UCHIBundle\Entity\Canditato 
     */
    public function getCandidatoCandidato()
    {
        return $this->candidatoCandidato;
    }

    /**
     * Set trabalhoTrabalho
     *
     * @param \Serbinario\Bundle\UCHIBundle\Entity\Trabalho $trabalhoTrabalho
     * @return CandidatoTemTrabalho
     */
    public function setTrabalhoTrabalho(\Serbinario\Bundle\UCHIBundle\Entity\Trabalho $trabalhoTrabalho = null)
    {
        $this->trabalhoTrabalho = $trabalhoTrabalho;

        return $this;
    }

    /**
     * Get trabalhoTrabalho
     *
     * @return \Serbinario\Bundle\UCHIBundle\Entity\Trabalho 
     */
    public function getTrabalhoTrabalho()
    {
        return $this->trabalhoTrabalho;
    }
}
