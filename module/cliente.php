<?php
require_once (dirname(dirname(__FILE__)) . "/config/function.php");

switch ($screen) {
    case 'Cadastro':
        ?>
        <!-- formulario de cadastro -->
        <form role="form">
            <legend>
                Cadastro de Clientes
            </legend>
            <div class="form-group col-md-12">
                <label>Nome:</label>
                <input type="text" class="form-control" id="nome">
            </div>
            <div class="form-group col-md-12">
                <label for="exampleInputPassword1">Endereço:</label>
                <input type="text" class="form-control" id="endereco">
            </div>
            <div class="form-group col-md-5">
                <label>Bairro:</label>
                <input type="text" class="form-control" id="bairro">
            </div>
            <div class="form-group col-md-5">
                <label>Cidade:</label>
                <input type="text" class="form-control" id="cidade">
            </div>
            <div class="form-group col-md-2">
                <label>Estado:</label>
                <input type="text" class="form-control" id="estado">
            </div>
            <div class="form-group col-md-4">
                <label>CEP:</label>
                <input type="text" class="form-control" id="cep">
            </div>
            <div class="form-group col-md-4">
                <label>Telefone:</label>
                <input type="tel" class="form-control" id="telefone">
            </div>
            <div class="form-group col-md-4">
                <label>Celular:</label>
                <input type="tel" class="form-control" id="celular">
            </div>
            <div class="form-group col-md-6">
                <label>CPF:</label>
                <input type="text" class="form-control" id="cpf">
            </div>
            <div class="form-group col-md-6">
                <label>RG:</label>
                <input type="text" class="form-control" id="rg">
            </div>
            <div class="btn-group">
                <div class="btn-group">
                    <button type="button" class="btn btn-default" name="salvar">
                        <span><img src="img/ok.png" width="16" height="16" /></span>
                        Salvar
                    </button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-default" onclick="location.href = '?module=cliente&screen=listar'">
                        <span><img src="img/cancel.png" width="16" height="16" /></span>
                        Cancelar
                    </button>
                </div>
            </div>
        </form>
        <!-- formulario de cadastro -->
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
                    <th width="15%">CPF:</th>
                    <th width="20%">Telefone:</th>
                    <th width="5%">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0000</td>
                    <td>José</td>
                    <td>999.999.999-99</td>
                    <td>(99)9999-9999</td>
                    <td><img width="16" height="16" src="img/edit.png"><img width="16" height="16" src="img/delete.png"><img width="16" height="16" src="img/search.png"></td>
                </tr>
            </tbody>
        </table>
        <?php
        break;
    case 'modalCliente':
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
                    <th width="70%">Nome:</th>
                    <th width="20%">CPF:</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>José</td>
                    <td>999.999.999-99</td>
                    <td align="center">
                        <a href="?module=pedido&screen=visualiza&id=1">
                            <img width="16" height="16" src="img/user_add.png">
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php
        break;

    default:
        echo '<p>Erro ao acessar "NoScreen", contate o Suporte Técnico</p>';
        break;
}
