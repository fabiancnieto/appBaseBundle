<?php

namespace WebPrj\WebSecurityBundle\Core\Model\Repository;

use Doctrine\ORM\EntityRepository;
use WebPrj\WebSecurityBundle\Core\Model\PageActionsInterface;
use WebPrj\WebSecurityBundle\Core\Model\Entity\PageActions;

class PageActionsRepository extends EntityRepository implements PageActionsInterface
{
    public function add(PageActions $register)
    {
        if($register->getId() == null) {
            $this->getEntityManager()->persist($register);
        }

        $this->getEntityManager()->flush();
    }

    public function edit(PageActions $register)
    {
        if($register->getId() == null) {
            $this->getEntityManager()->merge($register);
        }

        $this->getEntityManager()->flush();
    }

    public function remove(PageActions $register)
    {
        if($register->getId() == null) {
            $this->getEntityManager()->remove($register);
        }

        $this->getEntityManager()->flush();
    }

    public function getAll()
    {
        return parent::findAll();
    }

    public function getBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
    {
        return parent::findBy($criteria, $orderBy, $limit, $offset);
    }
}
