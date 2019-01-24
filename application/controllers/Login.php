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
    	$this->load->helper('form');
        $this->template->load('template', 'login');

    }

    public function userLogin(){
    	$this->template->load('template', 'homepage');
    }

}