<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Reservas<i class="fas fa-angle-right fa-xs"></i>Listar todas</h2>
    <span>
        <a class="btn" href="<?php echo BASE_URL; ?>schedule"><i class="fas fa-angle-double-left"></i> Voltar</a>
    </span>
</div>
<div class="content">

    <!-- Botões -->
    <div class="menu_data">
        <div>
            <a class="btn" href="<?php echo BASE_URL; ?>schedule/client_select">Novo</a>
        </div>
        <div class="menu_data--right">
        <div>
                <a class="btn_sec" href="<?php echo BASE_URL; ?>schedule">Listar Abertas</a>
                <a class="btn" href="#" onclick="itemShow()"><i class="fa-solid fa-filter"></i> Filtrar</a>
            </div>
			<form class="form-search-right" action="<?php echo BASE_URL; ?>schedule/search">
				<span class="mb-2 w-100"><input type="text" class="w-100" name="sp" id="sp" placeholder="Pesquisar por cliente" required></span>
			</form>
		</div>

        
    </div>

    <!-- Parâmetros do Filtro (Filter Params) -->
    <div class="menu_data-filter" id="item_toggle">
        <form action="<?php echo BASE_URL; ?>schedule/filter" method="get" class="form-filter">
            <div class="table-25">
                <label for="id_user">Usuário</label>
                <select name="id_user" id="id_user" class="w-100">
                    <option value="0">Todos</option>
                    <?php foreach ($users_list as $u) : ?>
                        <option value="<?php echo $u['id']; ?>"><?php echo $u['name_user']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="table-35 txt-center">
                <label for="">Período</label>
                <div>
                    <input type="date" name="period1" id="period1" value="<?php echo date('Y-m-01'); ?>">
                    até <input type="date" name="period2" id="period2" value="<?php echo date('Y-m-d'); ?>">
                </div>
            </div>
            <div class="table-25">
                <label for="provider_id">Fornecedor</label>
                <select name="provider_id" id="provider_id" class="w-100">
                    <option value="0">Todos</option>
                    <?php foreach ($provider_list as $pd) : ?>
                        <option value="<?php echo $pd['id']; ?>"><?php echo $pd['name_provider']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="table-15 txt-center">
                <div>&nbsp;</div>
                <input type="submit" value="Filtrar">
            </div>
        </form>
    </div>

    <!-- Cabeçalho Tabela (Table Header) -->
    <?php if ($schedule_list) : ?>
        <div class="table_header">
            <div class="table-50">Nome</div>
            <div class="table-30">Fechamento</div>
            <div class="table-15">Status</div>
            <div class="table-5 txt-center"></div>
        </div>

        <!-- Dados da Tabela (Data Table)-->
        <?php foreach ($schedule_list as $s) : ?>
            <div class="table_data">
                <div class="table-50"><span class="table-title-mobile">Nome:</span><?php echo $s['client_name']; ?></div>
                <div class="table-30">
                    <span class="table-title-mobile">Fechamento:</span>
                    <?php if ($s['situation'] == 2) : ?>
                        <?php echo date('d/m/Y', strtotime($s['schedule_date'])); ?>
                    <?php else : ?>
                        Não concluída
                    <?php endif; ?>
                </div>
                <div class="table-15">
                    <?php if ($s['situation'] == 2) {
                        echo '<span class="schedule_status schedule_status--success">Concluída</span>';
                    } elseif ($s['situation'] == 3) {
                        echo '<span class="schedule_status schedule_status--canceled">Cancelada</span>';
                    } elseif ($s['situation'] == 4) {
                        echo '<span class="schedule_status schedule_status--aproved">Aprovada</span>';
                    } else {
                        echo '<span class="schedule_status schedule_status--pending">Pendente</span>';
                    } ?>
                </div>
                <div class="table-5 table-options txt-right">
                    <?php if ($s['situation'] == '1' || $s['situation'] == '4') { ?>
                        <div class="dropdown">
                            <i class="fas fa-ellipsis-h dropbtn" onclick="myFunction(this);"></i>
                            <div id="myDropdown1" class="dropdown-content">
                                <ul>
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>schedule/view/<?php echo $s['id']; ?>"><i class="fas fa-eye"></i> Visualizar</a></li>
                                    <?php if ($s['situation'] == 1 || $s['situation'] == 3) : ?>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>schedule/delete/<?php echo $s['id']; ?>" onclick="return confirm('Deseja realmente excluir?')"><i class="fas fa-trash-alt"></i> Deletar</a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    <?php } else { ?>
                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>schedule/cart/<?php echo $s['id']; ?>"><i class="fas fa-eye"></i></a>

                    <?php } ?>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Paginação (Pagination) -->
        <?php if ($p_count > 1) { ?>
            <div class="pagination">
                <a class="pag_item" href="<?php echo BASE_URL; ?>schedule/listall?p=1">Primeira</a>
                <?php
                for ($q = $p - 5; $q <= $p - 1; $q++) {
                    if ($q >= 1) { ?>
                        <a class="pag_item" href="<?php echo BASE_URL; ?>schedule/listall?p=<?php echo $q; ?>"><?php echo $q; ?></a>
                <?php }
                } ?>
                <div class="pag_item pag_active"><?php echo "$q"; ?></div>
                <?php for ($q = $p + 1; $q <= $p + 5; $q++) {
                    if ($q <= $p_count) { ?>
                        <a class="pag_item" href="<?php echo BASE_URL; ?>schedule/listall?p=<?php echo $q; ?>"><?php echo $q; ?></a>
                <?php }
                }
                ?>
                <a class="pag_item" href="<?php echo BASE_URL; ?>schedule/listall?p=<?php echo $p_count; ?>">Última</a>
            </div>

        <?php } ?>

    <?php else : ?>
        <div class="flash_info my-x">
            <p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum registro encontrado!</span>
        </div>
    <?php endif; ?>
</div>

<!-- Script Dropdown Itens -->
<script src="<?php echo BASE_URL; ?>assets/js/dropdown_itens.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/functions.js"></script>