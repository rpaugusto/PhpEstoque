<?php
require_once (dirname(dirname(__FILE__)) . "/config/function.php");

switch ($screen) {
    case 'Cadastro':
        ?>
        <!-- formulario de cadastro -->
        <form role="form">
            <legend>Cadastro de Fornecedores</legend>
            <div class="form-group col-md-12">
                <label>Razão Social:</label>
                <input type="text" class="form-control" id="rsocial">
            </div>
            <div class="form-group col-md-12">
                <label>Nome Fantasia:</label>
                <input type="text" class="form-control" id="fantasia">
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
                <label>CNPJ:</label>
                <input type="text" class="form-control" id="cnpj">
            </div>
            <div class="form-group col-md-4">
                <label>I.E.:</label>
                <input type="text" class="form-control" id="ie">
            </div>
            <div class="form-group col-md-8">
                <label>Representante:</label>
                <input type="tel" class="form-control" id="representante">
            </div>
            <div class="form-group col-md-4">
                <label>Telefone:</label>
                <input type="tel" class="form-control" id="reptelefeone">
            </div>
            <div class="form-group col-md-12">
                <label>Informações Adicionais:</label>
                <div class="control">
                    <textarea class="form-control" id="info"></textarea>
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
        <legend>Listagem de Fornecedores</legend>
        <table class="display" cellspacing="0" cellpadding="0" border="0" id="lista">
            <thead>
                <tr>
                    <th width="10%">Codigo:</th>
                    <th width="40%">Nome Fantasia:</th>
                    <th width="30%">Representante:</th>
                    <th width="15%">Telefone:</th>
                    <th width="5%">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0000</td>
                    <td>VestSul Moda Shopping</td>
                    <td>Joaquin da Silva</td>
                    <td>(99)9999-9999</td>
                    <td>
                        <img width="16" height="16" src="img/edit.png">
                        <img width="16" height="16" src="img/delete.png">
                        <img width="16" height="16" src="img/search.png">
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