<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Financeiro<i class="fas fa-angle-right fa-xs"></i>Adicionar</h2>
    <span>
        <a class="btn" href="<?php echo BASE_URL; ?>financial"><i class="fas fa-angle-double-left"></i> Voltar</a>
    </span>
</div>

<div class="content">

    <!-- Formulário (Add Form) -->
    <form method="POST">
        <div class="table-line">
            <div class="table-50 my-s space-input">
                <label for="description">Descrição da Conta</label>
                <input type="text" name="description" id="description" class="w-100" autofocus>
            </div>
            <div class="table-50 my-s">
                <label for="supplier">Fornecedor</label>
                <select name="supplier" id="supplier" class="w-100">
                    <?php foreach ($provider_list as $pd) : ?>
                        <option value="<?php echo $pd['id']; ?>"><?php echo $pd['name_provider']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

        </div>
        <div class="table-line">
            <div class="table-20 my-s space-input">
                <label for="account_type">Tipo de Conta</label>
                <select name="account_type" id="account_type" class="w-100 change_type">
                    <option class="c_danger" value="1" id="payable">Saída</option>
                    <option class="c_info" value="2" id="receivable">Entrada</option>
                    <option class="c_success" value="3" id="balance">Saldo</option>
                </select>
            </div>
            <div class="table-20 my-s space-input">
                <label for="account_category">Categoria</label>
                <select name="account_category" id="account_category" class="w-100">
                    <option value="Sem Categoria">Sem Categoria</option>
                    <optgroup id="payable" class="c_danger payable hide" label="Saída [-]">
                        <option value="Boletos">Boletos</option>
                        <option value="Compras">Compras</option>
                        <option value="Despesa com Pessoal">Despesa com Pessoal</option>
                        <option value="Despesa com Venda">Despesa de venda</option>
                        <option value="Despesas Fixas e Administrativas">Despesa Fixas e Administrativas</option>
                        <option value="Imposto/Taxa">Imposto/Taxa</option>
                        <option value="Propaganda e Publicidade">Propaganda e Publicidade</option>
                        <option value="Serviçoes de Terceiros">Serviços de Terceiros</option>
                        <option value="Transferências">Transferências</option>
                    </optgroup>
                    <optgroup id="receivable" class="c_info receivable hide" label="Entrada [+]">
                        <option value="Vendas">Vendas</option>
                        <option value="Ordem de Serviço">Ordem de Serviços</option>
                        <option value="Boletos">Boletos</option>
                        <option value="Devoluções de Compra">Devoluções de Compra</option>
                        <option value="Transferências">Transferências</option>
                        <option value="Outras Entradas">Outras Entradas</option>
                    </optgroup>
                </select>
            </div>
            <div class="table-20 my-s space-input">
                <label for="bill_amount">Valor</label>
                <input type="text" name="bill_amount" id="bill_amount" class="w-100">
            </div>
            <div class="table-20 my-s space-input">
                <label for="doc_number">Número do Documento</label>
                <input type="text" name="doc_number" id="doc_number" class="w-100">
            </div>
            <div class="table-20 my-s">
                <label for="carrier">Portador</label>
                <select name="carrier" id="carrier" class="w-100 txt-up">
                    <?php foreach ($carrier_list as $cl) : ?>
                        <option value="<?php echo $cl['id']; ?>"><?php echo $cl['carrier_title']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

        </div>
        <div class="w-100">
            <label for="aditional_info">Observações</label>
            <textarea name="aditional_info" id="aditional_info" class="w-100" cols="30" rows="10"></textarea>
        </div>

        <!-- Botão (Button) -->
        <!-- Botões (Button) -->
        <div class="w-100 txt-center my-el">
            <button type="submit">
                Adicionar Conta
            </button>
        </div>
    </form>
</div>

<!-- SCRIPTS JS -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/general_mask.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script_price.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/change_items.js"></script>