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
		 	Cadastrar Peça
        </h1>
    <form action="http://localhost/manutencaodecelulares/index.php/admin/registerpecas/registroComponente/" id="cadastroForm" method="post" accept-charset="utf-8">
    <div class="container-pecas">
        <p>Preencha todos os campos para cadastrar uma peça.</p>
        <hr>
        <label for="nome"><b>Nome</b></label>
        <input type="text" name="nome" required>

        <label for="marca"><b>Marca</b></label>
        <input type="text" name="marca" required>

        <label for="modelo"><b>Modelo</b></label>
        <input type="text" name="modelo" required>

        <label for="preco"><b>Preço</b></label>
        <input type="text" name="preco" required>
        <hr>

        <button class="button">Cadastrar</button>
    </div>
    </form> 
</div>
