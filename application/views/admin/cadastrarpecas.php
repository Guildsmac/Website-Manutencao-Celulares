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
		 	Cadastrar Peça
        </h1>
    <div class="container-pecas">
        <p>Preencha todos os campos para cadastrar uma peça.</p>
        <hr>
        <?php
            echo form_open('index.php/admin/CadastrarPecas/cadastra');
        ?>
        <label for="nome"><b>Nome</b></label>
        <?php
            $form_data = array(
                'type' => 'text',
                'name' => 'nome',
                'required' => TRUE
            );
            echo form_input($form_data);
        ?>

        <label for="marca"><b>Marca</b></label>
        <?php
        $form_data = array(
            'type' => 'text',
            'name' => 'marca',
            'required' => TRUE
        );
        echo form_input($form_data);
        ?>

        <label for="modelo"><b>Modelo</b></label>
        <?php
        $form_data = array(
            'type' => 'text',
            'name' => 'modelo',
            'required' => TRUE
        );
        echo form_input($form_data);
        ?>

        <label for="preco"><b>Preço</b></label>
        <?php
        $form_data = array(
            'type' => 'text',
            'name' => 'preco',
            'required' => TRUE
        );
        echo form_input($form_data);
        ?>
        <hr>
        <?php
        $button_data = array(
            'class' => 'button',
            'value' => 'Cadastrar'
        );
        echo form_submit($button_data);
        echo form_close();
        ?>
    </div>
</div>
