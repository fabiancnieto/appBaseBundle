<?php

namespace WebPrj\WebSecurityBundle\Core\Model\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Action
 *
 * @ORM\Table(name="action")
 * @ORM\Entity(repositoryClass="WebPrj\WebSecurityBundle\Core\Model\Repository\ActionRepository")
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
     * @Assert\NotBlank()
     */
    private $nameAction;

    /**
     * @ORM\OneToMany(targetEntity="WebPrj\WebSecurityBundle\Core\Model\Entity\ProfilePageActions", mappedBy="action", cascade={"persist"})
     */
    private $profilePageActions;


    public function __construct()
    {
        $this->profilePageActions = new ArrayCollection();
    }

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

    /**
     * Get Id Standart funtion that allow to get The identifier for this Entity
     *
     * @return integer
     */
    public function getId()
    {
        return $this->getActionId();
    }
}
