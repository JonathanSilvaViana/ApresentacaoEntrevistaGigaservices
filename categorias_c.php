<div class="section no-pad-bot" id="index-banner">
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    <div id="Categorias">


        <!--barra de pesquisa-->
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">search</i>
                        <input id="icon_prefix" type="text" class="validate search">
                        <label for="icon_prefix">Listar categorias e produtos</label>
                    </div></div></form></div>

        <!--descrição do formulário de lista-->

        <div class="row">
            <div class="col s6"><h6 class="left blue-grey-text header">Categorias</h6></div>
        </div>

        <!--lista-->

        <ul class="list collection animated bounceInUp">

            <?php
            //chama e executa ações no banco de dados, passando parametros para a url
            $stmt = $DB_con->prepare('SELECT descricao_categoria, id, nome_categoria FROM categorias ORDER BY id DESC');
            $stmt->execute();

            if($stmt->rowCount() > 0)
            {
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
            extract($row);
            ?>

            <li style="list-style-type: none;" class="collection-item">
                <div class="row lista-produto">
                    <a href="categoria.php?view_id=<?php echo $row['id']; ?>">
                        <div class="col s6 listas-d-produtos"><br>
                            <h5 class="left categoria-produto categoria"><?php echo utf8_encode($nome_categoria) ;?></h5>
                        </div>
                        <div class="col s6 listas-d-produtos"><br>
                                    <span style="margin-bottom: 0" class="btn-large waves-effect waves-light blue darken-3 right white-text">
                                    Exibir
                                    <i class="material-icons right">zoom_in</i>
                                    </span>
                        </div>
                    </a>
                </div>
            </li>

            <?php
            }?>
        </ul>
    </div>

    <script type="text/javascript">

        var options = {
            valueNames: [ 'categoria' ]
        };

        var listadoTwo = new List('Categorias', options);

    </script>

    <?php

    }
    else
    {
    ?>
        <div class="row">
            <span>&nbsp; Nenhum dado localizado em tempo de execução</span>
        </div>
    <?php
    }

    ?>

    <!--botão de voltar ao endereço anterior-->
        <br><br>

        <div class="row center">
        <a href="/sistema" class="round btn-large waves-effect waves-light blue darken-3">
                <i class="material-icons left large">chevron_left</i>
                Voltar &nbsp;
                </a>
        </div>

        <br><br>
       
        <br><br>

    </div>
</div>