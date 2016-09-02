<?php

namespace AppBundle\Classes;

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

    /** @Column(Length=255) */
    protected $username;

    /** @Column(Length=255) */
    protected $first_name;

    /** @Column(Length=255) */
    protected $last_name;

    /** @Column(Length=255) */
    protected $email;

    /** @Column(Length=255) */
    protected $password;

    protected $id_address;

    protected $mobile;

    protected $id_currency;

    protected $status;

    protected $verified;

    protected $id_media;

    protected $is_staff;

    protected $created_at;

    protected $id_website;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

}
