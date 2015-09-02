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
    public function deleteFromForm($candidato, $id = array())
    {
        try {
            $qb = $this->manager->createQueryBuilder();
            $qb->select("a");
            $qb->from("Serbinario\Bundle\UCHIBundle\Entity\CandidatoTemTrabalho", "a");
            $qb->innerJoin("a.candidatoCandidato", "b");
            $qb->where($qb->expr()->eq("b", ":candidato"));
            $qb->setParameter("candidato", $candidato);
            
            if(count($id) > 0) {
                $qb->andWhere($qb->expr()->notIn("a.id", ":id"));
                $qb->setParameter("id", $id);
            }          
            
            $query = $qb->getQuery()->getResult();
            
            foreach($query as $result){
                $this->manager->remove($result);
            }
            
            $this->manager->flush();
            
            return true;
        } catch (Exception $ex) {
            return false;
        }
    }
}
