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
		 	Cadastrar Aparelho
        </h1>
    <form action="http://localhost/manutencaodecelulares/index.php/admin/registerpecas/registroComponente/" id="cadastroForm" method="post" accept-charset="utf-8">
    <div class="container-pecas">
        <p>Preencha todos os campos para cadastrar um aparelho.</p>
        <hr>
        <label for="marca"><b>Marca</b></label>
        <input type="text" name="marca" required>

        <label for="modelo"><b>Modelo</b></label>
		<input type="text" name="modelo" required>
		
		<label for="imagem"><b>Imagem</b></label>
		<br>
		<input name="arquivo" type="file" />
        <hr>

        <button class="button">Cadastrar</button>
    </div>
    </form> 
</div>

</div>

