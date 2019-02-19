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
        Vendas
    </h1>
    <table class="table">
        <tr>
            <th>Nome do cliente</th>
            <th>Email do cliente</th>
            <th>Nome do componente</th>
            <th>Marca do componente</th>
            <th>Preço da venda</th>
            <th>Data da Venda</th>
            <th>Deletar Venda</th>
        </tr>
        <?php
        if (isset($result)) {
            $formAttr = array('id' => 'loginForm');
            echo form_open("index.php/admin/Vendas/alter_venda", $formAttr);
            foreach ($result as $i) {
                ?>
                <tr>
                    <th><?php echo $i['nomeCliente'] ?></th>
                    <th><?php echo $i['emailCliente'] ?></th>
                    <th><?php echo $i['nomeComponente'] ?></th>
                    <th><?php echo $i['marcaComponente'] ?></th>
                    <th><?php echo $i['precoVenda'] ?></th>
                    <th><?php echo $i['dtVenda'] ?></th>
                    <th>
                        <?php
                        $checkBoxData = array(
                            'name' => 'excluir_' . $i['idVenda'],
                            'checked' => FALSE,
                            'class' => 'checkbox'

                        );
                        echo form_checkbox($checkBoxData); ?>
                    </th>
                </tr>
                <?php

            }
            $buttonData = array(
                'class' => 'active'
            );
        }
        ?>
    </table>
    <?php
        echo form_submit('confirmButton', 'Confirmar Alterações', $buttonData);
        echo form_close();
    ?>
</div>
