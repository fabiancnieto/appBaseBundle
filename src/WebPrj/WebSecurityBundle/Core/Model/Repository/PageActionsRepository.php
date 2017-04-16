<?php

namespace WebPrj\WebSecurityBundle\Core\Model\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PageActions
 *
 * @ORM\Table(name="page_actions", indexes={@ORM\Index(name="fk_pageactions_page_idx", columns={"page_id"}), @ORM\Index(name="fk_pageactions_action_idx", columns={"action_id"})})
 * @ORM\Entity
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
     * @var \WebPrj\WebSecurityBundle\Entity\Action
     *
     * @ORM\ManyToOne(targetEntity="WebPrj\WebSecurityBundle\Entity\Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action_id", referencedColumnName="action_id")
     * })
     */
    private $action;

    /**
     * @var \WebPrj\WebSecurityBundle\Entity\Page
     *
     * @ORM\ManyToOne(targetEntity="WebPrj\WebSecurityBundle\Entity\Page")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="page_id", referencedColumnName="page_id")
     * })
     */
    private $page;



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
     * @param \WebPrj\WebSecurityBundle\Entity\Action $action
     *
     * @return PageActions
     */
    public function setAction(\WebPrj\WebSecurityBundle\Entity\Action $action = null)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return \WebPrj\WebSecurityBundle\Entity\Action
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set page
     *
     * @param \WebPrj\WebSecurityBundle\Entity\Page $page
     *
     * @return PageActions
     */
    public function setPage(\WebPrj\WebSecurityBundle\Entity\Page $page = null)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return \WebPrj\WebSecurityBundle\Entity\Page
     */
    public function getPage()
    {
        return $this->page;
    }
}
