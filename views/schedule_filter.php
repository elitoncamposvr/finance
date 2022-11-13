<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Reservas<i class="fas fa-angle-right fa-xs"></i>Filtragem de Reservas</h2>
    <span>
        <a class="btn" href="<?php echo BASE_URL; ?>schedule/listall"><i class="fas fa-angle-double-left"></i> Voltar</a>
    </span>
</div>
<div class="content">

    <!-- Botões -->
    <div class="menu_data">
        <span>
            <a class="btn" href="<?php echo BASE_URL; ?>schedule/add">Novo</a>
        </span>
        <span>
            <a class="btn" href="#" onclick="itemShow()"><i class="fa-solid fa-filter"></i> Filtrar</a>
        </span>
    </div>

    <!-- Parâmetros do Filtro (Filter Params) -->
    <div class="menu_data-filter" id="item_toggle">
        <form action="<?php echo BASE_URL; ?>schedule/filter" method="get" class="form-filter">
            <div class="table-30">
                <label for="id_user">Usuário</label>
                <select name="id_user" id="id_user" class="w-100">
                    <option value="0">Todos</option>
                    <?php foreach ($users_list as $u) : ?>
                        <option value="<?php echo $u['id']; ?>"><?php echo $u['name_user']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="table-40 txt-center">
                <label for="">Período</label>
                <div>
                    <input type="date" name="period1" id="period1" value="<?php echo date('Y-m-01'); ?>">
                    até <input type="date" name="period2" id="period2" value="<?php echo date('Y-m-d'); ?>">
                </div>
            </div>
            <div class="table-30">
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
            <div class="table-40">Nome</div>
            <div class="table-20">Data/Horário</div>
            <div class="table-25">Fornecedor</div>
            <div class="table-10">Status</div>
            <div class="w-5 txt-center"></div>
        </div>

        <!-- Dados da Tabela (Data Table)-->
        <?php foreach ($schedule_list as $s) : ?>
            <div class="table_data">
                <div class="table-40"><span class="table-title-mobile">Nome:</span><?php echo $s['client_name']; ?></div>
                <div class="table-20"><span class="table-title-mobile">Data/Horário:</span><?php echo date('d/m', strtotime($s['schedule_date']));
                                                                                            echo ' ' . date('h:i', strtotime($s['schedule_time'])); ?></div>
                <div class="table-25"><span class="table-title-mobile">Fornecedor:</span><?php echo $s['name_provider']; ?></div>
                <div class="w-10">
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
                <div class="w-5 table-options txt-right">
                    <?php if ($s['situation'] == '1' || $s['situation'] == '4') { ?>
                        <div class="dropdown">
                            <i class="fas fa-ellipsis-h dropbtn" onclick="myFunction(this);"></i>
                            <div id="myDropdown1" class="dropdown-content">
                                <?php if ($edit_permission) : ?>
                                    <ul>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>schedule/cancel/<?php echo $s['id']; ?>"><i class="fa-solid fa-ban"></i> Cancelar</a></li>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>schedule/view/<?php echo $s['id']; ?>"><i class="fas fa-eye"></i> Visualizar</a></li>
                                        <?php if ($s['situation'] != 4) : ?>
                                            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>schedule/delete/<?php echo $s['id']; ?>" onclick="return confirm('Deseja realmente excluir?')"><i class="fas fa-trash-alt"></i> Deletar</a></li>
                                            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>schedule/aprove/<?php echo $s['id']; ?>"><i class="fa-solid fa-check"></i> Aprovar</a></li>
                                        <?php endif; ?>
                                    </ul>
                                <?php else : ?>
                                    <ul>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>schedule/view/<?php echo $s['id']; ?>"><i class="fas fa-eye"></i> Visualizar</a></li>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php } else { ?>
                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>schedule/cart/<?php echo $s['id']; ?>"><i class="fas fa-eye"></i></a>

                    <?php } ?>
                </div>
            </div>
        <?php endforeach; ?>

    <?php else : ?>
        <div class="flash_info my-x">
            <p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum registro encontrado!</span>
        </div>
    <?php endif; ?>
</div>

<!-- Script Dropdown Itens -->
<script src="<?php echo BASE_URL; ?>assets/js/dropdown_itens.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/functions.js"></script>