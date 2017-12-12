<?php

namespace App\Modules\Blog\Entity;

use App\Entity\A_Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Modules\Blog\Repository\BlogCategoriesRepository")
 * @ORM\Table(name="blog_categories", uniqueConstraints={@ORM\UniqueConstraint(name="blog_categories_id_uindex",columns={"id"})})
 */
class BlogCategories extends A_Entity
{
    public function __construct()
    {
        $this->posts = new ArrayCollection();
    }

    /**
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     **/
    protected $name;

    /**
     * @ORM\OneToMany(targetEntity="BlogPosts", mappedBy="categories")
     */
    protected $posts;

    /**
     * @return mixed
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * @param mixed $posts
     */
    public function setPosts($posts)
    {
        $this->posts = $posts;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}
