<?php
/**
 * Created by PhpStorm.
 * User: guild
 * Date: 25/01/2019
 * Time: 22:23
 */


defined('BASEPATH') OR exit('No direct scripts access allowed');
?>
<div class="jumbotron">
    <div class="container">
        <h1 class="active-2 mb-3">
            Componentes disponíveis para venda
        </h1>
        <div class="list-group" id="list-tab" role="tablist">
            <?php foreach($componentes as $i){?>
            <a href="<?php echo base_url('index.php/componente/' . $i['idComponente']); ?>" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1"><?php echo $i['nome']; ?></h5>
                    <small>R$ <?php echo $i['preco']; ?> </small>
                </div>
                <p class="mb-1">Modelo: <strong><?php echo $i['modelo'];?></strong></p>
                <small><?php if($i['modelosCompativeis']['hasResult']){
                                $formattedValues = '';
                                foreach($i['modelosCompativeis']['resultado'] as $i2){
                                    if(end($i['modelosCompativeis']['resultado'])==$i2)
                                        $formattedValues .= $i2;
                                    else
                                        $formattedValues .= "$i2, ";

                                }
                                echo 'Modelos compatíveis: ' . "<strong>$formattedValues</strong>";
                            }else{
                                echo 'Componente não possui compatibilidade com nenhum aparelho cadastrado.';
                            }?></small>
            </a>
            <?php }?>

        </div>
    </div>
</div>