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
        <form class="form-signin" role="form" name="frmUser" id="frmUser" action="" method="post">
            <h2 class="form-signin-heading">Acesso Restrito!</h2>
            <br/>
            <br/>
            <input class="form-control" type="text" name="usuario" id="usuario" autofocus="" required="" placeholder="Usuário..."/>
            <br/>
            <input class="form-control" type="password" name="passwd" id="passwd" required="" placeholder="Senha..."/>
            <br/>
            <button class="btn btn-lg btn-primary btn-block" name="logar" id="logar" type="submit">
                <span><img src="img/ok.png" /></span>
                Login
            </button>
        </form>
        <?php
        break;
    case 'perfil':
        ?> <!-- Formulario para Visualizar o Perfil -->
        <form role="form">
            <legend>
                Perfil do Usuario:
            </legend>
            <div class="form-group col-md-12">
                <label>Nome:</label>
                <input type="text" disabled="disabled" class="form-control" id="nome" value="<?php
                if (isset($user)) {
                    echo $user->nome;
                }
                ?>">
            </div>
            <div class="form-group col-md-12">
                <label>Endereço:</label>
                <input type="text" class="form-control" id="endereco" value="<?php
                if (isset($user)) {
                    echo $user->endereco;
                }
                ?>">
            </div>
            <div class="form-group col-md-5">
                <label>Bairro:</label>
                <input type="text" class="form-control" id="bairro" value="<?php
                if (isset($user)) {
                    echo $user->bairro;
                }
                ?>">
            </div>
            <div class="form-group col-md-5">
                <label>Cidade:</label>
                <input type="text" class="form-control" id="cidade" value="<?php
                if (isset($user)) {
                    echo $user->cidade;
                }
                ?>">
            </div>
            <div class="form-group col-md-2">
                <label>Estado:</label>
                <input type="text" class="form-control" id="estado" value="<?php
                if (isset($user)) {
                    echo $user->estado;
                }
                ?>">
            </div>
            <div class="form-group col-md-4">
                <label>CEP:</label>
                <input type="text" class="form-control" id="cep" value="<?php
                if (isset($user)) {
                    echo $user->cep;
                }
                ?>">
            </div>
            <div class="form-group col-md-4">
                <label>Telefone:</label>
                <input type="tel" class="form-control" id="telefone" value="<?php
                if (isset($user)) {
                    echo $user->telefone;
                }
                ?>">
            </div>
            <div class="form-group col-md-4">
                <label>Celular:</label>
                <input type="tel" class="form-control" id="celular" value="<?php
                if (isset($user)) {
                    echo $user->celular;
                }
                ?>">
            </div>
            <div class="form-group col-md-3">
                <label>CPF:</label>
                <input type="text" disabled="disabled" class="form-control" id="cpf" value="<?php
                if (isset($user)) {
                    echo $user->cpf;
                }
                ?>">
            </div>
            <div class="form-group col-md-3">
                <label>RG:</label>
                <input type="text" disabled="disabled" class="form-control" id="rg" value="<?php
                if (isset($user)) {
                    echo $user->rg;
                }
                ?>">
            </div>
            <div class="form-group col-md-6">
                <label>E-mail:</label>
                <input type="text" class="form-control" id="email" value="<?php
                if (isset($user)) {
                    echo $user->email;
                }
                ?>">
            </div>
            <div class="form-group col-md-3">
                <label>Usuário:</label>
                <input type="text" disabled="disabled" class="form-control" id="usuario" value="<?php
                if (isset($user)) {
                    echo $user->usuario;
                }
                ?>">
            </div>
            <div class="form-group col-md-3">
                <label>Senha:</label>
                <input type="password" class="form-control" id="senha" value="<?php
                if (isset($user)) {
                    echo $user->senha;
                }
                ?>">
            </div>
            <div class="form-group col-md-6">
                <label>Situação:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <input type="checkbox" disabled="disabled" id="status" <?php
                        if (isset($user)) {
                            if ($user->status == 'S') {
                                echo 'checked="checked"';
                            };
                        }
                        ?>
                               > </span>
                    <input type="text" disabled="disabled" class="form-control" id="usuario" value="Usuario Ativo">
                </div>
            </div>
            <div class="btn-group">
                <div class="btn-group">
                    <button type="button" class="btn btn-default" name="salvar">
                        <span><img src="img/ok.png" width="16" height="16" /></span>
                        Salvar
                    </button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default" onclick="location.href = '?'">
                        <span><img src="img/cancel.png" width="16" height="16" /></span>
                        Cancelar
                    </button>
                </div>
            </div>
        </form> <!-- Formulario para Visualizar o Perfil -->
        <?php
        break;
    case 'cadastrar':
        ?> <!-- formulario de cadastro de Usuario -->
        <form role="form">
            <legend>
                Perfil do Usuario:
            </legend>
            <div class="form-group col-md-12">
                <label>Nome:</label>
                <input type="text" class="form-control" id="nome" value="<?php
                if (isset($user)) {
                    echo $user->nome;
                }
                ?>">
            </div>
            <div class="form-group col-md-12">
                <label>Endereço:</label>
                <input type="text" class="form-control" id="endereco" value="<?php
                if (isset($user)) {
                    echo $user->endereco;
                }
                ?>">
            </div>
            <div class="form-group col-md-5">
                <label>Bairro:</label>
                <input type="text" class="form-control" id="bairro" value="<?php
                if (isset($user)) {
                    echo $user->bairro;
                }
                ?>">
            </div>
            <div class="form-group col-md-5">
                <label>Cidade:</label>
                <input type="text" class="form-control" id="cidade" value="<?php
                if (isset($user)) {
                    echo $user->cidade;
                }
                ?>">
            </div>
            <div class="form-group col-md-2">
                <label>Estado:</label>
                <input type="text" class="form-control" id="estado" value="<?php
                if (isset($user)) {
                    echo $user->estado;
                }
                ?>">
            </div>
            <div class="form-group col-md-4">
                <label>CEP:</label>
                <input type="text" class="form-control" id="cep" value="<?php
                if (isset($user)) {
                    echo $user->cep;
                }
                ?>">
            </div>
            <div class="form-group col-md-4">
                <label>Telefone:</label>
                <input type="tel" class="form-control" id="telefone" value="<?php
                if (isset($user)) {
                    echo $user->telefone;
                }
                ?>">
            </div>
            <div class="form-group col-md-4">
                <label>Celular:</label>
                <input type="tel" class="form-control" id="celular" value="<?php
                if (isset($user)) {
                    echo $user->celular;
                }
                ?>">
            </div>
            <div class="form-group col-md-3">
                <label>CPF:</label>
                <input type="text" class="form-control" id="cpf" value="<?php
                if (isset($user)) {
                    echo $user->cpf;
                }
                ?>">
            </div>
            <div class="form-group col-md-3">
                <label>RG:</label>
                <input type="text" class="form-control" id="rg" value="<?php
                if (isset($user)) {
                    echo $user->rg;
                }
                ?>">
            </div>
            <div class="form-group col-md-6">
                <label>E-mail:</label>
                <input type="text" class="form-control" id="email" value="<?php
                if (isset($user)) {
                    echo $user->email;
                }
                ?>">
            </div>
            <div class="form-group col-md-3">
                <label>Usuário:</label>
                <input type="text" class="form-control" id="usuario" value="<?php
                if (isset($user)) {
                    echo $user->usuario;
                }
                ?>">
            </div>
            <div class="form-group col-md-3">
                <label>Senha:</label>
                <input type="password" class="form-control" id="senha" value="<?php
                if (isset($user)) {
                    echo $user->senha;
                }
                ?>">
            </div>
            <div class="form-group col-md-6">
                <label>Situação:</label>
                <div class="input-group">
                    <span class="input-group-addon">
                        <input type="checkbox" id="status" <?php
                        if (isset($user)) {
                            if ($user->status == 'S') {
                                echo 'checked="checked"';
                            };
                        }
                        ?>
                               > </span>
                    <input type="text" disabled="disabled" class="form-control" id="usuario" value="Usuario Ativo">
                </div>
            </div>
            <div class="btn-group">
                <div class="btn-group">
                    <button type="button" class="btn btn-default" name="salvar">
                        <span><img src="img/ok.png" width="16" height="16" /></span>
                        Salvar
                    </button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default" onclick="location.href = '?'">
                        <span><img src="img/cancel.png" width="16" height="16" /></span>
                        Cancelar
                    </button>
                </div>
            </div>
        </form <!-- formulario de cadastro de usuario -->
        <?php
        break;
    case 'listar':
        ?>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#lista").dataTable({
                    "aScrolly": "400px",
                    "bPaginate": false,
                    "aaSorting": [[0, "desc"]]
                });
            });
        </script>
        <legend>
            Lista de Clientes
        </legend>
        <table class="display" cellspacing="0" cellpadding="0" border="0" id="lista">
            <thead>
                <tr>
                    <th width="10%">Codigo:</th>
                    <th width="50%">Nome:</th>
                    <th width="25%">Telefone:</th>
                    <th width="5%">Situação:</th>
                    <th width="10%">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0000</td>
                    <td>José</td>
                    <td>(99)9999-9999</td>
                    <td>Aitvo/Inativo</td>
                    <td align="center">
                        <a href="?module=usuario&screen=editar&useId=0000"><img width="16" height="16" src="img/edit.png"></a>
                        <a href="?module=usuario&screen=delete&useId=0000"><img width="16" height="16" src="img/delete.png"></a>
                        <a href="?module=usuario&screen=perfil&useId=0000"><img width="16" height="16" src="img/search.png"></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php
        break;
    case 'configurar' :
        ?>
        <div class="col-md-12">

            <button class="col-md12 btn btn-default" onclick="location.href = '?module=usuario&screen=cadastrar'" >
                <span> <img src="img/new.png" /> </span>
                Novo Usuario
            </button>
            <button class="col-md12 btn btn-default" onclick="location.href = '?module=usuario&screen=listar'" >
                <span> <img src="img/search.png" /> </span>
                Listar Usuarios
            </button>

            <button class="btn btn-default" onclick="location.href = '?module=produto&screen=cadgrupo'" >
                <span> <img src="img/new.png" /> </span>
                Criar Grupos
            </button>

            <button class="btn btn-default" onclick="location.href = '?module=produto&screen=listgrupo'" >
                <span> <img src="img/search.png" /> </span>
                Listar Grupos
            </button>

            <button class="btn btn-default" onclick="location.href = '?module=produto&screen=cadunidade'" >
                <span> <img src="img/new.png" /> </span>
                Criar Unidades
            </button>

            <button class="btn btn-default" onclick="location.href = '?module=produto&screen=listunidade'" >
                <span> <img src="img/search.png" /> </span>
                Listar Unidades
            </button>
        </div>

        </div>
        <?php
        break;
    default:
        echo '<p>Erro ao acessar "NoScreen", contate o Suporte Técnico</p>';
        break;
}
