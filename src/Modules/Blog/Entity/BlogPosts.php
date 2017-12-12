<?php

namespace App\Modules\Blog\Entity;

use App\Entity\A_Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity(repositoryClass="App\Modules\Blog\Repository\BlogPostsRepository")
 * @ORM\Table(name="blog_posts", uniqueConstraints={@ORM\UniqueConstraint(name="blog_posts_id_uindex",columns={"id"})})
 */
class BlogPosts extends A_Entity
{
    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity="BlogComments", mappedBy="posts")
     */
    protected $comments;

    /**
     * @ORM\ManyToOne(targetEntity="BlogCategories", inversedBy="posts")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $categories;

    /**
     * @ORM\Column(name="header", type="string", length=255, nullable=false)
     **/
    protected $header;

    /**
     * @ORM\Column(name="content", type="text", nullable=false)
     **/
    protected $content;

    /**
     * @ORM\ManyToOne(targetEntity="BlogAuthors", inversedBy="posts")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    protected $author;

    /**
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param mixed $categories
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param mixed $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
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
