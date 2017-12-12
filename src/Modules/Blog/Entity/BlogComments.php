<?php

namespace App\Modules\Blog\Entity;

use App\Entity\A_Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Modules\Blog\Repository\BlogCommentsRepository")
 * @ORM\Table(name="blog_comments", uniqueConstraints={@ORM\UniqueConstraint(name="blog_comments_id_uindex",columns={"id"})})
 */
class BlogComments extends A_Entity
{
    /**
     * @ORM\ManyToOne(targetEntity="BlogPosts", inversedBy="comments")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     */
    protected $posts;

    /**
     * @ORM\ManyToOne(targetEntity="BlogAuthors", inversedBy="comments")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    protected $authors;

    /**
     * @ORM\Column(name="content", type="text", nullable=false)
     **/
    protected $content;

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
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * @param mixed $authors
     */
    public function setAuthors($authors)
    {
        $this->authors = $authors;
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
}
