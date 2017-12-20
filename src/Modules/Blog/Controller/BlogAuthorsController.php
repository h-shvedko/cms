<?php

namespace App\Modules\Blog\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogAuthorsController extends A_BlogController
{

    /**
     * @Route("/module/controller/index", name="module_controller_action")
     */
    public function index()
    {
        return $this->render('@BlogTemplates/blog_base.html.twig', []);
    }

    /**
     * @Route("/blog/authors/update/{id}", name="blog_authors_update")
     * @param int $id
     * @return Response
     */
    public function update(int $id)
    {
        return $this->render('@BlogTemplates/indexUpdate.html.twig', []);
    }

    /**
     * @Route("/blog/authors/delete/{id}", name="blog_authors_delete")
     * @param int $id
     * @return Response
     */
    public function delete(int $id)
    {
        return $this->render('@BlogTemplates/indexDelete.html.twig', []);
    }
}
