<?php

namespace Serbinario\Bundle\UCHIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PosGraduacao
 *
 * @ORM\Table(name="pos_graduacao")
 * @ORM\Entity
 */
class PosGraduacao
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pos_graduacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPosGraduacao;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_pos_graduacao", type="string", length=45, nullable=true)
     */
    private $nomePosGraduacao;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Canditato", mappedBy="posGraduacaoPosGraduacao")
     */
    private $canditatoCanditato;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->canditatoCanditato = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idPosGraduacao
     *
     * @return integer 
     */
    public function getIdPosGraduacao()
    {
        return $this->idPosGraduacao;
    }

    /**
     * Set nomePosGraduacao
     *
     * @param string $nomePosGraduacao
     * @return PosGraduacao
     */
    public function setNomePosGraduacao($nomePosGraduacao)
    {
        $this->nomePosGraduacao = $nomePosGraduacao;

        return $this;
    }

    /**
     * Get nomePosGraduacao
     *
     * @return string 
     */
    public function getNomePosGraduacao()
    {
        return $this->nomePosGraduacao;
    }

    /**
     * Add canditatoCanditato
     *
     * @param \Serbinario\Bundle\UCHIBundle\Entity\Canditato $canditatoCanditato
     * @return PosGraduacao
     */
    public function addCanditatoCanditato(\Serbinario\Bundle\UCHIBundle\Entity\Canditato $canditatoCanditato)
    {
        $this->canditatoCanditato[] = $canditatoCanditato;

        return $this;
    }

    /**
     * Remove canditatoCanditato
     *
     * @param \Serbinario\Bundle\UCHIBundle\Entity\Canditato $canditatoCanditato
     */
    public function removeCanditatoCanditato(\Serbinario\Bundle\UCHIBundle\Entity\Canditato $canditatoCanditato)
    {
        $this->canditatoCanditato->removeElement($canditatoCanditato);
    }

    /**
     * Get canditatoCanditato
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCanditatoCanditato()
    {
        return $this->canditatoCanditato;
    }
    
    /**
     * 
     * @return type
     */
    public function __toString() 
    {
        return $this->getNomePosGraduacao();
    }
}
