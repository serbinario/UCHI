<?php

namespace Serbinario\Bundle\UCHIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hanking
 *
 * @ORM\Table(name="hanking", indexes={@ORM\Index(name="fk_hanking_perfil_hanking1_idx", columns={"perfil_hanking_id_perfil_hanking"})})
 * @ORM\Entity
 */
class Hanking
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_hanking", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHanking;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_hanking", type="integer", nullable=false)
     */
    private $expHanking;

    /**
     * @var integer
     *
     * @ORM\Column(name="pg_hanking", type="integer", nullable=false)
     */
    private $pgHanking;

    /**
     * @var integer
     *
     * @ORM\Column(name="tt_hanking", type="integer", nullable=false)
     */
    private $ttHanking;

    /**
     * @var integer
     *
     * @ORM\Column(name="peso_hanking", type="integer", nullable=false)
     */
    private $pesoHanking;

    /**
     * @var \PerfilHanking
     *
     * @ORM\ManyToOne(targetEntity="PerfilHanking")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="perfil_hanking_id_perfil_hanking", referencedColumnName="id_perfil_hanking")
     * })
     */
    private $perfilHankingPerfilHanking;



    /**
     * Get idHanking
     *
     * @return integer 
     */
    public function getIdHanking()
    {
        return $this->idHanking;
    }

    /**
     * Set expHanking
     *
     * @param integer $expHanking
     * @return Hanking
     */
    public function setExpHanking($expHanking)
    {
        $this->expHanking = $expHanking;

        return $this;
    }

    /**
     * Get expHanking
     *
     * @return integer 
     */
    public function getExpHanking()
    {
        return $this->expHanking;
    }

    /**
     * Set pgHanking
     *
     * @param integer $pgHanking
     * @return Hanking
     */
    public function setPgHanking($pgHanking)
    {
        $this->pgHanking = $pgHanking;

        return $this;
    }

    /**
     * Get pgHanking
     *
     * @return integer 
     */
    public function getPgHanking()
    {
        return $this->pgHanking;
    }

    /**
     * Set ttHanking
     *
     * @param integer $ttHanking
     * @return Hanking
     */
    public function setTtHanking($ttHanking)
    {
        $this->ttHanking = $ttHanking;

        return $this;
    }

    /**
     * Get ttHanking
     *
     * @return integer 
     */
    public function getTtHanking()
    {
        return $this->ttHanking;
    }

    /**
     * Set pesoHanking
     *
     * @param integer $pesoHanking
     * @return Hanking
     */
    public function setPesoHanking($pesoHanking)
    {
        $this->pesoHanking = $pesoHanking;

        return $this;
    }

    /**
     * Get pesoHanking
     *
     * @return integer 
     */
    public function getPesoHanking()
    {
        return $this->pesoHanking;
    }

    /**
     * Set perfilHankingPerfilHanking
     *
     * @param \Serbinario\Bundle\UCHIBundle\Entity\PerfilHanking $perfilHankingPerfilHanking
     * @return Hanking
     */
    public function setPerfilHankingPerfilHanking(\Serbinario\Bundle\UCHIBundle\Entity\PerfilHanking $perfilHankingPerfilHanking = null)
    {
        $this->perfilHankingPerfilHanking = $perfilHankingPerfilHanking;

        return $this;
    }

    /**
     * Get perfilHankingPerfilHanking
     *
     * @return \Serbinario\Bundle\UCHIBundle\Entity\PerfilHanking 
     */
    public function getPerfilHankingPerfilHanking()
    {
        return $this->perfilHankingPerfilHanking;
    }
}
