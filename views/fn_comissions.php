<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Financeiro<i class="fas fa-angle-right fa-xs"></i>Comissões em Aberto</h2>
</div>

<div class="content">

    <!-- Botões (Buttons) -->
    <div class="menu_data">
        <span></span>
        <a class="btn" href="<?php echo BASE_URL; ?>financial/comissions_listall">Listar Todos</a>
    </div>

    <!-- Cabeçalho da Tabela (Table Header) -->
    <?php if ($comissions_list) : ?>
        <div class="table_header">
            <div class="table-50">Fornecedor</div>
            <div class="table-15">Reserva nº</div>
            <div class="table-15">Valor</div>
            <div class="table-15">Situação</div>
            <div class="table-5"></div>
        </div>

        <!-- Dados da Tabela -->
        <?php foreach ($comissions_list as $cl) : ?>
            <div class="table_data">
                <div class="table-50"><?php echo $cl['name_provider']; ?></div>
                <div class="table-15"><?php echo $cl['schedule_number']; ?></div>
                <div class="table-15">R$ <?php echo number_format($cl['bill_amount'], 2, ',', '.'); ?></div>
                <div class="table-15">
                    <?php if ($cl['payment_status'] == 2) {
                        echo '<span class="schedule_status schedule_status--success">Paga</span>';
                    } else {
                        echo '<span class="schedule_status schedule_status--pending">Aberta</span>';
                    } ?>
                </div>
                <div class="table-5">
                    <a class="dropdown-item" href="<?php echo BASE_URL; ?>financial/accountspayable_view/<?php echo $cl['id']; ?>"><i class="fas fa-eye"></i></a>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Paginação (Pagination) -->
        <div class="pagination">
            <a class="pag_item" href="<?php echo BASE_URL; ?>financial/accountsreceivable?p=1">Primeira</a>
            <?php
            for ($q = $p - 5; $q <= $p - 1; $q++) {
                if ($q >= 1) { ?>
                    <a class="pag_item" href="<?php echo BASE_URL; ?>financial/accountsreceivable?p=<?php echo $q; ?>"><?php echo $q; ?></a>
            <?php }
            } ?>
            <div class="pag_item pag_ative"><?php echo "$q"; ?></div>
            <?php for ($q = $p + 1; $q <= $p + 5; $q++) {
                if ($q <= $p_count) { ?>
                    <a class="pag_item" href="<?php echo BASE_URL; ?>financial/accountsreceivable?p=<?php echo $q; ?>"><?php echo $q; ?></a>
            <?php }
            }
            ?>
            <a class="pag_item" href="<?php echo BASE_URL; ?>financial/accountsreceivable?p=<?php echo $p_count; ?>">Última</a>
        </div>

    <?php else : ?>
        <div class="flash_info my-x">
            <p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum registro encontrado!</span>
        </div>
    <?php endif; ?>
</div>

<!-- Script Dropdown Itens -->
<script src="<?php echo BASE_URL; ?>assets/js/dropdown_itens.js"></script>