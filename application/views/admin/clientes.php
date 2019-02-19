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
        Clientes
    </h1>
    <table class="table">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de Nascimento</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>CPF</th>
            <th>Deletar</th>
            <th>Administrador</th>
        </tr>
        <?php
        if (isset($usuarios)) {
            echo form_open('index.php/admin/Clientes/gerencia_clientes');
            foreach ($usuarios as $i) {
                $id = $i->idUsuario;
                ?>
                <tr>
                    <th>
                        <?php
                        $form_data = array(
                            'name' => 'nome_'.$id,
                            'value' => $i->nome,

                        );
                        echo form_input($form_data);
                        ?>
                    </th>
                    <th>
                        <?php
                        $form_data = array(
                            'name' => 'email_'.$id,
                            'value' => $i->email,

                        );
                        echo form_input($form_data);
                        ?>
                    </th>
                    <th>
                        <?php
                        $form_data = array(
                            'name' => 'dtnasc_'.$id,
                            'value' => $i->dtNascimento,

                        );
                        echo form_input($form_data);
                        ?>
                    </th>
                    <th>
                        <?php
                        $form_data = array(
                            'name' => 'endereco_'.$id,
                            'value' => $i->endereco,

                        );
                        echo form_input($form_data);
                        ?>
                    </th>
                    <th>
                        <?php
                        $form_data = array(
                            'name' => 'telefone_'.$id,
                            'value' => $i->numTelefone,

                        );
                        echo form_input($form_data);
                        ?>
                    </th>
                    <th>
                        <?php
                        $form_data = array(
                            'name' => 'cpf_'.$id,
                            'value' => $i->cpf,

                        );
                        echo form_input($form_data);
                        ?>
                    </th>
                    <th>
                        <?php
                        $form_data = array(
                            'name' => 'excluir_'.$id,
                            'class' => 'checkbox',
                            'checked' => FALSE

                        );
                        echo form_checkbox($form_data);
                        ?>
                    </th>
                    <th>
                        <?php
                        $form_data = array(
                            'name' => 'admin_'.$id,
                            'class' => 'checkbox',
                            'checked' => $i->permissionLevel == 1 ? TRUE : FALSE

                        );
                        echo form_checkbox($form_data);
                        ?>
                    </th>
                </tr>
                <?php
            }
        }
        ?>
    </table>
    <?php
    $buttonData = array(
        'class' => 'button'
    );
    echo form_submit('confirmButton', 'Confirmar Alterações', $buttonData);
    echo form_close();
    ?>
</div>
