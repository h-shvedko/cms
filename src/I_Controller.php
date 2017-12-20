<?php
/**
 * Created by PhpStorm.
 * User: hennadii.shvedko
 * Date: 12/12/2017
 * Time: 15:36
 */

namespace App;


use Symfony\Component\Routing\Annotation\Route;

interface I_Controller
{
    /**
     * @Route("/module/controller/index", name="module_controller_action")
     */
    public function index();

    /**
     * @Route("/module/controller/index/{id}", name="module_controller_action")
     * @param int $id
     * @return
     */
    public function update(int $id);

    /**
     * @Route("/module/controller/index/{id}", name="module_controller_action")
     * @param int $id
     * @return
     */
    public function delete(int $id);

}