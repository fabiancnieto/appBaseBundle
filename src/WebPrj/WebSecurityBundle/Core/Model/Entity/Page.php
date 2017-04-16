<?php

namespace WebPrj\WebSecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table(name="page")
 * @ORM\Entity
 */
class Page
{
    /**
     * @var integer
     *
     * @ORM\Column(name="page_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pageId;

    /**
     * @var string
     *
     * @ORM\Column(name="name_page", type="string", length=150, nullable=false)
     */
    private $namePage;

    /**
     * @var string
     *
     * @ORM\Column(name="str_name_page", type="string", length=45, nullable=true)
     */
    private $strNamePage;

    /**
     * @var integer
     *
     * @ORM\Column(name="app_id", type="integer", nullable=false)
     */
    private $appId = '1';



    /**
     * Get pageId
     *
     * @return integer
     */
    public function getPageId()
    {
        return $this->pageId;
    }

    /**
     * Set namePage
     *
     * @param string $namePage
     *
     * @return Page
     */
    public function setNamePage($namePage)
    {
        $this->namePage = $namePage;

        return $this;
    }

    /**
     * Get namePage
     *
     * @return string
     */
    public function getNamePage()
    {
        return $this->namePage;
    }

    /**
     * Set strNamePage
     *
     * @param string $strNamePage
     *
     * @return Page
     */
    public function setStrNamePage($strNamePage)
    {
        $this->strNamePage = $strNamePage;

        return $this;
    }

    /**
     * Get strNamePage
     *
     * @return string
     */
    public function getStrNamePage()
    {
        return $this->strNamePage;
    }

    /**
     * Set appId
     *
     * @param integer $appId
     *
     * @return Page
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;

        return $this;
    }

    /**
     * Get appId
     *
     * @return integer
     */
    public function getAppId()
    {
        return $this->appId;
    }
}
