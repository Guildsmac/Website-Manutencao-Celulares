<?php
defined('BASEPATH') OR exit('No direct scripts access allowed');

?>
<?php echo validation_errors(); ?>

<div class="jumbotron">
	<div class = "container">
		<h1 class="active-2 mb-3">
            Formulário de Manutenção
        </h1>
		<?php 
		$formAttr = array("id" => "manutencaoForm");
		echo form_open('index.php/manutencao/solicita');
		echo form_label('Modelo do seu Celular:*', 'modelo');
		$options = array();

		foreach($celulares as $i)
			$options[$i->idCelular] = $i->modelo;
		
		echo form_dropdown('modelos', $options, '2', array('class' => 'form-control'));
		echo "<div class='form-group text-left'>";
		echo form_label('<br>Problema:*', 'problema');
		$classInput = 'form-control ';
        if(strlen(form_error('problemaInput'))>0)
            $classInput .= 'is-invalid';
		$data = array(
	        'name'          => 'problemaInput',
	        'maxlength'     => '128',
	        'placeholder'   => 'Qual o problema?',
	        'class'         => $classInput
		);
		echo form_input($data);
		echo "<small><span class ='text-danger'>";
		echo form_error('problemaInput');
		echo "</span></small>";
		echo "</div>";
        echo "<div class='form-group text-left'>";
        echo form_label('Descreva o problema: ', 'descProb');
        $data = array(
            'name' => 'descProblemaInput',
            'maxlength' => '512',
            'placeholder' => 'Descreva o seu problema',
            'class' => 'form-control',
            'rows' => '4'
        );

        echo form_textarea($data);
        echo "</div>";
        $buttonData = array(
            'class' => 'btn btn-primary mt-3'
        );
        echo form_submit('submitForm', 'Enviar manutenção', $buttonData);
		echo form_close();

		?>