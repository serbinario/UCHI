<?php
namespace Serbinario\Bundle\UCHIBundle\RN;

use Serbinario\Bundle\UCHIBundle\DAO\CandidatoDAO;
use Serbinario\Bundle\UCHIBundle\Entity\Canditato;

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
     * @param Canditato $entity
     * @return type
     */
    public function save(Canditato $entity)
    {
        $result = $this->cbo->save($entity);
        
        return $result;
    }
    
    /**
     * 
     * @param Canditato $entity
     * @return type
     */
    public function update(Canditato $entity)
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
    
    /**
     * 
     * @param type $id
     * @return type
     */
    public function deleteFromForm($id)
    {
        $result = $this->cbo->deleteFromForm($id);
        
        return $result;
    }
}
