<?php


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('password_confirmer')){
    function password_confirmer($act_controller, $sess_data, $success_page, $view_data){
        if(sizeof($sess_data)>1){
            if($sess_data['perm_level']==1){
                if (!isset($_SESSION['is_verified']))
                    $act_controller->template->load('admin/admin_template', 'admin/confirm_password');
                else
                    if ($_SESSION['is_verified'] == TRUE)
                        $act_controller->template->load('admin/admin_template', $success_page, $view_data);

            }else
                $act_controller->load->view('errors/auth/acesso_negado', array('page' => 'Página de Administração'));
        }
        else
            $act_controller->load->view('errors/auth/acesso_negado', array('page' => 'Página de Administração'));

    }
}