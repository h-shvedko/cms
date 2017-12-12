<?php

namespace App\Modules\Store\Controller;

use App\Controller\A_CoreController;
use App\I_Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class A_StoreController extends A_CoreController implements I_Controller
{
    /**
     * @Route("/a/store", name="a_store")
     */
    public function index()
    {
        // replace this line with your own code!
        return $this->render('@Maker/demoPage.html.twig', [ 'path' => str_replace($this->getParameter('kernel.project_dir').'/', '', __FILE__) ]);
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
