<?php

namespace App\Modules\Blog\Entity;

use App\Entity\A_Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity(repositoryClass="App\Modules\Blog\Repository\BlogAuthorsRepository")
 * @ORM\Table(name="blog_authors", uniqueConstraints={@ORM\UniqueConstraint(name="blog_authors_id_uindex",columns={"id"})})
 */
class BlogAuthors extends A_Entity
{
    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CoreUsers", inversedBy="authors")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $users;

    /**
     * @ORM\OneToMany(targetEntity="BlogComments", mappedBy="authors")
     */
    protected $comments;

    /**
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param mixed $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param mixed $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }


}
