<?php
/**
 * Created by PhpStorm.
 * User: guild
 * Date: 25/01/2019
 * Time: 20:24
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminHomepage extends CI_Controller
{

    public function confirm_password(){
        $senha = $this->input->post('senha');
        $loggedEmail = $_SESSION['email'];
        $this->db->where('email', $loggedEmail);
        $usuario = $this->db->get('usuario')->result();
        if(count($usuario)===1){
            if($usuario[0]->permissionLevel==1){
                if(password_verify($senha, $usuario[0]->senha)){
                    $_SESSION['is_verified'] = TRUE;
                    $this->session->mark_as_temp('is_verified', 1200);
                    redirect(base_url() . "index.php/admin/AdminHomepage");
                }
            }else{
                $this->load->view('errors/auth/acesso_negado', array('page' => $usuario[0]->permissionLevel));
            }
        }else{
            $this->load->view('errors/auth/acesso_negado', array('page' => 'Página de Administração'));
        }
    }


    public function index(){
        $this->load->helper('form');
        if(sizeof($this->session->userdata())>1){
            if($this->session->userdata('perm_level')==1) {
                if (!isset($_SESSION['is_verified']))
                    $this->template->load('admin/admin_template', 'admin/confirm_password');
                else {
                    if ($_SESSION['is_verified'] == TRUE) {
                        $this->template->load('admin/admin_template', 'admin/dashboard');
                    }
                }
            }else
                $this->load->view('errors/auth/acesso_negado', array('page' => 'Página de Administração'));
        }else{
            $this->load->view('errors/auth/acesso_negado', array('page' => 'Página de Administração'));
        }

    }

}