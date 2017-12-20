<?php

namespace App\Modules\Blog\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogPostsController extends A_BlogController
{

    /**
     * @Route("/blog/posts", name="blog_posts_index")
     */
    public function index()
    {
        return $this->render('@BlogTemplates/indexPosts.html.twig', []);
    }

    /**
     * @Route("/blog/posts/update/{id}", name="blog_posts_update")
     * @param int $id
     * @return Response
     */
    public function update(int $id)
    {
        return $this->render('@BlogTemplates/indexUpdate.html.twig', []);
    }

    /**
     * @Route("/blog/posts/delete/{id}", name="blog_posts_delete")
     * @param int $id
     * @return Response
     */
    public function delete(int $id)
    {
        return $this->render('@BlogTemplates/indexDelete.html.twig', []);
    }
}
