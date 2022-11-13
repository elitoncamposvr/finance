<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Reservas<i class="fas fa-angle-right fa-xs"></i>Total de Reservas</h2>
    <span>
        <a class="btn" href="<?php echo BASE_URL; ?>report"><i class="fas fa-angle-double-left"></i> Voltar</a>
    </span>
</div>

<div class="content">

    <!-- Parâmetros do Filtro (Filter Params) -->
    <div class="flex my-3">
        <form action="<?php echo BASE_URL; ?>report/total_pdf" method="get" class="flex w-100 wrap" target="_blank">
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
            <div class="w-100 txt-center mt-3">
                <input type="submit" value="Gerar Relatório">
            </div>
        </form>
    </div>


</div>