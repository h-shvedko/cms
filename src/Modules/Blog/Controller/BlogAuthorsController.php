<?php

namespace App\Modules\Blog\Controller;

use App\Controller\A_CoreController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogAuthorsController extends A_BlogController
{

    /**
     * @Route("/module/controller/index", name="module_controller_action")
     */
    public function index()
    {
        return $this->render('../templates/blog_base.html.twig', []);
    }

    /**
     * @Route("/module/controller/index", name="module_controller_action")
     */
    public function update()
    {
        // TODO: Implement update() method.
    }

    /**
     * @Route("/module/controller/index", name="module_controller_action")
     */
    public function delete()
    {
        // TODO: Implement delete() method.
    }
}
