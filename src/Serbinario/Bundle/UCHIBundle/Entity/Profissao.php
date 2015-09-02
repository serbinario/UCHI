<?php

namespace Serbinario\Bundle\UCHIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profissao
 *
 * @ORM\Table(name="profissao")
 * @ORM\Entity
 */
class Profissao
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_profissao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProfissao;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_profissao", type="string", length=50, nullable=false)
     */
    private $nomeProfissao;



    /**
     * Get idProfissao
     *
     * @return integer 
     */
    public function getIdProfissao()
    {
        return $this->idProfissao;
    }

    /**
     * Set nomeProfissao
     *
     * @param string $nomeProfissao
     * @return Profissao
     */
    public function setNomeProfissao($nomeProfissao)
    {
        $this->nomeProfissao = $nomeProfissao;

        return $this;
    }

    /**
     * Get nomeProfissao
     *
     * @return string 
     */
    public function getNomeProfissao()
    {
        return $this->nomeProfissao;
    }
    
    /**
     * 
     * @return type
     */
    public function __toString() 
    {
        return $this->getNomeProfissao();
    }
}
