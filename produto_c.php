<?php

require_once 'header.php';
require_once 'titles.php';
require_once 'conexao.php';

error_reporting( ~E_NOTICE );

if(isset($_GET['view_id']) && !empty($_GET['view_id']))
{
    $id = $_GET['view_id'];
    $stmt_view = $DB_con->prepare('SELECT descricao_produto, id_produto, nome_produto, categoria_produto FROM produtos WHERE id_produto =:uid');
    $stmt_view->execute(array(':uid'=>$id));
    $view_row = $stmt_view->fetch(PDO::FETCH_ASSOC);
    extract($view_row);
}
else
{
    header("Location: index.php");
}


?>


<div class="section no-pad-bot" id="index-banner">
    <div class="container animated bounceInUp">

        <br><br>

        <!--detalhes do produto selecionado-->

        <div class="row col s6">
            <h5 class="left header center blue-grey-text">Categoria:</h5>
            &nbsp;
            <a class="disabled center btn-large waves-effect waves-light blue darken-3"><?php echo utf8_encode($categoria_produto) ;?></a>
        </div>


        <div class="row col s6">
            <h5 class="left header center blue-grey-text">Produto:</h5>
            &nbsp;
            <a class="disabled center btn-large waves-effect waves-light blue darken-3"><?php echo utf8_encode($nome_produto) ;?></a>
        </div>

        <div class="row col s6">
            <p class="plain-text">
                <?php echo utf8_encode($descricao_produto) ;?>
            </p>
        </div>

        <br><br>

        <div class="row center">
            <a href="/sistema/produtos.php" class="round btn-large waves-effect waves-light blue darken-3">
                <i class="material-icons left large">chevron_left</i>
                Voltar &nbsp;
            </a>
        </div>

        <br><br>

        <br><br>

    </div>
</div>