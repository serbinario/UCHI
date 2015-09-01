<?php

namespace Serbinario\Bundle\UCHIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity
 */
class Empresa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_empresa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_empresa", type="string", length=50, nullable=false)
     */
    private $nomeEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_empresa", type="string", length=40, nullable=false)
     */
    private $cnpjEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="cep_empresa", type="string", length=20, nullable=false)
     */
    private $cepEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="logradouro_empresa", type="string", length=50, nullable=false)
     */
    private $logradouroEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro_empresa", type="string", length=50, nullable=false)
     */
    private $bairroEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade_empresa", type="string", length=50, nullable=false)
     */
    private $cidadeEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_empresa", type="string", length=5, nullable=false)
     */
    private $estadoEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="pais_empresa", type="string", length=5, nullable=false)
     */
    private $paisEmpresa;



    /**
     * Get idEmpresa
     *
     * @return integer 
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    /**
     * Set nomeEmpresa
     *
     * @param string $nomeEmpresa
     * @return Empresa
     */
    public function setNomeEmpresa($nomeEmpresa)
    {
        $this->nomeEmpresa = $nomeEmpresa;

        return $this;
    }

    /**
     * Get nomeEmpresa
     *
     * @return string 
     */
    public function getNomeEmpresa()
    {
        return $this->nomeEmpresa;
    }

    /**
     * Set cnpjEmpresa
     *
     * @param string $cnpjEmpresa
     * @return Empresa
     */
    public function setCnpjEmpresa($cnpjEmpresa)
    {
        $this->cnpjEmpresa = $cnpjEmpresa;

        return $this;
    }

    /**
     * Get cnpjEmpresa
     *
     * @return string 
     */
    public function getCnpjEmpresa()
    {
        return $this->cnpjEmpresa;
    }

    /**
     * Set cepEmpresa
     *
     * @param string $cepEmpresa
     * @return Empresa
     */
    public function setCepEmpresa($cepEmpresa)
    {
        $this->cepEmpresa = $cepEmpresa;

        return $this;
    }

    /**
     * Get cepEmpresa
     *
     * @return string 
     */
    public function getCepEmpresa()
    {
        return $this->cepEmpresa;
    }

    /**
     * Set logradouroEmpresa
     *
     * @param string $logradouroEmpresa
     * @return Empresa
     */
    public function setLogradouroEmpresa($logradouroEmpresa)
    {
        $this->logradouroEmpresa = $logradouroEmpresa;

        return $this;
    }

    /**
     * Get logradouroEmpresa
     *
     * @return string 
     */
    public function getLogradouroEmpresa()
    {
        return $this->logradouroEmpresa;
    }

    /**
     * Set bairroEmpresa
     *
     * @param string $bairroEmpresa
     * @return Empresa
     */
    public function setBairroEmpresa($bairroEmpresa)
    {
        $this->bairroEmpresa = $bairroEmpresa;

        return $this;
    }

    /**
     * Get bairroEmpresa
     *
     * @return string 
     */
    public function getBairroEmpresa()
    {
        return $this->bairroEmpresa;
    }

    /**
     * Set cidadeEmpresa
     *
     * @param string $cidadeEmpresa
     * @return Empresa
     */
    public function setCidadeEmpresa($cidadeEmpresa)
    {
        $this->cidadeEmpresa = $cidadeEmpresa;

        return $this;
    }

    /**
     * Get cidadeEmpresa
     *
     * @return string 
     */
    public function getCidadeEmpresa()
    {
        return $this->cidadeEmpresa;
    }

    /**
     * Set estadoEmpresa
     *
     * @param string $estadoEmpresa
     * @return Empresa
     */
    public function setEstadoEmpresa($estadoEmpresa)
    {
        $this->estadoEmpresa = $estadoEmpresa;

        return $this;
    }

    /**
     * Get estadoEmpresa
     *
     * @return string 
     */
    public function getEstadoEmpresa()
    {
        return $this->estadoEmpresa;
    }

    /**
     * Set paisEmpresa
     *
     * @param string $paisEmpresa
     * @return Empresa
     */
    public function setPaisEmpresa($paisEmpresa)
    {
        $this->paisEmpresa = $paisEmpresa;

        return $this;
    }

    /**
     * Get paisEmpresa
     *
     * @return string 
     */
    public function getPaisEmpresa()
    {
        return $this->paisEmpresa;
    }
}
