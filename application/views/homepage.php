<?php
/**
 * Created by PhpStorm.
 * User: guild
 * Date: 15/01/2019
 * Time: 10:31
 */

defined('BASEPATH') OR exit('No direct script access allowed');


?>
<main role="main">
    <?php
        function getStartNowHref($sess_data){
            if(count($sess_data) <= 1){
                return 'index.php/register/';
            }else{
                return 'index.php/componente';
            }
        }


    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Manutenção de celulares</h1>
            <p class="lead">Bem-Vindo!</p><p>Problemas com o seu display? Bateria acaba muito rápido? Está no lugar certo!</p><p>Faça seu cadastro, descreva seu problema e envie o seu eletrônico ao nosso CEP que resolvemos seu problema!</p>
            <p><a class="btn btn-outline-primary btn-lg" href="<?php echo base_url(getStartNowHref($sess_data));?>" role="button">Comece agora! &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col">
                <h2>Compra de componentes</h2>
                <p>Sabe onde está o problema, sabe como consertar?</br>Compre aqui componentes para a marca e modelo do seu celular para então serem entregues no seu endereço!</p>
                <p><a class="btn btn-secondary" href="<?php echo base_url('index.php/componente/');?>" role="button">Veja as opções &raquo;</a></p>
            </div>
            <div class="col">
                <h2>Solicite a manutenção</h2>
                <p>Comece por aqui para descrever o seu problema, identificar seu celular e então nos enviar para que possamos consertá-lo e mandá-lo de volta novo em folha!</p>
                <p><a class="btn btn-secondary" href="<?php echo base_url('index.php/manutencao/');?>" role="button">Vamos lá &raquo;</a></p>
            </div>
        </div>

        <hr>

    </div> <!-- /container -->

</main>