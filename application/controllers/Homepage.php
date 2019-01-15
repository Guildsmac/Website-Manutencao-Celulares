<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: guild
 * Date: 12/01/2019
 * Time: 20:07
 */

class Homepage extends CI_Controller{
    public function index(){
        $this->template->load('template', 'homepage');
    }

}