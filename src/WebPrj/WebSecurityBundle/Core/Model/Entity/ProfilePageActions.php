<?php

namespace WebPrj\WebSecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfilePageActions
 *
 * @ORM\Table(name="profile_page_actions", indexes={@ORM\Index(name="fk_profilepageactions_profile_idx", columns={"profile_id"}), @ORM\Index(name="fk_profilepageactions_pageactions_idx", columns={"page_actions_id"})})
 * @ORM\Entity
 */
class ProfilePageActions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="profile_page_actions_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $profilePageActionsId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id_create", type="integer", nullable=true)
     */
    private $userIdCreate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    private $dateCreated = 'CURRENT_TIMESTAMP';

    /**
     * @var \WebPrj\WebSecurityBundle\Entity\PageActions
     *
     * @ORM\ManyToOne(targetEntity="WebPrj\WebSecurityBundle\Entity\PageActions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="page_actions_id", referencedColumnName="page_actions_id")
     * })
     */
    private $pageActions;

    /**
     * @var \WebPrj\WebSecurityBundle\Entity\Profile
     *
     * @ORM\ManyToOne(targetEntity="WebPrj\WebSecurityBundle\Entity\Profile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profile_id", referencedColumnName="profile_id")
     * })
     */
    private $profile;



    /**
     * Get profilePageActionsId
     *
     * @return integer
     */
    public function getProfilePageActionsId()
    {
        return $this->profilePageActionsId;
    }

    /**
     * Set userIdCreate
     *
     * @param integer $userIdCreate
     *
     * @return ProfilePageActions
     */
    public function setUserIdCreate($userIdCreate)
    {
        $this->userIdCreate = $userIdCreate;

        return $this;
    }

    /**
     * Get userIdCreate
     *
     * @return integer
     */
    public function getUserIdCreate()
    {
        return $this->userIdCreate;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return ProfilePageActions
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set pageActions
     *
     * @param \WebPrj\WebSecurityBundle\Entity\PageActions $pageActions
     *
     * @return ProfilePageActions
     */
    public function setPageActions(\WebPrj\WebSecurityBundle\Entity\PageActions $pageActions = null)
    {
        $this->pageActions = $pageActions;

        return $this;
    }

    /**
     * Get pageActions
     *
     * @return \WebPrj\WebSecurityBundle\Entity\PageActions
     */
    public function getPageActions()
    {
        return $this->pageActions;
    }

    /**
     * Set profile
     *
     * @param \WebPrj\WebSecurityBundle\Entity\Profile $profile
     *
     * @return ProfilePageActions
     */
    public function setProfile(\WebPrj\WebSecurityBundle\Entity\Profile $profile = null)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return \WebPrj\WebSecurityBundle\Entity\Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }
}
