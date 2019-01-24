<?php
/**
 * Created by PhpStorm.
 * User: guild
 * Date: 17/01/2019
 * Time: 10:01
 */
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main role="main">
	<div align="center" class="mt-3">
	<div class = "jumbotron" style="width:80%">
		<div class = "container">
			
			<?php
				$formAttr = array('id' => 'loginForm');
				echo form_open("login/userLogin", $formAttr);
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
					$buttonData = array(
						'class' => 'btn btn-primary mt-3'
						);
					echo form_submit('loginButton', 'Fazer Login', $buttonData);
				echo form_close();

			?>
		</div>
		</div>
	</div>
</div>
</main>
