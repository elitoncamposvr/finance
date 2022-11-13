<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Financeiro<i class="fas fa-angle-right fa-xs"></i>Contas a Receber<i class="fas fa-angle-right fa-xs"></i>Quitar Conta</h2>
    <span>
        <a class="btn" href="<?php echo BASE_URL; ?>financial/accountsreceivable"><i class="fas fa-angle-double-left"></i> Voltar</a>
    </span>
</div>

<div class="content">
    <!-- Botões (Buttons) -->
    <div class="data_info my-m">
        <p>
            <span class="bold txt-up mr-el">FAVORECIDO: </span><?php echo $accounts_receivable_info['client_name']; ?>
        </p>
        <p>
            <span class="bold">Nº Doc. </span><?php echo $accounts_receivable_info['doc_number']; ?>
        </p>
    </div>

    <form method="POST">
        <div class="w-100 flex txt-up my-3">
            <div class="w-50 my-s mr-el">
                <label for="bank" class="mr-el bold">Descrição:</label>
                <?php echo $accounts_receivable_info['description']; ?>
            </div>
            <div class="w-25 my-s mr-el">
                <label for="value_check" class="mr-el bold">Valor:</label>
                <?php echo number_format($accounts_receivable_info['bill_amount'], 2, ',', '.'); ?>
            </div>
            <div class="w-25 flex my-s">
                <label for="due_date" class="mr-el bold">Vencimento:</label>
                <?php echo date('d/m/Y', strtotime($accounts_receivable_info['due_date'])); ?>
            </div>
        </div>

        <div class="table-line">
            <div class="table-33 my-s mr-m">
                <label for="carrier">Portador</label>
                <select name="carrier" id="carrier" class="w-100 txt-up">
                    <?php foreach ($carrier_list as $cl) : ?>
                        <option value="<?php echo $cl['id']; ?>"><?php echo $cl['carrier_title']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="table-33 my-s mr-el">
                <label for="bill_amount" class="mr-el bold">Valor Pago:</label>
                <input type="text" name="bill_amount" id="bill_amount" class="w-100" value="<?php echo number_format($accounts_receivable_info['bill_amount'], 2, ',', '.'); ?>">
            </div>
            <div class="table-33 my-s mr-el">
                <label for="payday" class="mr-el bold">Data Pagamento:</label>
                <input type="date" name="payday" id="payday" class="w-100" value="<?php echo date('Y-m-d'); ?>">
            </div>
        </div>
        
        
        <!-- Botões (Button) -->
        <div class="w-100 txt-center my-el">
            <button type="submit">
                Quitar Conta
            </button>
        </div>
    </form>

</div>

<!-- Script Dropdown Itens -->
<script src="<?php echo BASE_URL; ?>assets/js/functions.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/general_mask.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script_price.js"></script>