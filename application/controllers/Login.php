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
        $data = array('sess_data' => $this->session->userdata());
    	$this->load->helper('form');
        $this->template->load('template', 'login', $data);

    }

    public function userLogout(){
        session_destroy();
        redirect(base_url());
    }

    public function userLogin(){
    	$this->load->library('form_validation');
    	$email = $this->input->post('email');
        $senha = $this->input->post('senha');
        $this->db->where('email', $email);
        $usuario = $this->db->get('usuario')->result();
        if(count($usuario)===1){
            if(password_verify($senha, $usuario[0]->senha)){
                $data = array(
                    'nome' => $usuario[0]->nome,
                    'perm_level' => $usuario[0]->permissionLevel,
                    'email' => $usuario[0]->email,
                    'session_id' => $usuario[0]->idUsuario,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($data);
                redirect(base_url() . "index.php");
            }
        }else{
            $this->session->sess_destroy();

            redirect(base_url().'index.php/login/');
        }
    }

}