<?php
/**
 * Created by PhpStorm.
 * User: hana
 * Date: 02.05.15
 * Time: 11:06
 */

namespace Datenknoten\GretchenBundle\Entity\Gretchen;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Acl\Exception\Exception;

/**
 * Image
 *
 * @ORM\Table(name="images")
 * @ORM\Entity
 */
class Image extends BaseEntity {
    /**
     * @var string
     *
     * @ORM\Column(name="name",type="string")
     */
    protected $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="image_types_id",type="integer")
     */
    protected $image_types_id;

    /**
     * @var ImageType
     *
     * @ORM\ManyToOne(targetEntity="ImageType")
     * @ORM\JoinColumn(name="image_types_id", referencedColumnName="id")

     */
    protected $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="authors_id", type="integer")
     */
    protected $authors_id;

    /**
     * @var Author
     *
     * @ORM\ManyToOne(targetEntity="Author")
     * @ORM\JoinColumn(name="authors_id", referencedColumnName="id")
     */
    protected $author;
} 