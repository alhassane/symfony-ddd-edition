<?php

namespace Dschini\Blog\DomainBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostRepository extends EntityRepository implements PostRepositoryInterface
{
    /**
     * @return null|object
     */
    public function fetchLatest(){
        return $this->findOneBy(array(),array('id'=>'ASC'));
    }
}