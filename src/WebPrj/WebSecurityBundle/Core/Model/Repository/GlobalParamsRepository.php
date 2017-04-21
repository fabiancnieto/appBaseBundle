<?php

namespace WebPrj\WebSecurityBundle\Core\Model\Repository;

use Doctrine\ORM\EntityRepository;
use WebPrj\WebSecurityBundle\Core\Model\GlobalParamsInterface;
use WebPrj\WebSecurityBundle\Core\Model\Entity\GlobalParams;

class GlobalParamsRepository extends EntityRepository implements GlobalParamsInterface
{
    public function add(GlobalParams $register)
    {
        if($register->getId() == null) {
            $this->getEntityManager()->persist($register);
        }

        $this->getEntityManager()->flush();
    }

    public function edit(GlobalParams $register)
    {
        if($register->getId() == null) {
            $this->getEntityManager()->merge($register);
        }

        $this->getEntityManager()->flush();
    }

    public function remove(GlobalParams $register)
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
