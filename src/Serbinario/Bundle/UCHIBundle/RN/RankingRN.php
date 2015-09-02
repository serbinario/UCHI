<?php
namespace Serbinario\Bundle\UCHIBundle\RN;

use Serbinario\Bundle\UCHIBundle\DAO\RankingDAO;
use Serbinario\Bundle\UCHIBundle\Entity\Hanking;

/**
 * Description of RankingRN
 *
 * @author serbinario
 */
class RankingRN 
{
    /**
     *
     * @var type 
     */
    private $cbo;
    
    /**
     * 
     * @param RankingDAO $cbo
     */
    public function __construct(RankingDAO $cbo) 
    {
        $this->cbo = $cbo;
    }
    
    /**
     * 
     * @param Hanking $entity
     * @return type
     */
    public function save(Hanking $entity)
    {
        $result = $this->cbo->save($entity);
        
        return $result;
    }
    
    /**
     * 
     * @param Hanking $entity
     * @return type
     */
    public function update(Hanking $entity)
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
