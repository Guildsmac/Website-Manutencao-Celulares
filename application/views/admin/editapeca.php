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
		 	Informações da peça
		</h1>
	 <div class="body-editapeca">
		 <div>
			  <img src="<?php echo base_url('assets/images/pecas/1.jpg')?>"> 
			 <form>
			 <div class="container-pecas">
				<p>Preencha todos os campos para editar uma peça.</p>
		
				<label for="nome"><b>Nome</b></label>
				<input type="text" name="nome" required>

				<label for="marca"><b>Marca</b></label>
				<input type="text" name="marca" required>

				<label for="modelo"><b>Modelo</b></label>
				<input type="text" name="modelo" required>

				<label for="preco"><b>Preço</b></label>
				<input type="text" name="preco" required>
	

				<button class="button">Editar</button>
			 </div>
			 </form>
		</div>
	</div>
</div>
