<?php

namespace WebPrj\WebSecurityBundle\Core\Model\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="loginuser_UNIQUE", columns={"login_user"}), @ORM\UniqueConstraint(name="emailuser_UNIQUE", columns={"email_user"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="login_user", type="string", length=150, nullable=false)
     */
    private $loginUser;

    /**
     * @var string
     *
     * @ORM\Column(name="num_doc_user", type="string", length=40, nullable=true)
     */
    private $numDocUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_doc_user", type="integer", nullable=true)
     */
    private $typeDocUser;

    /**
     * @var string
     *
     * @ORM\Column(name="pass_user", type="string", length=150, nullable=false)
     */
    private $passUser;

    /**
     * @var string
     *
     * @ORM\Column(name="email_user", type="string", length=250, nullable=false)
     */
    private $emailUser;

    /**
     * @var string
     *
     * @ORM\Column(name="flast_name_user", type="string", length=150, nullable=false)
     */
    private $flastNameUser;

    /**
     * @var string
     *
     * @ORM\Column(name="slast_name_user", type="string", length=150, nullable=true)
     */
    private $slastNameUser;

    /**
     * @var string
     *
     * @ORM\Column(name="name_user", type="string", length=150, nullable=false)
     */
    private $nameUser;

    /**
     * @var string
     *
     * @ORM\Column(name="mid_name_user", type="string", length=150, nullable=true)
     */
    private $midNameUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_user", type="integer", nullable=false)
     */
    private $statusUser = '1';

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
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set loginUser
     *
     * @param string $loginUser
     *
     * @return User
     */
    public function setLoginUser($loginUser)
    {
        $this->loginUser = $loginUser;

        return $this;
    }

    /**
     * Get loginUser
     *
     * @return string
     */
    public function getLoginUser()
    {
        return $this->loginUser;
    }

    /**
     * Set numDocUser
     *
     * @param string $numDocUser
     *
     * @return User
     */
    public function setNumDocUser($numDocUser)
    {
        $this->numDocUser = $numDocUser;

        return $this;
    }

    /**
     * Get numDocUser
     *
     * @return string
     */
    public function getNumDocUser()
    {
        return $this->numDocUser;
    }

    /**
     * Set typeDocUser
     *
     * @param integer $typeDocUser
     *
     * @return User
     */
    public function setTypeDocUser($typeDocUser)
    {
        $this->typeDocUser = $typeDocUser;

        return $this;
    }

    /**
     * Get typeDocUser
     *
     * @return integer
     */
    public function getTypeDocUser()
    {
        return $this->typeDocUser;
    }

    /**
     * Set passUser
     *
     * @param string $passUser
     *
     * @return User
     */
    public function setPassUser($passUser)
    {
        $this->passUser = $passUser;

        return $this;
    }

    /**
     * Get passUser
     *
     * @return string
     */
    public function getPassUser()
    {
        return $this->passUser;
    }

    /**
     * Set emailUser
     *
     * @param string $emailUser
     *
     * @return User
     */
    public function setEmailUser($emailUser)
    {
        $this->emailUser = $emailUser;

        return $this;
    }

    /**
     * Get emailUser
     *
     * @return string
     */
    public function getEmailUser()
    {
        return $this->emailUser;
    }

    /**
     * Set flastNameUser
     *
     * @param string $flastNameUser
     *
     * @return User
     */
    public function setFlastNameUser($flastNameUser)
    {
        $this->flastNameUser = $flastNameUser;

        return $this;
    }

    /**
     * Get flastNameUser
     *
     * @return string
     */
    public function getFlastNameUser()
    {
        return $this->flastNameUser;
    }

    /**
     * Set slastNameUser
     *
     * @param string $slastNameUser
     *
     * @return User
     */
    public function setSlastNameUser($slastNameUser)
    {
        $this->slastNameUser = $slastNameUser;

        return $this;
    }

    /**
     * Get slastNameUser
     *
     * @return string
     */
    public function getSlastNameUser()
    {
        return $this->slastNameUser;
    }

    /**
     * Set nameUser
     *
     * @param string $nameUser
     *
     * @return User
     */
    public function setNameUser($nameUser)
    {
        $this->nameUser = $nameUser;

        return $this;
    }

    /**
     * Get nameUser
     *
     * @return string
     */
    public function getNameUser()
    {
        return $this->nameUser;
    }

    /**
     * Set midNameUser
     *
     * @param string $midNameUser
     *
     * @return User
     */
    public function setMidNameUser($midNameUser)
    {
        $this->midNameUser = $midNameUser;

        return $this;
    }

    /**
     * Get midNameUser
     *
     * @return string
     */
    public function getMidNameUser()
    {
        return $this->midNameUser;
    }

    /**
     * Set statusUser
     *
     * @param integer $statusUser
     *
     * @return User
     */
    public function setStatusUser($statusUser)
    {
        $this->statusUser = $statusUser;

        return $this;
    }

    /**
     * Get statusUser
     *
     * @return integer
     */
    public function getStatusUser()
    {
        return $this->statusUser;
    }

    /**
     * Set userIdCreate
     *
     * @param integer $userIdCreate
     *
     * @return User
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
     * @return User
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
}
