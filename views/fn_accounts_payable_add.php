<!-- Breadcrumbs -->
<div class="breadcrumb">
        <h2>Financeiro<i class="fas fa-angle-right fa-xs"></i>Contas a Pagar<i class="fas fa-angle-right fa-xs"></i>Adicionar</h2>
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
                <input type="text" name="description" id="description" class="w-100" autofocus required>
            </div>
            <div class="w-25 my-s mr-m">
                <label for="bill_amount">Valor</label>
                <input type="text" name="bill_amount" id="bill_amount" class="w-100" required>
            </div>
            <div class="w-25 my-s">
                <label for="doc_number">Número do Documento</label>
                <input type="text" name="doc_number" id="doc_number" class="w-100">
            </div>
        </div>
        <div class="flex w-100">
            <div class="w-25 my-s mr-m">
                <label for="account_category">Categoria</label>
                <select name="account_category" id="account_category" class="w-100">
                    <optgroup id="payable" class="c_danger payable" label="Saída [-]">
                        <option value="Boletos">Boletos</option>
                        <option value="Compras">Compras</option>
                        <option value="Despesa com Pessoal">Despesa com Pessoal</option>
                        <option value="Despesa com Venda">Despesa de venda</option>
                        <option value="Despesas Fixas e Administrativas">Despesa Fixas/Administrativas</option>
                        <option value="Imposto/Taxa">Imposto/Taxa</option>
                        <option value="Propaganda e Publicidade">Propaganda/Publicidade</option>
                        <option value="Serviçoes de Terceiros">Serviços de Terceiros</option>
                        <option value="Transferências">Transferências</option>
                        <option value="Outros">Outros</option>
                    </optgroup>
                </select>
            </div>
            <div class="w-25 my-s mr-m">
                <label for="release_date_of">Data de Lançamento</label>
                <input type="date" name="release_date_of" id="release_date_of" value="<?= date("Y-m-d"); ?>" class="w-100">
            </div>
            <div class="w-25 my-s mr-m">
                <label for="due_date">Data de Vencimento</label>
                <input type="date" name="due_date" id="due_date" value="<?= date("Y-m-d"); ?>" class="w-100">
            </div>
        </div>
        <div class="flex w-100">
            <div class="w-50 my-s mr-m">
                <label for="supplier">Fornecedor</label>
                <select name="supplier" id="supplier" class="w-100">
                    <?php foreach ($provider_list as $pd) : ?>
                        <option value="<?php echo $pd['id']; ?>"><?php echo $pd['name_provider']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="w-100">
            <label for="aditional_info">Observações</label>
            <textarea name="aditional_info" id="aditional_info" class="w-100" cols="30" rows="10"></textarea>
        </div>

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