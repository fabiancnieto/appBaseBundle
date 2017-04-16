<?php

namespace WebPrj\WebSecurityBundle\Core\Model\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Action
 *
 * @ORM\Table(name="action")
 * @ORM\Entity
 */
class Action
{
    /**
     * @var integer
     *
     * @ORM\Column(name="action_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $actionId;

    /**
     * @var string
     *
     * @ORM\Column(name="name_action", type="string", length=150, nullable=false)
     */
    private $nameAction;



    /**
     * Get actionId
     *
     * @return integer
     */
    public function getActionId()
    {
        return $this->actionId;
    }

    /**
     * Set nameAction
     *
     * @param string $nameAction
     *
     * @return Action
     */
    public function setNameAction($nameAction)
    {
        $this->nameAction = $nameAction;

        return $this;
    }

    /**
     * Get nameAction
     *
     * @return string
     */
    public function getNameAction()
    {
        return $this->nameAction;
    }
}
