<?php

namespace WebPrj\WebSecurityBundle\Core\Model\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * LoginRecord
 *
 * @ORM\Table(name="login_record", indexes={@ORM\Index(name="fk_loginrecord_user_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class LoginRecord
{
    /**
     * @var integer
     *
     * @ORM\Column(name="login_record_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $loginRecordId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="login_record_date", type="datetime", nullable=false)
     */
    private $loginRecordDate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="login_record_ip", type="string", length=250, nullable=true)
     */
    private $loginRecordIp;

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
     * Get loginRecordId
     *
     * @return integer
     */
    public function getLoginRecordId()
    {
        return $this->loginRecordId;
    }

    /**
     * Set loginRecordDate
     *
     * @param \DateTime $loginRecordDate
     *
     * @return LoginRecord
     */
    public function setLoginRecordDate($loginRecordDate)
    {
        $this->loginRecordDate = $loginRecordDate;

        return $this;
    }

    /**
     * Get loginRecordDate
     *
     * @return \DateTime
     */
    public function getLoginRecordDate()
    {
        return $this->loginRecordDate;
    }

    /**
     * Set loginRecordIp
     *
     * @param string $loginRecordIp
     *
     * @return LoginRecord
     */
    public function setLoginRecordIp($loginRecordIp)
    {
        $this->loginRecordIp = $loginRecordIp;

        return $this;
    }

    /**
     * Get loginRecordIp
     *
     * @return string
     */
    public function getLoginRecordIp()
    {
        return $this->loginRecordIp;
    }

    /**
     * Set user
     *
     * @param \WebPrj\WebSecurityBundle\Entity\User $user
     *
     * @return LoginRecord
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
