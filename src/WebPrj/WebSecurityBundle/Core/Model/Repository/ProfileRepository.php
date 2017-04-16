<?php

namespace WebPrj\WebSecurityBundle\Core\Model\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Profile
 *
 * @ORM\Table(name="profile")
 * @ORM\Entity
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
     */
    private $descProfile;

    /**
     * @var integer
     *
     * @ORM\Column(name="app_id", type="integer", nullable=false)
     */
    private $appId = '1';



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
}
