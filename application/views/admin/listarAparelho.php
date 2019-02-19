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
        Aparelhos
    </h1>
    <?php echo form_open('index.php/admin/ListarAparelho/gerencia_aparelho'); ?>
    <table class="table">
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Excluir</th>
        </tr>
        <?php
        if (isset($celulares)) {

            foreach ($celulares as $i) {
                ?>
                <tr>
                    <th><?php
                        $formData = array(
                            'name' => 'marca_' . $i->idCelular,
                            'class' => 'bota_uma_classe_lian',
                            'value' => $i->marca,
                            'style' => 'width:300'
                        );
                        echo form_input($formData);

                        ?>
                    </th>
                    <th><?php
                        $formData = array(
                            'name' => 'modelo_' . $i->idCelular,
                            'class' => 'bota_uma_classe_lian',
                            'value' => $i->modelo,
                            'style' => 'width:300'
                        );
                        echo form_input($formData);

                        ?></th>
                    <th>
                        <?php
                        $checkBoxData = array(
                            'name' => 'excluir_' . $i->idCelular,
                            'class' => 'checkbox',
                            'checked' => FALSE,

                        );
                        echo form_checkbox($checkBoxData); ?>
                    </th>
                </tr>
                <?php
            }

        }
        ?>
    </table>
    <?php
    $buttonData = array(
        'class' => 'active'
    );
    echo form_submit('confirmButton', 'Confirmar Alterações', $buttonData);
    echo form_close();
    ?>
</div>
