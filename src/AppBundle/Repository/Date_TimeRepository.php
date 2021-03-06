<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Date_TimeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Date_TimeRepository extends EntityRepository
{
    public function getAllCourseDates($courseId)
    {
        try {
            return $this->getEntityManager()
            ->createQuery(
                'SELECT dates
                FROM AppBundle:Date_Time dates
                WHERE dates.course_id = :id'   
            )->setParameter('id', $courseId)
             ->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

    public function getFirstCourseDate($courseId)
    {
        try {
            return $this->getEntityManager()
            ->createQuery(
                'SELECT dates
                FROM AppBundle:Date_Time dates
                WHERE dates.course_id = :id'   
            )->setParameter('id', $courseId)
             ->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

}
