<?php
namespace Serbinario\Bundle\UCHIBundle\RN;

use Serbinario\Bundle\UCHIBundle\DAO\CandidatoDAO;
use Serbinario\Bundle\UCHIBundle\Entity\Candidato;

/**
 * Description of Candidato
 *
 * @author serbinario
 */
class CandidatoRN
{
    /**
     *
     * @var type 
     */
    private $cbo;
    
    /**
     * 
     * @param CandidatoDAO $cbo
     */
    public function __construct(CandidatoDAO $cbo) 
    {
        $this->cbo = $cbo;
    }
    
    /**
     * 
     * @param Candidato $entity
     * @return type
     */
    public function save(Candidato $entity)
    {
        $result = $this->cbo->save($entity);
        
        return $result;
    }
    
    /**
     * 
     * @param Candidato $entity
     * @return type
     */
    public function update(Candidato $entity)
    {
        $result = $this->cbo->update($entity);
        
        return $result;
    }
    
    /**
     * 
     * @param type $id
     * @return type
     */
    public function find($id)
    {        
        $result = $this->cbo->find($id);
        
        return $result;
    }
    
    /**
     * 
     * @return type
     */
    public function all()
    {
        $result = $this->cbo->all();
        
        return $result;
    }
}
