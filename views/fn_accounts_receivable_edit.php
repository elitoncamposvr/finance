<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Financeiro<i class="fas fa-angle-right fa-xs"></i>Contas a Receber<i class="fas fa-angle-right fa-xs"></i>Editar</h2>
    <span>
        <a class="btn" href="<?php echo BASE_URL; ?>financial/accountsreceivable"><i class="fas fa-angle-double-left"></i> Voltar</a>
    </span>
</div>

<div class="content">

    <!-- Formulário (Add Form) -->
    <form method="POST">
        <div class="flex w-100">
            <div class="w-50 my-s mr-m">
                <label for="description">Descrição da Conta</label>
                <input type="text" name="description" id="description" class="w-100" value="<?php echo $accounts_receivable_info['description']; ?>" autofocus required>
            </div>
            <div class="w-25 my-s mr-m">
                <label for="bill_amount">Valor</label>
                <input type="text" name="bill_amount" id="bill_amount" class="w-100" value="<?php echo number_format($accounts_receivable_info['bill_amount'], 2, ',', '.'); ?>" required>
            </div>
            <div class="w-25 my-s">
                <label for="doc_number">Número do Documento</label>
                <input type="text" name="doc_number" id="doc_number" class="w-100" value="<?php echo $accounts_receivable_info['doc_number']; ?>">
            </div>
        </div>
        <div class="flex w-100">
            <div class="w-40 my-s mr-m">
                <label for="client_name">Cliente</label>
                <select name="client_name" id="client_name" class="w-100">
                <?php foreach ($clients_list as $c) : ?>
						<option value="<?php echo $c['id']; ?>" <?php if ($accounts_receivable_info['client_name'] == $c['id']) {
																		echo 'selected="selected"';
																	} else {
																		echo '';
																	} ?>><?php echo $c['client_name']; ?></option>
					<?php endforeach; ?>
                </select>
            </div>
            <div class="w-20 my-s mr-m">
                <label for="account_category">Categoria</label>
                <select name="account_category" id="account_category" class="w-100">
                    <optgroup id="receivable" class="c_info receivable" label="Entrada [+]">
                    <option value="Vendas" <?php echo ($accounts_receivable_info['account_category'] == 'Vendas') ? 'selected="selected"' : ''; ?>>Vendas</option>
                    <option value="Ordem de Serviço" <?php echo ($accounts_receivable_info['account_category'] == 'Ordem de Serviço') ? 'selected="selected"' : ''; ?>>Ordem de Serviço</option>
                    <option value="Boletos" <?php echo ($accounts_receivable_info['account_category'] == 'Boletos') ? 'selected="selected"' : ''; ?>>Boletos</option>
                    <option value="Devoluções de Compra" <?php echo ($accounts_receivable_info['account_category'] == 'Devoluções de Compra') ? 'selected="selected"' : ''; ?>>Devoluções de Compra</option>
                    <option value="Transferências" <?php echo ($accounts_receivable_info['account_category'] == 'Transferências') ? 'selected="selected"' : ''; ?>>Transferências</option>
                    <option value="Outras Entradas" <?php echo ($accounts_receivable_info['account_category'] == 'Outras Entradas') ? 'selected="selected"' : ''; ?>>Outras Entradas</option>
                    </optgroup>
                </select>
            </div>
            <div class="w-20 my-s mr-m">
                <label for="release_date_of">Data de Lançamento</label>
                <input type="date" name="release_date_of" id="release_date_of" value="<?php echo $accounts_receivable_info['release_date_of']; ?>" class="w-100">
            </div>
            <div class="w-20 my-s">
                <label for="due_date">Data de Vencimento</label>
                <input type="date" name="due_date" id="due_date" value="<?php echo $accounts_receivable_info['due_date']; ?>" class="w-100">
            </div>
        </div>
        <div class="w-100">
            <label for="aditional_info">Observações</label>
            <textarea name="aditional_info" id="aditional_info" class="w-100" cols="30" rows="10"><?php echo $accounts_receivable_info['aditional_info']; ?></textarea>
        </div>

        <!-- Botões (Button) -->
        <div class="w-100 txt-center my-el">
            <button type="submit">
                Editar Conta
            </button>
        </div>
    </form>
</div>

<!-- SCRIPTS JS -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/general_mask.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script_price.js"></script>