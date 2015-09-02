<?php
namespace Serbinario\Bundle\UCHIBundle\DAO;

use Serbinario\Bundle\UCHIBundle\Entity\Hanking;
use Doctrine\ORM\EntityManager;

/**
 * Description of RankingDAO
 *
 * @author serbinario
 */
class RankingDAO 
{
    /**
     *
     * @var Doctrine\ORM\EntityManager
     */
    private $manager;
    
    /**
     * 
     * @param EntityManager $manager
     */
    public function __construct(EntityManager $manager) 
    {
        $this->manager = $manager;
    }
    
    /**
     * 
     * @param Hanking $entity
     * @return boolean|Hanking
     */
    public function save(Hanking $entity)
    {
        try {
            $this->manager->persist($entity);
            $this->manager->flush();
            
            return $entity;
        } catch (Exception $ex) {
            return false;
        }
    }
    
    /**
     * 
     * @param Hanking $entity
     * @return boolean|Hanking
     */
    public function update(Hanking $entity)
    {
        try {
            $this->manager->merge($entity);
            $this->manager->flush();
            
            return $entity;
        } catch (Exception $ex) {
            return false;
        }
    }
    
    /**
     * 
     * @param type $id
     * @return type
     */
    public function find($id)
    {
        try {
            $obj = $this->manager->getRepository("Serbinario\Bundle\UCHIBundle\Entity\Hanking")->find($id);
        
            return $obj;
        } catch (Exception $ex) {
            return null;
        }
    }
    
    /**
     * 
     * @return type
     */
    public function all()
    {
        try {
            $arrayObj = $this->manager->getRepository("Serbinario\Bundle\UCHIBundle\Entity\Hanking")->findAll();

            return $arrayObj;
        } catch (Exception $ex) {
            return null;
        }
    }
}
