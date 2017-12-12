<?php
/**
 * Created by PhpStorm.
 * User: hennadii.shvedko
 * Date: 12/12/2017
 * Time: 15:36
 */

namespace App;


interface I_Controller
{
    /**
     * @Route("/module/controller/index", name="module_controller_action")
     */
    public function index();

    /**
     * @Route("/module/controller/index", name="module_controller_action")
     */
    public function update();

    /**
     * @Route("/module/controller/index", name="module_controller_action")
     */
    public function delete();

}