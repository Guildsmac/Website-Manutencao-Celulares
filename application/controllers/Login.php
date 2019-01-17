<?php
/**
 * Created by PhpStorm.
 * User: guild
 * Date: 17/01/2019
 * Time: 10:00
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{
    public function index(){
        $this->template->load('template', 'login');

    }
}