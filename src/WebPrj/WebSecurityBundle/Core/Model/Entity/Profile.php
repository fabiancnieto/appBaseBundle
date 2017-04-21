<?php

namespace WebPrj\WebSecurityBundle\Core\Model\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Profile
 *
 * @ORM\Table(name="profile")
 * @ORM\Entity(repositoryClass="WebPrj\WebSecurityBundle\Core\Model\Repository\ProfileRepository")
 */
class Profile
{
    /**
     * @var integer
     *
     * @ORM\Column(name="profile_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $profileId;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_profile", type="string", length=150, nullable=false)
     * @Assert\NotBlank()
     */
    private $descProfile;

    /**
     * @var integer
     *
     * @ORM\Column(name="app_id", type="integer", nullable=false)
     * @Assert\NotBlank()
     */
    private $appId = '1';

    /**
     * @ORM\OneToMany(targetEntity="WebPrj\WebSecurityBundle\Core\Model\Entity\ProfilePageActions", mappedBy="profile", cascade={"persist"})
     */
    private $profilePageActions;

    /**
     * @ORM\OneToMany(targetEntity="WebPrj\WebSecurityBundle\Core\Model\Entity\UserProfiles", mappedBy="profile", cascade={"persist"})
     */
    private $userProfiles;

    public function __construct()
    {
        $this->profilePageActions = new ArrayCollection();
        $this->userProfiles = new ArrayCollection();
    }

    /**
     * Get profileId
     *
     * @return integer
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * Set descProfile
     *
     * @param string $descProfile
     *
     * @return Profile
     */
    public function setDescProfile($descProfile)
    {
        $this->descProfile = $descProfile;

        return $this;
    }

    /**
     * Get descProfile
     *
     * @return string
     */
    public function getDescProfile()
    {
        return $this->descProfile;
    }

    /**
     * Set appId
     *
     * @param integer $appId
     *
     * @return Profile
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

    /**
     * Get Id Standart funtion that allow to get The identifier for this Entity
     *
     * @return integer
     */
    public function getId()
    {
        return $this->getProfileId();
    }
}
