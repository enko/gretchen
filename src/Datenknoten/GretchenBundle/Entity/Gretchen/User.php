<?php

namespace Datenknoten\GretchenBundle\Entity\Gretchen;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class User extends Author {
    /**
     * @var username
     *
     * @ORM\Column(name="usename",type="string")
     */
    protected $username;

    /**
     * @var password
     *
     * @ORM\Column(name="password",type="string")
     */
    protected $password;

} 