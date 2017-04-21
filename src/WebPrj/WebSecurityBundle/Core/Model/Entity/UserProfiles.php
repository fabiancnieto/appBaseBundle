<?php

namespace WebPrj\WebSecurityBundle\Core\Model\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * UserProfiles
 *
 * @ORM\Table(name="user_profiles", indexes={@ORM\Index(name="fk_userprofiles_user_idx", columns={"user_id"}), @ORM\Index(name="fk_userprofiles_profile_idx", columns={"profile_id"})})
 * @ORM\Entity(repositoryClass="WebPrj\WebSecurityBundle\Core\Model\Repository\UserProfilesRepository")
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
    private $dateCreated;

    /**
     * @var \WebPrj\WebSecurityBundle\Core\Model\Entity\Profile
     *
     * @ORM\ManyToOne(targetEntity="WebPrj\WebSecurityBundle\Core\Model\Entity\Profile", inversedBy="userProfiles", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profile_id", referencedColumnName="profile_id")
     * })
     */
    private $profile;

    /**
     * @var \WebPrj\WebSecurityBundle\Core\Model\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="WebPrj\WebSecurityBundle\Core\Model\Entity\User", inversedBy="userProfiles", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;


    public function __construct()
    {
        $this->dateCreated = new \DateTime();
    }

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
     * @param \WebPrj\WebSecurityBundle\Core\Model\Entity\Profile $profile
     *
     * @return UserProfiles
     */
    public function setProfile(\WebPrj\WebSecurityBundle\Core\Model\Entity\Profile $profile = null)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return \WebPrj\WebSecurityBundle\Core\Model\Entity\Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set user
     *
     * @param \WebPrj\WebSecurityBundle\Core\Model\Entity\User $user
     *
     * @return UserProfiles
     */
    public function setUser(\WebPrj\WebSecurityBundle\Core\Model\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \WebPrj\WebSecurityBundle\Core\Model\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Get Id Standart funtion that allow to get The identifier for this Entity
     *
     * @return integer
     */
    public function getId()
    {
        return $this->getUserProfileId();
    }
}
