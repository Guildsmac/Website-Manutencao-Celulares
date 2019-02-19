<?php
defined('BASEPATH') OR exit('No direct scripts access allowed');
?>


<div class="container">
    <div class="header">
        <a class="logo">Administração</a>
        <div class="header-right">
            <a class="active" href="http://localhost/manutencaodecelulares/index.php/admin/AdminHomepage">Início</a>
        </div>
    </div>
    <h1>
        Cadastrar Aparelho
    </h1>
        <div class="container-pecas">
            <p>Preencha todos os campos para cadastrar um aparelho.</p>
            <hr>
            <?php
            $formAttr = array('id' => 'loginForm');
            echo form_open('index.php/admin/CadastrarAparelho/cadastra_aparelho', $formAttr);

            ?>
            <label for="marca"><b>Marca</b></label>
            <?php
            $formData = array(
                'name' => 'marca',
                'type' => 'text',
                'required' => TRUE,
            );
            echo form_input($formData);
            ?>

            <label for="modelo"><b>Modelo</b></label>
            <?php
            $formData = array(
                'name' => 'modelo',
                'type' => 'text',
                'required' => TRUE,
            );
            echo form_input($formData);
            ?>
            <?php
            $buttonData = array(
                'class' => 'button'
            );
            echo form_submit('confirmButton', 'Cadastrar', $buttonData);
            echo form_close();
            ?>
        </div>
</div>

