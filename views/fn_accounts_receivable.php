<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Financeiro<i class="fas fa-angle-right fa-xs"></i>Contas a Receber em Aberto</h2>
</div>

<div class="content">

    <!-- Botões (Buttons) -->
    <div class="menu_data">
        <a class="btn" href="<?php echo BASE_URL; ?>financial/accountsreceivable_add">Novo</a>
        <span>
            <a class="btn" href="<?php echo BASE_URL; ?>financial/accountsreceivable_listall">Listar Todos</a>
        </span>
    </div>

    <!-- Cabeçalho da Tabela (Table Header) -->
    <?php if ($accounts_receivable_list) : ?>
        <div class="table_header">
            <div class="table-40">Descrição</div>
            <div class="table-20">Valor</div>
            <div class="table-20">Vencimento</div>
            <div class="table-15">Situação</div>
            <div class="table-5"></div>
        </div>

        <!-- Dados da Tabela -->
        <?php foreach ($accounts_receivable_list as $ar) : ?>
            <div class="table_data">
                <div class="table-40"><?php echo $ar['description']; ?></div>
                <div class="table-20">R$ <?php echo number_format($ar['bill_amount'], 2, ',', '.'); ?></div>
                <div class="table-20"><?php echo date('d/m/Y', strtotime($ar['due_date'])); ?></div>
                <div class="table-15">Teste</div>
                <div class="table-5">
                    <div class="dropdown">
                        <i class="fas fa-ellipsis-h dropbtn" onclick="myFunction(this);"></i>
                        <div id="myDropdown1" class="dropdown-content">
                            <?php if ($edit_permission) : ?>
                                <ul>
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>financial/accountsreceivable_edit/<?php echo $ar['id']; ?>"><i class="fas fa-edit"></i> Editar</a></li>
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>financial/accountsreceivable_delete/<?php echo $ar['id']; ?>" onclick="return confirm('Deseja realmente excluir?')"><i class="fas fa-trash-alt"></i> Deletar</a></li>
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>financial/accountsreceivable_view/<?php echo $ar['id']; ?>"><i class="fas fa-eye"></i> Visualizar</a></li>
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>financial/accountsreceivable_topayoff/<?php echo $ar['id']; ?>"><i class="fas fa-hand-holding-usd"></i> Quitar</a></li>
                                </ul>
                            <?php else : ?>
                                <ul>
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>financial/accountsreceivable_view/<?php echo $ar['id']; ?>"><i class="fas fa-eye"></i> Visualizar</a></li>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
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