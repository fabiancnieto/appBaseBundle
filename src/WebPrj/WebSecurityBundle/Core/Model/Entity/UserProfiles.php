<?php

namespace WebPrj\WebSecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserProfiles
 *
 * @ORM\Table(name="user_profiles", indexes={@ORM\Index(name="fk_userprofiles_user_idx", columns={"user_id"}), @ORM\Index(name="fk_userprofiles_profile_idx", columns={"profile_id"})})
 * @ORM\Entity
 */
class UserProfiles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_profile_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userProfileId;

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
     * @var \WebPrj\WebSecurityBundle\Entity\Profile
     *
     * @ORM\ManyToOne(targetEntity="WebPrj\WebSecurityBundle\Entity\Profile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profile_id", referencedColumnName="profile_id")
     * })
     */
    private $profile;

    /**
     * @var \WebPrj\WebSecurityBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="WebPrj\WebSecurityBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;



    /**
     * Get userProfileId
     *
     * @return integer
     */
    public function getUserProfileId()
    {
        return $this->userProfileId;
    }

    /**
     * Set userIdCreate
     *
     * @param integer $userIdCreate
     *
     * @return UserProfiles
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
     * @return UserProfiles
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
     * Set profile
     *
     * @param \WebPrj\WebSecurityBundle\Entity\Profile $profile
     *
     * @return UserProfiles
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

    /**
     * Set user
     *
     * @param \WebPrj\WebSecurityBundle\Entity\User $user
     *
     * @return UserProfiles
     */
    public function setUser(\WebPrj\WebSecurityBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \WebPrj\WebSecurityBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
