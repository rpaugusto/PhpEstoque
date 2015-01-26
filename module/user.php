<?php
require_once (dirname(dirname(__FILE__)) . "/config/function.php");

switch ($screen) {
    case 'login':
        if (isset($_POST['logar'])) {
            $login = $_POST['usuario'];
            $passwd = $_POST['passwd'];
            doLogIn($login, $passwd);
        }
        ?>
        <form class="form-signin" role="form" action="" method="post">
            <h2 class="form-signin-heading">Acesso Restrito!</h2><br/><br/>
            <input class="form-control" type="text" name="usuario" id="usuario" autofocus="" required="" placeholder="Usuário..."/><br/>
            <input class="form-control" type="password" name="passwd" id="passwd" required="" placeholder="Senha..."/><br/>
            <button class="btn btn-lg btn-primary btn-block" name="logar" id="logar" type="submit">
                <span><img src="img/ok.png" /></span>
                Login
            </button>
        </form>
        <?php
        break;
    case 'perfil':
        echo '<h2>Perfil do Usuário</h2>';
        break;
    case 'listar':
        echo '<h2>Lisata de usuario</h2>';
        break;
    default:
        echo '<p>Erro ao acessar "NoScreen", contate o Suporte Técnico</p>';
        break;
}