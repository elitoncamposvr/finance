<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Financeiro<i class="fas fa-angle-right fa-xs"></i>Contas a Pagar<i class="fas fa-angle-right fa-xs"></i>Visualizar</h2>
    <span>
        <a class="btn" href="<?php echo BASE_URL; ?>financial/accountspayable"><i class="fas fa-angle-double-left"></i> Voltar</a>
    </span>
</div>

<div class="content">
    <!-- Botões (Buttons) -->
    <div class="data_info my-m">
        <p>
            <span class="bold txt-up mr-el">FAVORECIDO: </span><?php echo $accounts_payable_info['name_provider']; ?>
        </p>
        <?php if ($accounts_payable_info['payment_status'] == '1') { ?>
            <span>
                <a href="<?php echo BASE_URL; ?>financial/accountspayable_topayoff/<?php echo $accounts_payable_info['id']; ?>" class="btn_sec">Quitar Conta</a>
                <a href="<?php echo BASE_URL; ?>financial/accountspayable_edit/<?php echo $accounts_payable_info['id']; ?>" class="btn">Editar Conta</a>
            </span>
        <?php } ?>
    </div>


    <div class="w-100 flex txt-up my-3">
        <div class="w-50 my-s mr-el">
            <label for="bank" class="mr-el bold">Descrição:</label>
            <?php echo $accounts_payable_info['description']; ?>
        </div>
        <div class="w-25 my-s mr-el">
            <label for="value_check" class="mr-el bold">Valor:</label>
            <?php echo number_format($accounts_payable_info['bill_amount'], 2, ',', '.'); ?>
        </div>
        <div class="w-25 flex my-s">
            <label for="in_box" class="mr-el bold">nº Doc:</label>
            <?php echo $accounts_payable_info['doc_number']; ?>
        </div>
    </div>
    <div class="w-100 flex txt-up my-3">
        <div class="w-25 my-s mr-el">
            <label for="issuance_date" class="mr-el bold">Emissão:</label>
            <?php echo date('d/m/Y', strtotime($accounts_payable_info['release_date_of'])); ?>
        </div>
        <div class="w-25 my-s mr-el">
            <label for="due_date" class="mr-el bold">Vencimento:</label>
            <?php echo date('d/m/Y', strtotime($accounts_payable_info['due_date'])); ?>
        </div>
        <div class="w-25 my-s mr-el">
            <label for="due_date" class="mr-el bold">Categoria:</label>
            <?php echo $accounts_payable_info['account_category']; ?>
        </div>
        <div class="w-25 my-s">
            <label for="regarding" class="mr-el bold">ID Transação:</label>
            <?php echo $accounts_payable_info['id_transaction']; ?>
        </div>
    </div>
    <div class="w-100 flex txt-up">
        <label for="aditional_info" class="mr-el bold">Observações:</label>
        <?php echo $accounts_payable_info['aditional_info']; ?>
    </div>
</div>