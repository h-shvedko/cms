<?php

namespace App\Modules\Blog\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogCommentsController extends A_BlogController
{
    /**
     * @Route("/module/controller/index", name="module_controller_action")
     */
    public function index()
    {
        // TODO: Implement index() method.
    }

    /**
     * @Route("/blog/comments/update/{id}", name="blog_comments_update")
     * @param int $id
     * @return Response
     */
    public function update(int $id)
    {
        return $this->render('@BlogTemplates/indexUpdate.html.twig', []);
    }

    /**
     * @Route("/blog/comments/delete/{id}", name="blog_comments_delete")
     * @param int $id
     * @return Response
     */
    public function delete(int $id)
    {
        return $this->render('@BlogTemplates/indexDelete.html.twig', []);
    }
}
