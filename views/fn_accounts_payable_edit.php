<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Financeiro<i class="fas fa-angle-right fa-xs"></i>Contas a Pagar<i class="fas fa-angle-right fa-xs"></i>Editar</h2>
    <span>
        <a class="btn" href="<?php echo BASE_URL; ?>financial/accountspayable"><i class="fas fa-angle-double-left"></i> Voltar</a>
    </span>
</div>

<div class="content">

    <!-- Formulário (Add Form) -->
    <form method="POST">
        <div class="flex w-100">
            <div class="w-50 my-s mr-m">
                <label for="description">Descrição da Conta</label>
                <input type="text" name="description" id="description" class="w-100" value="<?php echo $accounts_payable_info['description']; ?>" required autofocus>
            </div>
            <div class="w-25 my-s mr-m">
                <label for="bill_amount">Valor</label>
                <input type="text" name="bill_amount" id="bill_amount" class="w-100" value="<?php echo number_format($accounts_payable_info['bill_amount'], 2, ',', '.'); ?>">
            </div>
            <div class="w-25 my-s">
                <label for="doc_number">Número do Documento</label>
                <input type="text" name="doc_number" id="doc_number" class="w-100" value="<?php echo $accounts_payable_info['doc_number']; ?>">
            </div>
        </div>
        <div class="flex w-100">
            <div class="w-25 my-s mr-m">
                <label for="account_category">Categoria</label>
                <select name="account_category" id="account_category" class="w-100">
                    <optgroup id="payable" class="c_danger payable" label="Saída [-]">
                        <option value="Boletos" <?php echo ($accounts_payable_info['account_category'] == 'Boletos') ? 'selected="selected"' : ''; ?>>Boletos</option>
                        <option value="Compras" <?php echo ($accounts_payable_info['account_category'] == 'Compras') ? 'selected="selected"' : ''; ?>>Compras</option>
                        <option value="Despesa com Pessoal" <?php echo ($accounts_payable_info['account_category'] == 'Despesa com Pessoal') ? 'selected="selected"' : ''; ?>>Despesa com Pessoal</option>
                        <option value="Despesa de venda" <?php echo ($accounts_payable_info['account_category'] == 'Despesa de venda') ? 'selected="selected"' : ''; ?>>Despesa de venda</option>
                        <option value="Despesa de venda" <?php echo ($accounts_payable_info['account_category'] == 'Despesa de venda') ? 'selected="selected"' : ''; ?>>Despesa de venda</option>
                        <option value="Despesa Fixas/Administrativas" <?php echo ($accounts_payable_info['account_category'] == 'Despesa Fixas/Administrativas') ? 'selected="selected"' : ''; ?>>Despesa Fixas/Administrativas</option>
                        <option value="Imposto/Taxa" <?php echo ($accounts_payable_info['account_category'] == 'Imposto/Taxa') ? 'selected="selected"' : ''; ?>>Imposto/Taxa</option>
                        <option value="Propaganda/Publicidade" <?php echo ($accounts_payable_info['account_category'] == 'Propaganda/Publicidade') ? 'selected="selected"' : ''; ?>>Propaganda/Publicidade</option>
                        <option value="Serviços de Terceiros" <?php echo ($accounts_payable_info['account_category'] == 'Serviços de Terceiros') ? 'selected="selected"' : ''; ?>>Serviços de Terceiros</option>
                        <option value="Transferências" <?php echo ($accounts_payable_info['account_category'] == 'Transferências') ? 'selected="selected"' : ''; ?>>Transferências</option>
                        <option value="Outros" <?php echo ($accounts_payable_info['account_category'] == 'Outros') ? 'selected="selected"' : ''; ?>>Outros</option>
                    </optgroup>
                </select>
            </div>
            <div class="w-25 my-s mr-m">
                <label for="release_date_of">Data de Lançamento</label>
                <input type="date" name="release_date_of" id="release_date_of" value="<?php echo $accounts_payable_info['release_date_of']; ?>" class="w-100">
            </div>
            <div class="w-25 my-s mr-m">
                <label for="due_date">Data de Vencimento</label>
                <input type="date" name="due_date" id="due_date" value="<?php echo $accounts_payable_info['due_date']; ?>" class="w-100">
            </div>
        </div>
        <div class="flex w-100">
            <div class="w-50 my-s mr-m">
                <label for="supplier">Fornecedor</label>
                <select name="supplier" id="supplier" class="w-100">
                <?php foreach ($provider_list as $pd) : ?>
						<option value="<?php echo $pd['id']; ?>" <?php if ($accounts_payable_info['supplier'] == $pd['id']) {
																		echo 'selected="selected"';
																	} else {
																		echo '';
																	} ?>><?php echo $pd['name_provider']; ?></option>
					<?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="w-100">
            <label for="aditional_info">Observações</label>
            <textarea name="aditional_info" id="aditional_info" class="w-100" cols="30" rows="10"><?php echo $accounts_payable_info['aditional_info']; ?></textarea>
        </div>

        <!-- Botão (Button) -->
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
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/change_items.js"></script>