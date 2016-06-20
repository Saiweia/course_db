<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CategoryRepository
 *
 * 
 */
class CategoryRepository extends EntityRepository
{
      // used for navigation
    public function getAllCategories()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT category FROM AppBundle:Category category'
            )
            ->getResult();
    }

    public function getCategoryById($categoryId)
    {
        try {
            return $this->getEntityManager()
            ->createQuery(
                'SELECT category
                FROM AppBundle:Category category
                WHERE category.id = :id'   
            )->setParameter('id', $categoryId)
             ->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

   

}

 
