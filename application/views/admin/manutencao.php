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
		 	Manutenção
		</h1>
	<table class="table">
			<tr>
				<th>Data do Pedido</th>
				<th>Data de Entrega</th>
				<th>Custo</th>
				<th>Problema</th>
				<th>Descrição do Problema</th> 
				<th>Entregue ao Usuário </th>
                <th>Excluir</th>
			</tr>
        <?php
        if(isset($manutencao)){
        $formAttr = array('id' => 'loginForm');
        echo form_open("index.php/admin/AdminManutencao/alter_data", $formAttr);
        foreach ($manutencao

        as $i){
        ?>
        <tr>
            <th><?php echo $i->dtPedido ?></th>
            <th><?php echo $i->dtEntrega != '' ? $i->dtEntrega : 'Ainda não entregue.' ?></th>
            <th><?php
                $formData = array(
                    'name' => 'custo_' . $i->idManutencao,
                    'class' => 'bota_uma_classe_lian',
                    'value' => $i->custo,
                    'style' => 'width:75'
                );
                echo form_input($formData);

                ?>
            </th>
            <th><?php
                $formData = array(
                    'name' => 'nomeProb_' . $i->idManutencao,
                    'class' => 'bota_uma_classe_lian',
                    'value' => $i->problema,
                    'style' => 'width:150'

                );
                echo form_input($formData);
                ?>
            </th>
            <th><?php
                $formData = array(
                    'name' => 'descProb_' . $i->idManutencao,
                    'class' => 'bota_uma_classe_lian',
                    'value' => $i->descricaoProblema,
                    'rows' => 2,
                    'cols' => 30
                );
                echo form_textarea($formData);
                ?>
            </th>
            <th>
                <?php
                $checkBoxData = array(
                    'name' => 'entregue_' . $i->idManutencao,
                    'checked' => $i->dtEntrega == '' ? FALSE : TRUE,

                );
                echo form_checkbox($checkBoxData);
                ?>
            </th>
            <th>
                <?php
                $checkBoxData = array(
                    'name' => 'excluir_' . $i->idManutencao,
                    'checked' => FALSE,

                );
                echo form_checkbox($checkBoxData); ?>
            </th>

            <?php
            }
            ?>
    </table>
    <?php
    $buttonData = array(
        'class' => 'active'
    );
    echo form_submit('confirmButton', 'Confirmar Alterações', $buttonData);
    echo form_close();
    }
    ?>
</div>
