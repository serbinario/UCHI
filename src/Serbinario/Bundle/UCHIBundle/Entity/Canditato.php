<?php

namespace Serbinario\Bundle\UCHIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Canditato
 *
 * @ORM\Table(name="canditato", indexes={@ORM\Index(name="fk_canditato_profissao_idx", columns={"profissao_id_profissao"}), @ORM\Index(name="fk_canditato_experiencia_profissional1_idx", columns={"experiencia_profissional_id_experiencia_profissional"})})
 * @ORM\Entity
 */
class Canditato
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_canditato", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCanditato;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_canditato", type="string", length=45, nullable=false)
     */
    private $nomeCanditato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="nascimento_canditato", type="date", nullable=false)
     */
    private $nascimentoCanditato;

    /**
     * @var string
     *
     * @ORM\Column(name="rg_candidato", type="string", length=10, nullable=false)
     */
    private $rgCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_candidato", type="string", length=15, nullable=false)
     */
    private $cpfCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="cep_canditato", type="string", length=8, nullable=false)
     */
    private $cepCanditato;

    /**
     * @var string
     *
     * @ORM\Column(name="logradouro_candidato", type="string", length=50, nullable=false)
     */
    private $logradouroCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro_canditato", type="string", length=50, nullable=false)
     */
    private $bairroCanditato;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade_candidato", type="string", length=50, nullable=false)
     */
    private $cidadeCandidato;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_canditato", type="string", length=5, nullable=false)
     */
    private $estadoCanditato;

    /**
     * @var string
     *
     * @ORM\Column(name="pais_candidato", type="string", length=5, nullable=false)
     */
    private $paisCandidato;

    /**
     * @var \ExperienciaProfissional
     *
     * @ORM\ManyToOne(targetEntity="ExperienciaProfissional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="experiencia_profissional_id_experiencia_profissional", referencedColumnName="id_experiencia_profissional")
     * })
     */
    private $experienciaProfissionalExperienciaProfissional;

    /**
     * @var \Profissao
     *
     * @ORM\ManyToOne(targetEntity="Profissao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profissao_id_profissao", referencedColumnName="id_profissao")
     * })
     */
    private $profissaoProfissao;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PosGraduacao", inversedBy="canditatoCanditato")
     * @ORM\JoinTable(name="canditato_tem_pos_graduacao",
     *   joinColumns={
     *     @ORM\JoinColumn(name="canditato_id_canditato", referencedColumnName="id_canditato")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="pos_graduacao_id_pos_graduacao", referencedColumnName="id_pos_graduacao")
     *   }
     * )
     */
    private $posGraduacaoPosGraduacao;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="CandidatoTemTrabalho", mappedBy="candidatoCandidato", cascade={"all"})
     */
    private $candidatoTemTrabalho;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->posGraduacaoPosGraduacao = new \Doctrine\Common\Collections\ArrayCollection();
        $this->candidatoTemTrabalho = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idCanditato
     *
     * @return integer 
     */
    public function getIdCanditato()
    {
        return $this->idCanditato;
    }

    /**
     * Set nomeCanditato
     *
     * @param string $nomeCanditato
     * @return Canditato
     */
    public function setNomeCanditato($nomeCanditato)
    {
        $this->nomeCanditato = $nomeCanditato;

        return $this;
    }

    /**
     * Get nomeCanditato
     *
     * @return string 
     */
    public function getNomeCanditato()
    {
        return $this->nomeCanditato;
    }

    /**
     * Set nascimentoCanditato
     *
     * @param \DateTime $nascimentoCanditato
     * @return Canditato
     */
    public function setNascimentoCanditato($nascimentoCanditato)
    {
        $this->nascimentoCanditato = $nascimentoCanditato;

        return $this;
    }

    /**
     * Get nascimentoCanditato
     *
     * @return \DateTime 
     */
    public function getNascimentoCanditato()
    {
        return $this->nascimentoCanditato;
    }

    /**
     * Set rgCandidato
     *
     * @param string $rgCandidato
     * @return Canditato
     */
    public function setRgCandidato($rgCandidato)
    {
        $this->rgCandidato = $rgCandidato;

        return $this;
    }

    /**
     * Get rgCandidato
     *
     * @return string 
     */
    public function getRgCandidato()
    {
        return $this->rgCandidato;
    }

    /**
     * Set cpfCandidato
     *
     * @param string $cpfCandidato
     * @return Canditato
     */
    public function setCpfCandidato($cpfCandidato)
    {
        $this->cpfCandidato = $cpfCandidato;

        return $this;
    }

    /**
     * Get cpfCandidato
     *
     * @return string 
     */
    public function getCpfCandidato()
    {
        return $this->cpfCandidato;
    }

    /**
     * Set cepCanditato
     *
     * @param string $cepCanditato
     * @return Canditato
     */
    public function setCepCanditato($cepCanditato)
    {
        $this->cepCanditato = $cepCanditato;

        return $this;
    }

    /**
     * Get cepCanditato
     *
     * @return string 
     */
    public function getCepCanditato()
    {
        return $this->cepCanditato;
    }

    /**
     * Set logradouroCandidato
     *
     * @param string $logradouroCandidato
     * @return Canditato
     */
    public function setLogradouroCandidato($logradouroCandidato)
    {
        $this->logradouroCandidato = $logradouroCandidato;

        return $this;
    }

    /**
     * Get logradouroCandidato
     *
     * @return string 
     */
    public function getLogradouroCandidato()
    {
        return $this->logradouroCandidato;
    }

    /**
     * Set bairroCanditato
     *
     * @param string $bairroCanditato
     * @return Canditato
     */
    public function setBairroCanditato($bairroCanditato)
    {
        $this->bairroCanditato = $bairroCanditato;

        return $this;
    }

    /**
     * Get bairroCanditato
     *
     * @return string 
     */
    public function getBairroCanditato()
    {
        return $this->bairroCanditato;
    }

    /**
     * Set cidadeCandidato
     *
     * @param string $cidadeCandidato
     * @return Canditato
     */
    public function setCidadeCandidato($cidadeCandidato)
    {
        $this->cidadeCandidato = $cidadeCandidato;

        return $this;
    }

    /**
     * Get cidadeCandidato
     *
     * @return string 
     */
    public function getCidadeCandidato()
    {
        return $this->cidadeCandidato;
    }

    /**
     * Set estadoCanditato
     *
     * @param string $estadoCanditato
     * @return Canditato
     */
    public function setEstadoCanditato($estadoCanditato)
    {
        $this->estadoCanditato = $estadoCanditato;

        return $this;
    }

    /**
     * Get estadoCanditato
     *
     * @return string 
     */
    public function getEstadoCanditato()
    {
        return $this->estadoCanditato;
    }

    /**
     * Set paisCandidato
     *
     * @param string $paisCandidato
     * @return Canditato
     */
    public function setPaisCandidato($paisCandidato)
    {
        $this->paisCandidato = $paisCandidato;

        return $this;
    }

    /**
     * Get paisCandidato
     *
     * @return string 
     */
    public function getPaisCandidato()
    {
        return $this->paisCandidato;
    }

    /**
     * Set experienciaProfissionalExperienciaProfissional
     *
     * @param \Serbinario\Bundle\UCHIBundle\Entity\ExperienciaProfissional $experienciaProfissionalExperienciaProfissional
     * @return Canditato
     */
    public function setExperienciaProfissionalExperienciaProfissional(\Serbinario\Bundle\UCHIBundle\Entity\ExperienciaProfissional $experienciaProfissionalExperienciaProfissional = null)
    {
        $this->experienciaProfissionalExperienciaProfissional = $experienciaProfissionalExperienciaProfissional;

        return $this;
    }

    /**
     * Get experienciaProfissionalExperienciaProfissional
     *
     * @return \Serbinario\Bundle\UCHIBundle\Entity\ExperienciaProfissional 
     */
    public function getExperienciaProfissionalExperienciaProfissional()
    {
        return $this->experienciaProfissionalExperienciaProfissional;
    }

    /**
     * Set profissaoProfissao
     *
     * @param \Serbinario\Bundle\UCHIBundle\Entity\Profissao $profissaoProfissao
     * @return Canditato
     */
    public function setProfissaoProfissao(\Serbinario\Bundle\UCHIBundle\Entity\Profissao $profissaoProfissao = null)
    {
        $this->profissaoProfissao = $profissaoProfissao;

        return $this;
    }

    /**
     * Get profissaoProfissao
     *
     * @return \Serbinario\Bundle\UCHIBundle\Entity\Profissao 
     */
    public function getProfissaoProfissao()
    {
        return $this->profissaoProfissao;
    }

    /**
     * Add posGraduacaoPosGraduacao
     *
     * @param \Serbinario\Bundle\UCHIBundle\Entity\PosGraduacao $posGraduacaoPosGraduacao
     * @return Canditato
     */
    public function addPosGraduacaoPosGraduacao(\Serbinario\Bundle\UCHIBundle\Entity\PosGraduacao $posGraduacaoPosGraduacao)
    {
        $this->posGraduacaoPosGraduacao[] = $posGraduacaoPosGraduacao;

        return $this;
    }

    /**
     * Remove posGraduacaoPosGraduacao
     *
     * @param \Serbinario\Bundle\UCHIBundle\Entity\PosGraduacao $posGraduacaoPosGraduacao
     */
    public function removePosGraduacaoPosGraduacao(\Serbinario\Bundle\UCHIBundle\Entity\PosGraduacao $posGraduacaoPosGraduacao)
    {
        $this->posGraduacaoPosGraduacao->removeElement($posGraduacaoPosGraduacao);
    }

    /**
     * Get posGraduacaoPosGraduacao
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPosGraduacaoPosGraduacao()
    {
        return $this->posGraduacaoPosGraduacao;
    }

    /**
     * Add trabalhoTrabalho
     *
     * @param \Serbinario\Bundle\UCHIBundle\Entity\CandidatoTemTrabalho $candidatoTemTrabalho
     * @return Canditato
     */
    public function addCandidatoTemTrabalho(\Serbinario\Bundle\UCHIBundle\Entity\CandidatoTemTrabalho $candidatoTemTrabalho)
    {
        $candidatoTemTrabalho->setCandidatoCandidato($this);
        
        $this->candidatoTemTrabalho[] = $candidatoTemTrabalho;

        return $this;
    }

    /**
     * Remove trabalhoTrabalho
     *
     * @param \Serbinario\Bundle\UCHIBundle\Entity\Trabalho $candidatoTemTrabalho
     */
    public function removeCandidatoTemTrabalho(\Serbinario\Bundle\UCHIBundle\Entity\CandidatoTemTrabalho $candidatoTemTrabalho)
    {
        $this->candidatoTemTrabalho->removeElement($candidatoTemTrabalho);
    }

    /**
     * Get trabalhoTrabalho
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCandidatoTemTrabalho()
    {
        return $this->candidatoTemTrabalho->toArray();
    }
}
