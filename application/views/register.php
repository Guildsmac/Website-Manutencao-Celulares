<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<main role="main">
	<div align="center" class="mt-3">
	<div class = "jumbotron" style="width:80%">
		<div class = "container">
			
			<?php
				$formAttr = array('id' => 'loginForm');
				echo form_open("index.php/register/userRegister/", $formAttr);
					echo "<div class='form-group text-left'>";
						echo form_label('Nome Completo', 'nome');
						$formData = array(
							'name' => 'nome',
							'id' => 'nomeInput',
							'placeholder' => 'Nome',
							'maxlength' => '128',
							'class' => 'form-control'
							);
						echo form_input($formData);
					echo "</div>";
					echo "<div class='form-group text-left'>";
						echo form_label('Endereço de Email', 'email');
						$formData = array(
							'name' => 'email',
							'id' => 'emailInput',
							'placeholder' => 'Email',
							'maxlength' => '128',
							'class' => 'form-control'
							);
						echo form_input($formData);
					echo "</div>";
					echo "<div class='form-group text-left'>";
						echo form_label('Senha', 'senha');
						$formData = array(
							'name' => 'senha',
							'id' => 'senhaInput',
							'placeholder' => 'Senha',
							'maxlength' => '128',
							'class' => 'form-control'
							);
						echo form_password($formData);
					echo "</div>";
					echo "<div class='form-group text-left'>";
						echo form_label('Endereço', 'endereco');
						$formData = array(
							'name' => 'endereco',
							'id' => 'enderecoInput',
							'placeholder' => 'Endereço',
							'maxlength' => '128',
							'class' => 'form-control'
							);
						echo form_input($formData);
					echo "</div>";
					echo "<div class='form-group text-left'>";
						echo form_label('Número de Telefone', 'numTel');
						$formData = array(
							'name' => 'numTelefone',
							'id' => 'numTelefoneInput',
							'placeholder' => 'Número de telefone',
							'maxlength' => '128',
							'class' => 'form-control',
							'type' => 'number'
							);
						echo form_input($formData);
					echo "</div>";
					echo "<div class='form-group text-left'>";
						echo form_label('CPF', 'cpf');
						$formData = array(
							'name' => 'cpf',
							'id' => 'cpfInput',
							'placeholder' => 'CPF',
							'maxlength' => '128',
							'class' => 'form-control',
							'type' => 'number'
							);
						echo form_input($formData);
					echo "</div>";
					echo "<div class='form-group text-left'>";
						echo form_label('Data de Nascimento', 'dtNasc');
						$formData = array(
							'name' => 'Data de Nascimento',
							'id' => 'dtNascInput',
							'type' => 'date',
							'class' => 'form-control'
							);
						echo form_input($formData);
					echo "</div>";
					$buttonData = array(
						'class' => 'btn btn-primary mt-3'
						);
					echo form_submit('registerButton', 'Cadastrar-se', $buttonData);
					
				echo form_close();

			?>
		</div>
		</div>
	</div>
</div>
</main>