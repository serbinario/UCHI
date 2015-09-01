<?php

namespace Serbinario\Bundle\UCHIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExperienciaProfissional
 *
 * @ORM\Table(name="experiencia_profissional")
 * @ORM\Entity
 */
class ExperienciaProfissional
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_experiencia_profissional", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExperienciaProfissional;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_experiencia_profissional", type="string", length=20, nullable=false)
     */
    private $nomeExperienciaProfissional;



    /**
     * Get idExperienciaProfissional
     *
     * @return integer 
     */
    public function getIdExperienciaProfissional()
    {
        return $this->idExperienciaProfissional;
    }

    /**
     * Set nomeExperienciaProfissional
     *
     * @param string $nomeExperienciaProfissional
     * @return ExperienciaProfissional
     */
    public function setNomeExperienciaProfissional($nomeExperienciaProfissional)
    {
        $this->nomeExperienciaProfissional = $nomeExperienciaProfissional;

        return $this;
    }

    /**
     * Get nomeExperienciaProfissional
     *
     * @return string 
     */
    public function getNomeExperienciaProfissional()
    {
        return $this->nomeExperienciaProfissional;
    }
}
