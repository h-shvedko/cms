<?php

namespace App\Modules\Blog\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogCategoriesController extends A_BlogController
{

    /**
     * @Route("/module/controller/index", name="module_controller_action")
     */
    public function index()
    {
        // TODO: Implement index() method.
    }

    /**
     * @Route("/blog/categories/update/{id}", name="blog_categories_update")
     * @param int $id
     * @return Response
     */
    public function update(int $id)
    {
        return $this->render('@BlogTemplates/indexUpdate.html.twig', []);
    }

    /**
     * @Route("/blog/categories/delete/{id}", name="blog_categories_delete")
     * @param int $id
     * @return Response
     */
    public function delete(int $id)
    {
        return $this->render('@BlogTemplates/indexDelete.html.twig', []);
    }
}
