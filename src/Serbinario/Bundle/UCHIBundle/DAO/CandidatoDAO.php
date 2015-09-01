<?php
namespace Serbinario\Bundle\UCHIBundle\DAO;

use Doctrine\ORM\EntityManager;
use Serbinario\Bundle\UCHIBundle\Entity\Candidato;

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
     * @param Candidato $entity
     * @return boolean|Candidato
     */
    public function save(Candidato $entity)
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
     * @param Candidato $entity
     * @return boolean|Candidato
     */
    public function update(Candidato $entity)
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
            $obj = $this->manager->getRepository("Serbinario\Bundle\UCHIBundle\Entity\Candidato")->find($id);
        
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
            $arrayObj = $this->manager->getRepository("Serbinario\Bundle\UCHIBundle\Entity\Candidato");

            return $arrayObj;
        } catch (Exception $ex) {
            return null;
        }
    } 
}
