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
		 	Peças
		</h1>
        <table class="table">
            <tr>
                <th>Nome</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Preço</th>
                <th>Deletar</th>
            </tr>
            <?php
                if(isset($componentes)) {
            echo form_open('index.php/admin/listarpecas/gerencia_pecas');
            foreach ($componentes as $i) {
                ?>
                <tr>
                    <td>
                        <?php
                        $form_data = array(
                            'type' => 'text',
                            'value' => $i->nome,
                            'name' => 'nome_' . $i->idComponente,
                        );
                        echo form_input($form_data);
                        ?>
                    </td>
                    <td>
                        <?php
                        $form_data = array(
                            'type' => 'text',
                            'value' => $i->marca,
                            'name' => 'marca_' . $i->idComponente,
                        );
                        echo form_input($form_data);
                        ?>
                    </td>
                    <td>
                        <?php
                        $form_data = array(
                            'type' => 'text',
                            'value' => $i->modelo,
                            'name' => 'modelo_' . $i->idComponente,
                        );
                        echo form_input($form_data);
                        ?>
                    </td>
                    <td>
                        <?php
                        $form_data = array(
                            'type' => 'text',
                            'value' => $i->preco,
                            'name' => 'preco_' . $i->idComponente,
                        );
                        echo form_input($form_data);
                        ?>
                    </td>
                    <td>
                        <?php
                        $checkBoxData = array(
                            'name' => 'excluir_' . $i->idComponente,
                            'class' => 'checkbox',
                            'checked' => FALSE,

                        );
                        echo form_checkbox($checkBoxData);
                        ?>
                    </td>
                </tr>
                <?php
            }


            ?>
        </table>
    <?php
    $button_data = array(
        'class' => 'button',
        'value' => 'Confirmar Alterações'
    );
    echo form_submit($button_data);
    echo form_close();
    }
    ?>
</div>
