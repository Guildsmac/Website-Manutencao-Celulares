<?php
/**
 * Created by PhpStorm.
 * User: guild
 * Date: 30/01/2019
 * Time: 11:31
 */


     defined('BASEPATH') OR exit('No direct scripts access allowed');
     class Contact extends CI_Controller{
         function __construct(){
             parent::__construct();
         }
         public function index(){
             $data = array('sess_data' => $this->session->userdata());
             $this->template->load('template', 'contact', $data);
         }
     }
