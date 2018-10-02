<?php

require_once 'header.php';
require_once 'titles.php';
require_once 'conexao.php';

?>

<body>


<nav class="blue darken-3" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">
         <?php echo $title_Details_Products ;?>
        </a>

        <?php require_once "nav_menu.php" ;?>

    </div>
</nav>

<!--fim da barra de navegação-->

<!--começo do conteúdo-->

<?php require_once "produto_c.php" ;?>

<!--final do conteúdo-->

<?php

require_once "footer.php"

;?>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>
