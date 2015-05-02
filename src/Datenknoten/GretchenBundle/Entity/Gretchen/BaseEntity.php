<?php

namespace Datenknoten\GretchenBundle\Entity\Gretchen;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Acl\Exception\Exception;

abstract class BaseEntity {
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetimetz")
	 */
	protected $created_at;

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string")
     */
    protected $created_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetimetz", nullable=true)
     */
    protected $updated_at;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_by", type="string", nullable=true)
     */
    protected $updated_by;
	
	
    public function __isset($name) {
        if (property_exists($this,$name)) {
            return true;
        } else {
            return false;
        }
    }

    public function __get($name) {
        if (property_exists($this,$name)) {
            return $this->$name;
        } else {
            throw new \Exception("Property {$name} does not Exists");
        }
    }

    public function __set($name,$value) {
        if (property_exists($this,$name)) {
            if ($value == '') {
                $this->$name = null;
            } else {
                $this->$name = $value;
            }
            return $this;
        } else {
            throw new \Exception("Property {$name} does not Exists");
        }
    }
	

}