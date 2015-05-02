<?php

namespace Datenknoten\GretchenBundle\Entity\Gretchen;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Acl\Exception\Exception;

/**
 * ImageType
 *
 * @ORM\Table(name="image_types")
 * @ORM\Entity
 */
class ImageType extends BaseEntity {
    /**
     * @var string
     *
     * @ORM\Column(name="name",type="string")
     */
    protected $name;

} 