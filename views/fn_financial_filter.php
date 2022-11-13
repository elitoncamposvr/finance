<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Financeiro <i class="fas fa-angle-right fa-xs"></i> Filtragem</h2>
    <span>
        <a class="btn" href="<?php echo BASE_URL; ?>financial"><i class="fas fa-angle-double-left"></i> Voltar</a>
    </span>
</div>

<div class="content">

    <!-- Botões (Buttons) -->
    <div class="menu_data">
        <span>
        </span>
        <span>
            <a href="#" class="btn" onclick="PrintDiv()"><i class="fas fa-print"></i></a>
            <a class="btn" href="#" onclick="itemShow()"><i class="fa-solid fa-filter"></i> Filtrar</a>
        </span>
    </div>

    <!-- Parâmetros do Filtro (Filter Params) -->
    <div class="menu_data-filter flex" id="item_toggle">
        <form action="<?php echo BASE_URL; ?>financial/financial_filter" method="get" class="flex w-100">
            <p class="w-30 mr-el">
                <select name="account_type" id="account_type" class="table-100">
                    <option value="3">Todas</option>
                    <option value="1">Positivas</option>
                    <option value="2">Negativas</option>
                </select>
            </p>
            <p class="w-50 txt-center">
                Período <input type="date" name="period1" id="period1" value="<?php echo date('Y-m-01'); ?>">
                até <input type="date" name="period2" id="period2" value="<?php echo date('Y-m-d'); ?>">
            </p>
            <p class=" w-15 txt-center">
                <input type="submit" value="Filtrar">
            </p>
        </form>
    </div>

    <div id="printarea">
        <div class="title_list my-3">
            <p title_list>Lançamentos do período <?php echo date('d/m/Y', strtotime($_GET['period1'])); ?> à <?php echo date('d/m/Y', strtotime($_GET['period2'])); ?></p>
        </div>

        <div class="table_header">
            <div class="table-5"></div>
            <div class="table-40">DESCRIÇÃO</div>
            <div class="table-15">Valor</div>
            <div class="table-15">Data</div>
            <div class="table-20">ID Transação</div>
            <div class="table-5"></div>
        </div>

        <?php if ($filter_list) : ?>
            <?php foreach ($filter_list as $fl) : ?>
                <div class="table_data <?php if ($fl['account_type'] == '1') {
                                            echo 'icon_positive';
                                        } else {
                                            echo 'icon_negative';
                                        } ?>">
                    <div class="table-5 txt-center"><?php if ($fl['account_type'] == '1') {
                                                        echo '<i class="fa-solid fa-arrow-up icon_positive mb-976-hide"></i>';
                                                    } else {
                                                        echo '<i class="fa-solid fa-arrow-down icon_negative mb-976-hide"></i>';
                                                    } ?></div>
                    <div class="table-40 txt-up"><span class="table-title-mobile">Descrição:</span><?php echo $fl['description']; ?></div>
                    <div class="table-15 txt-up"><span class="table-title-mobile">Valor: </span>R$ <?php echo number_format($fl['bill_amount'], 2, ',', '.'); ?></div>
                    <div class="table-15 txt-up"><span class="table-title-mobile">Data:</span><?php echo date('d/m/Y', strtotime($fl['payday'])); ?></div>
                    <div class="table-20 txt-up"><span class="table-title-mobile">ID Transação:</span><?php echo $fl['id_transaction']; ?></div>
                    <div class="w-5 table-options txt-right">
                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>financial/bills_view/<?php echo $fl['id']; ?>"><i class="fas fa-eye"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>

        <?php else : ?>
            <div class="flash_info my-x">
                <p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum registro encontrado!</span>
            </div>
        <?php endif; ?>
    </div>
</div>


<!-- Script Dropdown Itens -->
<script src="<?php echo BASE_URL; ?>assets/js/dropdown_itens.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/functions.js"></script>

<script type="text/javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('printarea');
        var popupWin = window.open('', '_blank');
        popupWin.document.open();
        popupWin.document.write('<html><head><title>Lista de Vales</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/main.css" /><style>body{display:block;}.display_print{display:block;}</style></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>