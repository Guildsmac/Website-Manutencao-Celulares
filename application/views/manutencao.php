<?php
defined('BASEPATH') OR exit('No direct scripts access allowed');

?>

<div class="jumbotron">
	<div class = "container">
		<h1 class="active-2 mb-3">
            Formulário de Manutenção
        </h1>
		<?php 
		$formAttr = array("id" => "manutencaoForm");
		echo form_open('index.php/manutencao/solicita');
		echo form_label('Modelo do seu Celular:', 'modelo');
		$options = array();

		foreach($celulares as $i)
			$options[$i->idCelular] = $i->modelo;
		
		echo form_dropdown('modelos', $options, '2', array('class' => 'form-control'));
		echo "<div class='form-group text-left'>";
		echo form_label('<br>Problema:', 'problema');

		$data = array(
	        'name'          => 'problema',
	        'maxlength'     => '128',
	        'placeholder'   => 'Qual o problema?',
	        'class'         => 'form-control'
		);
		echo form_input($data);
		echo "</div>";
		echo form_close();

		?>