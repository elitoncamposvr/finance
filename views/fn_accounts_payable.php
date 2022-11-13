<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Financeiro<i class="fas fa-angle-right fa-xs"></i>Contas a Pagar em Aberto</h2>
</div>

<div class="content">

    <!-- Botões (Buttons) -->
    <div class="menu_data">
        <a class="btn" href="<?php echo BASE_URL; ?>financial/accountspayable_add">Novo</a>
        <span>
            <a class="btn" href="<?php echo BASE_URL; ?>financial/accountspayable_listall">Listar Todos</a>
        </span>
    </div>

    <!-- Cabeçalho da Tabela (Table Header) -->
    <?php if ($accounts_payable_list) : ?>
        <div class="table_header">
            <div class="w-50">Descrição</div>
            <div class="w-20">Valor</div>
            <div class="w-20">Vencimento</div>
            <div class="w-10"></div>
        </div>

        <!-- Dados da Tabela -->
        <?php foreach ($accounts_payable_list as $ap) : ?>
            <div class="table_data">
                <div class="w-50"><?php echo $ap['description']; ?></div>
                <div class="w-20">R$ <?php echo number_format($ap['bill_amount'], 2, ',', '.'); ?></div>
                <div class="w-20"><?php echo date('d/m/Y', strtotime($ap['due_date'])); ?></div>
                <div class="w-10">
                    <div class="w-10">
                        <div class="dropdown">
                            <i class="fas fa-ellipsis-h dropbtn" onclick="myFunction(this);"></i>
                            <div id="myDropdown1" class="dropdown-content">
                                <?php if ($edit_permission) : ?>
                                    <ul>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>financial/accountspayable_edit/<?php echo $ap['id']; ?>"><i class="fas fa-edit"></i> Editar</a></li>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>financial/accountspayable_delete/<?php echo $ap['id']; ?>" onclick="return confirm('Deseja realmente excluir?')"><i class="fas fa-trash-alt"></i> Deletar</a></li>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>financial/accountspayable_view/<?php echo $ap['id']; ?>"><i class="fas fa-eye"></i> Visualizar</a></li>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>financial/accountspayable_topayoff/<?php echo $ap['id']; ?>"><i class="fas fa-hand-holding-usd"></i> Quitar</a></li>
                                    </ul>
                                <?php else : ?>
                                    <ul>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>financial/accountspayable_view/<?php echo $ap['id']; ?>"><i class="fas fa-eye"></i> Visualizar</a></li>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Paginação (Pagination) -->
        <div class="pagination">
            <a class="pag_item" href="<?php echo BASE_URL; ?>financial/accountspayable?p=1">Primeira</a>
            <?php
            for ($q = $p - 5; $q <= $p - 1; $q++) {
                if ($q >= 1) { ?>
                    <a class="pag_item" href="<?php echo BASE_URL; ?>financial/accountspayable?p=<?php echo $q; ?>"><?php echo $q; ?></a>
            <?php }
            } ?>
            <div class="pag_item pag_ative"><?php echo "$q"; ?></div>
            <?php for ($q = $p + 1; $q <= $p + 5; $q++) {
                if ($q <= $p_count) { ?>
                    <a class="pag_item" href="<?php echo BASE_URL; ?>financial/accountspayable?p=<?php echo $q; ?>"><?php echo $q; ?></a>
            <?php }
            }
            ?>
            <a class="pag_item" href="<?php echo BASE_URL; ?>financial/accountspayable?p=<?php echo $p_count; ?>">Última</a>
        </div>

    <?php else : ?>
        <div class="flash_info my-x">
            <p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum registro encontrado!</span>
        </div>
    <?php endif; ?>
</div>

<!-- Script Dropdown Itens -->
<script src="<?php echo BASE_URL; ?>assets/js/dropdown_itens.js"></script>