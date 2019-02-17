<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<main role="main">
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
			<?php
				$formAttr = array('id' => 'cadastroForm');
				echo form_open("index.php/admin/registerpecas/registroComponente", $formAttr);
          echo "<div class='container-pecas'>";
						echo form_label('Nome', 'nome');
						$formData = array(
							'name' => 'nome',
							'id' => 'nomeInput',
							'maxlength' => '128',
							'class' => 'form-control'
							);
						echo form_input($formData);
						echo form_label('Marca', 'marca');
						$formData = array(
							'name' => 'marca',
							'id' => 'marcaInput',
							'maxlength' => '128',
							'class' => 'form-control'
							);
						echo form_input($formData);
						echo form_label('Modelo', 'modelo');
						$formData = array(
							'name' => 'modelo',
							'id' => 'modeloInput',
							'maxlength' => '128',
							'class' => 'form-control'
							);
						echo form_input($formData);
						echo form_label('Preco', 'preco');
						$formData = array(
							'name' => 'preco',
							'id' => 'precoInput',
							'maxlength' => '45',
							'class' => 'form-control'
							);
						echo form_input($formData);
					$buttonData = array(
						'class' => 'button'
						);
					echo form_submit('registerButton', 'Cadastrar', $buttonData);
        echo "</div>";
				echo form_close();
			?>
  </div>
</main>