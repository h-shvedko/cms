<?php
/**
 * Created by PhpStorm.
 * User: hennadii.shvedko
 * Date: 11/08/2017
 * Time: 13:28
 */

namespace App\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks
 * Class A_Model
 */
abstract class A_Entity
{
    const IS_DELETED = '1';
    const IS_NOT_DELETED = '0';

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", name="id")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(name="created_at", type="string", nullable=false, options={"default":"CURRENT_TIMESTAMP"})
     */
    protected $createdAt;
    /**
     * @ORM\Column(name="created_by", type="string", nullable=false, options={"default":"0"})
     */
    protected $createdBy;

    /**
     * @ORM\Column(name="modified_at", type="string", nullable=false, options={"default":"CURRENT_TIMESTAMP"})
     */
    protected $modifiedAt;
    /**
     * @ORM\Column(name="modified_by", type="string", nullable=false, options={"default":"0"})
     */
    protected $modifiedBy;

    /**
     * @ORM\Column(name="is_deleted", type="string", length=1, nullable=false, options={"default":"1"})
     **/
    protected $isVisible;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param mixed $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return mixed
     */
    public function getModifiedAt()
    {
        return $this->modifiedAt;
    }

    /**
     * @param mixed $modifiedAt
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modifiedAt = $modifiedAt;
    }

    /**
     * @return mixed
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * @param mixed $modifiedBy
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;
    }

    /**
     * @return mixed
     */
    public function getisVisible()
    {
        return $this->isVisible;
    }

    /**
     * @param mixed $isVisible
     */
    public function setIsVisible($isVisible)
    {
        $this->isVisible = $isVisible;
    }
}