<?php

namespace WebPrj\WebSecurityBundle\Core\Model\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * PageActions
 *
 * @ORM\Table(name="page_actions", indexes={@ORM\Index(name="fk_pageactions_page_idx", columns={"page_id"}), @ORM\Index(name="fk_pageactions_action_idx", columns={"action_id"})})
 * @ORM\Entity(repositoryClass="WebPrj\WebSecurityBundle\Core\Model\Repository\PageActionsRepository")
 */
class PageActions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="page_actions_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pageActionsId;

    /**
     * @var \WebPrj\WebSecurityBundle\Core\Model\Entity\Action
     *
     * @ORM\ManyToOne(targetEntity="WebPrj\WebSecurityBundle\Core\Model\Entity\Action", inversedBy="pageActions", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_id", referencedColumnName="action_id")
     * })
     */
    private $action;

    /**
     * @var \WebPrj\WebSecurityBundle\Core\Model\Entity\Page
     *
     * @ORM\ManyToOne(targetEntity="WebPrj\WebSecurityBundle\Core\Model\Entity\Page", inversedBy="pageActions", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="page_id", referencedColumnName="page_id")
     * })
     */
    private $page;

    /**
     * @ORM\OneToMany(targetEntity="WebPrj\WebSecurityBundle\Core\Model\Entity\ProfilePageActions", mappedBy="pageActions", cascade={"persist"})
     */
    private $profilePageActions;


    public function __construct()
    {
        $this->profilePageActions = new ArrayCollection();
    }

    /**
     * Get pageActionsId
     *
     * @return integer
     */
    public function getPageActionsId()
    {
        return $this->pageActionsId;
    }

    /**
     * Set action
     *
     * @param \WebPrj\WebSecurityBundle\Core\Model\Entity\Action $action
     *
     * @return PageActions
     */
    public function setAction(\WebPrj\WebSecurityBundle\Core\Model\Entity\Action $action = null)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return \WebPrj\WebSecurityBundle\Core\Model\Entity\Action
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set page
     *
     * @param \WebPrj\WebSecurityBundle\Core\Model\Entity\Page $page
     *
     * @return PageActions
     */
    public function setPage(\WebPrj\WebSecurityBundle\Core\Model\Entity\Page $page = null)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return \WebPrj\WebSecurityBundle\Core\Model\Entity\Page
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Get Id Standart funtion that allow to get The identifier for this Entity
     *
     * @return integer
     */
    public function getId()
    {
        return $this->getPageActionsId();
    }
}
