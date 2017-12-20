<?php

namespace App\Modules\Pages\Controller;

use App\Controller\A_CoreController;
use App\I_Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class A_PagesController extends A_CoreController implements I_Controller
{
    /**
     * @Route("/a/core", name="a_core")
     */
    public function index()
    {
        // replace this line with your own code!
        return $this->render('@Maker/demoPage.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);
    }

    /**
     * @Route("/blog/module/update/{id}", name="blog_module_update")
     * @param int $id
     * @return Response
     */
    public function update(int $id)
    {
        return $this->render('', []);
    }

    /**
     * @Route("/blog/module/delete/{id}", name="blog_module_delete")
     * @param int $id
     * @return Response
     */
    public function delete(int $id)
    {
        return $this->render('', []);
    }
}
