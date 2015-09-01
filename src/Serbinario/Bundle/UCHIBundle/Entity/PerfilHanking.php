<?php

namespace Serbinario\Bundle\UCHIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerfilHanking
 *
 * @ORM\Table(name="perfil_hanking")
 * @ORM\Entity
 */
class PerfilHanking
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_perfil_hanking", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPerfilHanking;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_perfil_hanking", type="string", length=45, nullable=false)
     */
    private $nomePerfilHanking;



    /**
     * Get idPerfilHanking
     *
     * @return integer 
     */
    public function getIdPerfilHanking()
    {
        return $this->idPerfilHanking;
    }

    /**
     * Set nomePerfilHanking
     *
     * @param string $nomePerfilHanking
     * @return PerfilHanking
     */
    public function setNomePerfilHanking($nomePerfilHanking)
    {
        $this->nomePerfilHanking = $nomePerfilHanking;

        return $this;
    }

    /**
     * Get nomePerfilHanking
     *
     * @return string 
     */
    public function getNomePerfilHanking()
    {
        return $this->nomePerfilHanking;
    }
}
