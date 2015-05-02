<?php

namespace Datenknoten\GretchenBundle\Entity\Gretchen;

use Doctrine\ORM\Mapping as ORM;

/**
 * Author
 *
 * @ORM\Table(name="authors")
 * @ORM\Entity
 */
class Author extends BaseEntity
{

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
}
