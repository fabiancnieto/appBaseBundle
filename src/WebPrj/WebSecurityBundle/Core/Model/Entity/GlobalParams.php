<?php

namespace WebPrj\WebSecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GlobalParams
 *
 * @ORM\Table(name="global_params")
 * @ORM\Entity
 */
class GlobalParams
{
    /**
     * @var integer
     *
     * @ORM\Column(name="global_param_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $globalParamId;

    /**
     * @var string
     *
     * @ORM\Column(name="str_val_global_param", type="string", length=45, nullable=true)
     */
    private $strValGlobalParam;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_val_global_param", type="integer", nullable=true)
     */
    private $numValGlobalParam;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_global_param", type="string", length=150, nullable=true)
     */
    private $descGlobalParam;

    /**
     * @var integer
     *
     * @ORM\Column(name="module_global_param", type="integer", nullable=false)
     */
    private $moduleGlobalParam;

    /**
     * @var integer
     *
     * @ORM\Column(name="state_global_param", type="integer", nullable=false)
     */
    private $stateGlobalParam;



    /**
     * Get globalParamId
     *
     * @return integer
     */
    public function getGlobalParamId()
    {
        return $this->globalParamId;
    }

    /**
     * Set strValGlobalParam
     *
     * @param string $strValGlobalParam
     *
     * @return GlobalParams
     */
    public function setStrValGlobalParam($strValGlobalParam)
    {
        $this->strValGlobalParam = $strValGlobalParam;

        return $this;
    }

    /**
     * Get strValGlobalParam
     *
     * @return string
     */
    public function getStrValGlobalParam()
    {
        return $this->strValGlobalParam;
    }

    /**
     * Set numValGlobalParam
     *
     * @param integer $numValGlobalParam
     *
     * @return GlobalParams
     */
    public function setNumValGlobalParam($numValGlobalParam)
    {
        $this->numValGlobalParam = $numValGlobalParam;

        return $this;
    }

    /**
     * Get numValGlobalParam
     *
     * @return integer
     */
    public function getNumValGlobalParam()
    {
        return $this->numValGlobalParam;
    }

    /**
     * Set descGlobalParam
     *
     * @param string $descGlobalParam
     *
     * @return GlobalParams
     */
    public function setDescGlobalParam($descGlobalParam)
    {
        $this->descGlobalParam = $descGlobalParam;

        return $this;
    }

    /**
     * Get descGlobalParam
     *
     * @return string
     */
    public function getDescGlobalParam()
    {
        return $this->descGlobalParam;
    }

    /**
     * Set moduleGlobalParam
     *
     * @param integer $moduleGlobalParam
     *
     * @return GlobalParams
     */
    public function setModuleGlobalParam($moduleGlobalParam)
    {
        $this->moduleGlobalParam = $moduleGlobalParam;

        return $this;
    }

    /**
     * Get moduleGlobalParam
     *
     * @return integer
     */
    public function getModuleGlobalParam()
    {
        return $this->moduleGlobalParam;
    }

    /**
     * Set stateGlobalParam
     *
     * @param integer $stateGlobalParam
     *
     * @return GlobalParams
     */
    public function setStateGlobalParam($stateGlobalParam)
    {
        $this->stateGlobalParam = $stateGlobalParam;

        return $this;
    }

    /**
     * Get stateGlobalParam
     *
     * @return integer
     */
    public function getStateGlobalParam()
    {
        return $this->stateGlobalParam;
    }
}
