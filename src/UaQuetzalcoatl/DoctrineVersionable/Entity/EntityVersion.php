<?php
namespace UaQuetzalcoatl\DoctrineVersionable\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="_entity_version")
 *
 * @author alex
 */
class EntityVersion
{
    /**
     *
     * @var integer $id
     * @ORM\Column(name="id", type="integer",nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    private $class;
    private $hash;
    private $version;
    private $date;
}
