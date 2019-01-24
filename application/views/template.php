<?php
/**
 * Created by PhpStorm.
 * User: guild
 * Date: 15/01/2019
 * Time: 10:31
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
    <link type="text/css" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.css'); ?>" rel="stylesheet">
    <title>Manutenção de Celulares</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="<?php echo base_url();?>">Manutenção de Celulares</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if(active_link('homepage')!='') echo 'active';?>">
                <a class="nav-link" href="<?php echo base_url();?>">Página Inicial<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php if(active_link('about')!='') echo 'active';?>">
                <a class="nav-link" href="<?php echo base_url('index.php/about');?>">Sobre a empresa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Fale conosco</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Venda de componentes</a>
                    <a class="dropdown-item" href="#">Solicitação de Manutenção</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 ">
            <a href="<?php echo base_url('index.php/login');?>"><div class ="btn btn-primary my-2 my-sm-0 mr-2">Login</div></a>
            <a href="<?php echo base_url('index.php/register');?>"><div class ="btn btn-secondary my-2 my-sm-0 mr-2">Registro</div></a>
        </form>
    </div>
</nav>
<?php echo $contents; ?>
<footer class="container">
    <p>&copy; Gabriel Sousa e Lian França 2019</p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url('assets/js/jquery/jquery-slim.min.js');?>"><\/script>')</script><script src="<?php echo base_url('assets/bootstrap/dist/js/bootstrap.bundle.min.js');?>" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/js/popper/popper.min.js');?>"></script>
<script src="<?php echo base_url('assets/bootstrap/dist/js/bootstrap.min.js');?>"></script>
</body>
</html>