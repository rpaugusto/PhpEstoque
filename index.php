<!DOCTYPE html>
<?php
require_once 'config/function.php';
?>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema de Estoque - v1.0.1</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/general.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
        <?php
            loadMODULE('usuario', 'login');
        ?>    
        </div>
        
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>