<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="users")
*/
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $username;

    /**
     * @ORM\Column(type="string")
     */
    protected $first_name;

    /**
     * @ORM\Column(type="string")
     */
    protected $last_name;

    /**
     * @ORM\Column(type="string")
     */
    protected $email;

    /**
     * @ORM\Column(type="string")
     */
    protected $password;

    /**
     * @ORM\Column(type="integer")
     */
    protected $id_address;

    /**
     * @ORM\Column(type="integer")
     */
    protected $mobile;

    /**
     * @ORM\Column(type="integer")
     */
    protected $id_currency;

    /**
     * @ORM\Column(type="integer")
     */
    protected $status;

    /**
     * @ORM\Column(type="integer")
     */
    protected $verified;

    /**
     * @ORM\Column(type="integer")
     */
    protected $id_media;

    /**
     * @ORM\Column(type="integer")
     */
    protected $is_staff;

    /**
     * @ORM\Column(type="string")
     */
    protected $created_at = '0000-00-00';

    /**
     * @ORM\Column(type="integer")
     */
    protected $id_website;

    public function __construct()
    {
        parent::__construct();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getIdAddress()
    {
        return $this->id_address;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    public function getIdCurrent()
    {
        return $this->id_currency;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getVerified()
    {
        return $this->verified;
    }

    public function getIdMedia()
    {
        return $this->id_media;
    }

    public function getIsStaff()
    {
        return $this->is_staff;
    }

    public function getIdWebsite()
    {
        return $this->id_website;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    //Setters
    public function setId($id)
    {
        return $this->id = $id;
    }

    public function setUsername($username)
    {
        return $this->username = $username;
    }

    public function setFirstName($firstname)
    {
        return $this->first_name = $firstname;
    }

    public function setLastName($lastname)
    {
        return $this->last_name = $lastname;
    }

    public function setEmail($email)
    {
        return $this->email = $email;
    }

    public function setPassword($password)
    {
        return $this->password = $password;
    }

    public function setIdAddress($id_address)
    {
        return $this->id_address = $id_address;
    }

    public function setMobile($mobile)
    {
        return $this->mobile = $mobile;
    }

    public function setIdCurrent($id_currency)
    {
        return $this->id_currency = $id_currency;
    }

    public function setStatus($status)
    {
        return $this->status = $status;
    }

    public function setVerified($verified)
    {
        return $this->verified = $verified;
    }

    public function setIdMedia($id_media)
    {
        return $this->id_media = $id_media;
    }

    public function setIsStaff($is_staff)
    {
        return $this->is_staff = $is_staff;
    }

    public function setIdWebsite($id_website)
    {
        return $this->id_website = $id_website;
    }

    public function setCreatedAt($created_at)
    {
        return $this->created_at = $created_at;
    }

    /**
     * Set idCurrency
     *
     * @param integer $idCurrency
     *
     * @return User
     */
    public function setIdCurrency($idCurrency)
    {
        $this->id_currency = $idCurrency;

        return $this;
    }

    /**
     * Get idCurrency
     *
     * @return integer
     */
    public function getIdCurrency()
    {
        return $this->id_currency;
    }
}
