<?php
/**
 * Created by PhpStorm.
 * User: guild
 * Date: 26/01/2019
 * Time: 16:07
 */


     defined('BASEPATH') OR exit('No direct scripts access allowed');


 ?>

<div class ="jumbotron">
    <div class="container">
        <span class = "display-1"> <?php echo $data->nome; ?><br> </span>
        <span class = "display-3"> Marca <?php echo $data->marca . '<br> Modelo ' . $data->modelo . '<br> Custa ' . '<strong>R$' . $data->preco . '</strong>'; ?></span>
        <?php
            echo form_open('index.php/componente/confirm_buy');
                $form_data = array(
                    'name' => 'idUser',
                    'value' => $sess_data['session_id'],
                    'type' => 'hidden'
                );
                echo form_input($form_data);
                $form_data = array(
                    'name' => 'idComponente',
                    'value' => $data->idComponente,
                    'type' => 'hidden'
                );
                echo form_input($form_data);
                $form_data = array(
                    'name' => 'nomeCompra',
                    'value' => $data->nome,
                    'type' => 'hidden'
                );
                echo form_input($form_data);$form_data = array(
                    'name' => 'marcaCompra',
                    'value' => $data->marca,
                    'type' => 'hidden'
                );
                echo form_input($form_data);
                $buttonData = array(
                    'class' => 'btn btn-primary mt-3'
                );
                echo form_submit('confirmButton', 'Confirmar Compra', $buttonData);
            echo form_close();

        ?>
    </div>
</div>

