<?php

namespace WebPrj\WebSecurityBundle\Core\Model\Dto;

use WebPrj\WebSecurityBundle\Core\Model\Entity\Action;

class ActionDto
{
    /**
     * @var integer
     */
    private $actionId;

    /**
     * @var string
     */
    private $nameAction;


    /**
     * Construct
     *
     * @return Action
     */
    public function _construct($aParams)
    {
        $this->actionId = $aParams["actionId"];
        $this->nameAction = $aParams["nameAction"];
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
     * getEntityFromDto
     *
     * @return Action
     */
    public function getEntityFromDto(ActionDto $register)
    {
        return $this->nameAction;
    }
}