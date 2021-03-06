<?php

namespace App\Controller;

use App\I_Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

abstract class A_CoreController extends Controller implements I_Controller
{
    /**
     * @Route("/module/controller/index", name="module_controller_action")
     */
    abstract public function index();

    /**
     * @Route("/module/controller/index/{id}", name="module_controller_action")
     * @param int $id
     * @return
     */
    abstract function update(int $id);

    /**
     * @Route("/module/controller/index/{id}", name="module_controller_action")
     * @param int $id
     * @return
     */
    abstract function delete(int $id);
}
