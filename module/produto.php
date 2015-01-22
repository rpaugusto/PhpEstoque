<?php
require_once (dirname(dirname(__FILE__)) . "/config/function.php");

switch ($screen) {
    case 'cadastrar':
        ?>
        <!-- formulario de cadastro -->
        <form role="form">
            <legend>
                Cadastro de Produtos
            </legend>
            <div class="form-group col-md-2">
                <label>Codigo:</label>
                <input type="text" class="form-control disabled" id="codigo">
            </div>
            <div class="form-group col-md-8">
                <label>Descrição:</label>
                <input type="text" class="form-control disabled" id="descrcao">
            </div>
            <div class="form-group col-md-2">
                <label>Unidade:</label>
                <select class="form-control" id="unidade"></select>
            </div>
            <div class="form-group col-md-4">
                <label>Cod. Barra:</label>
                <input type="text" class="form-control" id="codbar">
            </div>
            <div class="form-group col-md-2">
                <label>Grupo:</label>
                <select class="form-control" id="grupo"></select>
            </div>
            <div class="form-group col-md-6">
                <label>Fornecedor:</label>
                <select class="form-control" id="subgrupo"></select>
            </div>
            <div class="form-group col-md-3">
                <label>Preço de Custo:</label>
                <div class="input-group">
                    <span class="input-group-addon">R$</span>
                    <input type="text" class="form-control" id="precusto">
                </div>
            </div>
            <div class="form-group col-md-2">
                <label>Margem:</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="lucro">
                    <span class="input-group-addon">%</span>
                </div>
            </div>
            <div class="form-group col-md-3">
                <label>Preço de Venda:</label>
                <div class="input-group">
                    <span class="input-group-addon">R$</span>
                    <input type="text" class="form-control" id="prevenda">
                </div>
            </div>
            <div class="form-group col-md-2">
                <label>Desconto %:</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="desconto">
                    <span class="input-group-addon">%</span>
                </div>
            </div>
            <div class="form-group col-md-2">
                <label>Est. Minimo:</label>
                <input type="text" class="form-control" id="estoque">
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
    /* cadastrar */
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
            Listagem de Produtos
        </legend>
        <table class="display" cellspacing="0" cellpadding="0" border="0" id="lista">
            <thead>
                <tr>
                    <th width="10%">Codigo:</th>
                    <th width="65%">Prdotudo:</th>
                    <th width="10%">Valor:</th>
                    <th width="10%">Estoque:</th>
                    <th width="5%">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0000</td>
                    <td>Calça Jeans</td>
                    <td>R$ 145,50</td>
                    <td>15</td>
                    <td align="center">
                        <a href="?module=produto&screen=editar&proId=0000"><img width="16" height="16" src="img/edit.png"></a>
                        <a href="?module=produto&screen=delete&proId=0000"><img width="16" height="16" src="img/delete.png"></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php
        break;
    /* listar */
    case 'cadgrupo':
        ?>
        <!-- formulario de cad. grupo -->
        <form role="form">
            <legend>
                Cadastro de Grupos
            </legend>
            <div class="form-group col-md-2">
                <label>Codigo:</label>
                <input type="text" class="form-control disabled" id="codigo">
            </div>
            <div class="form-group col-md-6">
                <label>Grupo:</label>
                <input type="text" class="form-control disabled" id="grupo">
            </div>
            <div class="form-group col-md-4">

                <div class="input-group">
                    <span class="input-group-addon">
                        <input type="radio" id="opcao" name="opcao"/>
                    </span>
                    <input type="text" disabled="disabled" class="form-control" value="Produto">
                </div>

                <div class="input-group">
                    <span class="input-group-addon">
                        <input type="radio" id="opcao" name="opcao"/>
                    </span>
                    <input type="text" disabled="disabled" class="form-control" value="Fornecedor">
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
        </form> <!-- formulario de cad. grupo -->
        <hr>
        <div class="row"> <!-- lista de cad. grupo -->
            <div class="col-md-12">
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
                    Listagem de Grupos
                </legend>
                <table class="display" cellspacing="0" cellpadding="0" border="0" id="lista">
                    <thead>
                        <tr>
                            <th width="10%">Codigo:</th>
                            <th width="60%">Grupo:</th>
                            <th width="20%">Pertence:</th>
                            <th width="10%">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0000</td>
                            <td>Grupo do produto</td>
                            <td>Produto</td>
                            <td><img width="16" height="16" src="img/edit.png"><img width="16" height="16" src="img/delete.png"><img width="16" height="16" src="img/search.png"></td>
                        </tr>
                        <tr>
                            <td>0001</td>
                            <td>Grupo do fornecedor</td>
                            <td>Fornecedor</td>
                            <td><img width="16" height="16" src="img/edit.png"><img width="16" height="16" src="img/delete.png"><img width="16" height="16" src="img/search.png"></td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- lista de cad. grupo -->
        </div>
        <<?php
        break; /* cad. grupos */
    case 'cadunidade':
        ?>
        <form role="form"> <!-- formulario de cad. unidade -->
            <legend>
                Cadastro de Grupos
            </legend>
            <div class="form-group col-md-2">
                <label>Codigo:</label>
                <input type="text" class="form-control disabled" id="codigo">
            </div>
            <div class="form-group col-md-2">
                <label>Sigla:</label>
                <input type="text" class="form-control disabled" id="sigla">
            </div>
            <div class="form-group col-md-8">
                <label>Descrição da sigla:</label>
                <input type="text" class="form-control disabled" id="descsigla">
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
        </form> <!-- formulario de cad. unidade -->
        <hr>
        <div class="row"> <!-- lista de cad. unidade -->
            <div class="col-md-12">
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
                    Listagem de Unidade
                </legend>
                <table class="display" cellspacing="0" cellpadding="0" border="0" id="lista">
                    <thead>
                        <tr>
                            <th width="10%">Codigo:</th>
                            <th width="10%">Sigla:</th>
                            <th width="70%">Descritivo:</th>
                            <th width="10%">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0000</td>
                            <td>UN</td>
                            <td>Unidade</td>

                            <td><img width="16" height="16" src="img/edit.png"><img width="16" height="16" src="img/delete.png"><img width="16" height="16" src="img/search.png"></td>
                        </tr>
                        <tr>
                            <td>0001</td>
                            <td>CX</td>
                            <td>Caixa</td>

                            <td><img width="16" height="16" src="img/edit.png"><img width="16" height="16" src="img/delete.png"><img width="16" height="16" src="img/search.png"></td>
                        </tr>
                    </tbody>
                </table>

            </div><!-- lista de cad. unidade -->
        </div>
        <?php
        break; /* cad. unidade */
    case 'modalProduto' :
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
            Lista de Produtos
        </legend>
        <table class="display" cellspacing="0" cellpadding="0" border="0" id="lista">
            <thead>
                <tr>
                    <th width="75%">Prdotudo:</th>
                    <th width="20%">Valor:</th>
                    <th width="5%">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Calça Jeans</td>
                    <td>R$ 145,50</td>
                    <td align="center">
                        <a href="?produto=id&qtd=0"><img width="16" height="16" src="img/add.png"></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php
        break;
    default:
        echo '<p>Erro ao acessar "' . $screen . '", contate o Suporte Técnico</p>';
        break;
}
