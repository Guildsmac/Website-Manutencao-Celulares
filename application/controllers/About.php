<?php
/**
 * Created by PhpStorm.
 * User: guild
 * Date: 17/01/2019
 * Time: 11:38
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller{
    public function index(){
        $data = array('sess_data' => $this->session->userdata());
        $this->template->load('template', 'about', $data);
    }
}