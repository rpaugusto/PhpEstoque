<?php
require_once (dirname(dirname(__FILE__)) . "/config/function.php");

switch ($screen) {
    case 'visualiza':
        if (isset($_GET['id'])){
            
        }
        ?> <!-- formulario de pedido -->
        <form>
            <div class="row">
                <div class="col-md-2">
                    <label>Codigo:</label>
                    <input type="text" class="form-control" id="codigo" value="<?php
                    if (isset($_GET['id'])) {
                        echo $_GET['id'];
                    } else {
                        echo 'codigo';
                    }
                    ?>" disabled="disabled" />
                </div>
                <div class="form-group col-md-8">
                    <label>Cliente:</label>
                    <input type="text" class="form-control" id="cliente" value="<?php
                    if (isset($_GET['id'])) {
                        echo $_GET['id'];
                    } else {
                        echo 'cliente';
                    }
                    ?>" disabled="disabled" />
                </div>
                <div class="col-md-2">
                    <label>Data:</label>
                    <input type="text" class="form-control" id="data" value="<?php
                    if (isset($_GET['id'])) {
                        echo $_GET['id'];
                    } else {
                        echo 'data';
                    }
                    ?>" disabled="disabled" />
                </div>
            </div>
            <div class="row">
                <div class="right col-md-6">
                    <button type="button" class="btn btn-default"  <?php
                    if (isset($_GET['id'])) {
                        echo 'disabled="disabled"';
                    }
                    ?> data-toggle="modal" data-target="#modalCliente" />
                    <span><img src="img/new.png" width="32" height="32" /></span>
                    Novo Pedido
                    </button>
                    <button type="button" class="btn btn-default" onclick="location.href = '?module=pedido&screen=cancela&id=<?php echo $_GET['id'];?>'" <?php
                    if (!isset($_GET['id'])) {
                        echo 'disabled="disabled"';
                    }
                    ?> />
                    <span><img src="img/delete.png" width="32" height="32" /></span>
                    Cancelar Pedido
                    </button>
                    <button type="button" class="btn btn-default"  <?php
                    if (!isset($_GET['id'])) {
                        echo 'disabled="disabled"';
                    }
                    ?> data-toggle="modal" data-target="#modalProduto" />
                    <span><img src="img/add.png" width="32" height="32" /></span>
                    Adicionar Produto
                    </button>
                </div>
                <div class="col-md-3 right">

                </div>
                <div class="col-md-3 right">
                    <label>Total do Pedido:</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            R$
                        </span>
                        <input type="text" class="form-control" id="cliente" value="total"/>
                    </div>
                </div>
            </div>    
        </form> <!-- formulario de pedido -->

        <div class="modal fade" id="modalCliente"> <!-- /.modal -->
            <div class="modal-dialog"> <!-- /.modal-dialog -->
                <div class="modal-content"> <!-- /.modal-content -->
                    <div class="modal-body">
                        <?php
                        loadMODULE('cliente', 'modalCliente');
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        <div class="modal fade" id="modalProduto"> <!-- /.modal -->
            <div class="modal-dialog"> <!-- /.modal-dialog -->
                <div class="modal-content"> <!-- /.modal-content -->
                    <div class="modal-header">
                    </div><!--.header-->
                    <div class="modal-body">
                        <?php
                        loadMODULE('produto', 'modalProduto');
                        ?>
                    </div><!--.body-->
                    <div class="modal-footer">
                    </div><!--.footer-->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="row"> <!-- divindo a tela -->
            <span class="divider"><hr/></span>
        </div> <!-- divindo a tela -->
        <div class="row"><!-- lista dos produtos -->
            <table class="table table-bordered" cellspacing="0" cellpadding="0" border="0" id="lista">
                <thead>
                    <tr>
                        <th width="10%">Item:</th>
                        <th width="55%">Produto:</th>
                        <th width="10%">Qtde:</th>
                        <th width="10%">Valor:</th>
                        <th width="10%">Total:</th>
                        <th width="5%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">0001</td>
                        <td>Cadreno de anotações</td>
                        <td align="center">100</td>
                        <td align="center">1,50</td>
                        <td align="center"> 150,00</td>
                        <td align="center">
                            <img width="16" height="16" src="img/cancel.png">
                        </td>
                    </tr>
                    <tr>
                        <td align="center">0002</td>
                        <td>Cadreno de anotações</td>
                        <td align="center">100</td>
                        <td align="center">1,50</td>
                        <td align="center"> 150,00</td>
                        <td align="center">
                            <img width="16" height="16" src="img/cancel.png">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div><!-- lista dos produtos -->
        <?php
        break;
    case 'cancela':
        if (isset($_GET['id'])){
            echo 'cancelado com sucesso!';
        }
        break;
    default:
        echo '<p>Erro ao acessar "NoScreen", contate o Suporte Técnico</p>';
        break;
}
