<?php
/**
 * Created by PhpStorm.
 * User: guild
 * Date: 25/01/2019
 * Time: 20:44
 */

     defined('BASEPATH') OR exit('No direct scripts access allowed');
 ?>

<div class = "container h-100 d-flex justify-content-center">
    <div class ="jumbotron my-auto">
        <span class ="display-4">Por favor, confirme a sua senha: </span>

        <?php
        echo form_open('index.php/admin/AdminHomepage/confirm_password');
        $formData = array(
            'name' => 'senha',
            'placeholder' => 'Senha',
            'maxlength' => '128',

            'class'=>'form-control mt-3'
        );
        echo form_password($formData);
        $buttonData = array(
            'class' => 'btn btn-primary mt-3'
        );
        echo form_submit('confirmButton', 'Prosseguir', $buttonData);
        echo form_close();

        ?>
    </div>
</div>