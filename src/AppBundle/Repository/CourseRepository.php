<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CourseRepository
 *
 * 
 */
class CourseRepository extends EntityRepository
{
    // Find all courses, used for start page
    public function findAllOrderedByName()
    {
        try {
            return $this->getEntityManager()
                ->createQuery(
                    'SELECT course.name, course.targetGroup, course.booked, course.availablePlaces, course.id 
                    FROM AppBundle:Course course ORDER BY course.kursname ASC'
                )
                ->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
    }
}


    public function findCoursesByCategoryId($categoryId)
    {
        $query = $this->getEntityManager()
            ->createQuery(
                'SELECT course, category, dates, user
                FROM AppBundle:Course course
                JOIN course.category category
                JOIN course.dates dates
                JOIN course.user user
                WHERE category.id = :id'
            )
            ->setParameter('id', $categoryId);

        try {
            return $query->getResult();      
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

    public function findCoursesByUserId($userId)
    {
        $query = $this->getEntityManager()
            ->createQuery(
                'SELECT course, user, dates
                FROM AppBundle:Course course
                JOIN course.user user
                JOIN course.dates dates
                WHERE user.id = :id'
            )
            ->setParameter('id', $userId);

        try {
            return $query->getResult();      
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
}