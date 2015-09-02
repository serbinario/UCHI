<?php
namespace Serbinario\Bundle\UCHIBundle\DAO;

use Doctrine\ORM\EntityManager;
use Serbinario\Bundle\UCHIBundle\Entity\Canditato;

/**
 * Description of CandidatoDAO
 *
 * @author serbinario
 */
class CandidatoDAO 
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
     * @param Canditato $entity
     * @return boolean|Canditato
     */
    public function save(Canditato $entity)
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
     * @param Canditato $entity
     * @return boolean|Canditato
     */
    public function update(Canditato $entity)
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
            $obj = $this->manager->getRepository("Serbinario\Bundle\UCHIBundle\Entity\Canditato")->find($id);
        
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
            $arrayObj = $this->manager->getRepository("Serbinario\Bundle\UCHIBundle\Entity\Canditato");

            return $arrayObj;
        } catch (Exception $ex) {
            return null;
        }
    }
    
    /**
     * 
     * @param type $id
     * @return boolean
     */
    public function deleteFromForm($id)
    {
        try {
            $qb    = $this->manager->createQueryBuilder();
            $query = $qb->delete("Serbinario\Bundle\UCHIBundle\Entity\CandidatoTemTrabalho", "a")                        
                        ->where($qb->expr()->notIn("a.id", ":id"))
                        ->setParameter("id", $id);
            
            return $query->getQuery()->execute();        
        } catch (Exception $ex) {
            return false;
        }
    }
}
