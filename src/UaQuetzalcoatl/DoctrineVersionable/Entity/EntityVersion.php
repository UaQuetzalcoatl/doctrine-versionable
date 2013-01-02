<?php
namespace UaQuetzalcoatl\DoctrineVersionable\Entity;

use UaQuetzalcoatl\DoctrineVersionable\Exception;
use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * @ORM\Entity
 * @ORM\Table(name="_entity_version")
 *
 * @author alex
 */
class EntityVersion
{
    const STATUS_NEW = 'new';
    const STATUS_UPD = 'upd';
    const STATUS_DEL = 'del';
    /**
     *
     * @var integer $id
     * @ORM\Column(name="id", type="integer",nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @ORM\Column(type="string",length=60,nullable=false)
     * @var string
     */
    private $name;
    /**
     * @ORM\Column(type="string",length=60,nullable=false)
     * @var string
     */
    private $hash;
    /**
     * @ORM\Column(type="array")
     * @var array
     */
    private $data;
    /**
     * @ORM\Column(type="integer",nullable=false)
     * @var integer
     */
    private $version;
    /**
     * @ORM\Column(type="string",length=3,nullable=false)
     * @var string
     */
    private $status;
    /**
     * @ORM\Column(type="datetime",nullable=false)
     * @var datetime
     */
    private $date;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getHash()
    {
        return $this->hash;
    }

    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        if (!in_array($status, array(self::STATUS_DEL, self::STATUS_NEW, self::STATUS_UPD))) {
            Exception::invalidArgument('Invalid EntityVersion status');
        }

        $this->status = $status;
        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate(DateTime $date)
    {
        $this->date = $date;
        return $this;
    }
}
