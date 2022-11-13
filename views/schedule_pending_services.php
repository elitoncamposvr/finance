<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Reservas<i class="fas fa-angle-right fa-xs"></i>Serviços Pendentes</h2>
</div>
<div class="content">
    <!-- Cabeçalho Tabela (Table Header) -->
    <?php if ($services_list) : ?>
        <div class="table_header">
            <div class="table-5">Res.</div>
            <div class="table-20">Cliente</div>
            <div class="table-20">Serviço</div>
            <div class="table-15">Embarque</div>
            <div class="table-15">Desembarque</div>
            <div class="table-5">Pass.</div>
            <div class="table-15">Data/Horário</div>
            <div class="table-5 txt-center"></div>
        </div>

        <!-- Dados da Tabela (Data Table)-->
        <?php foreach ($services_list as $s) : ?>
            <div class="table_data">
                <div class="table-5"><span class="table-title-mobile">Reserva:</span><?php echo $s['schedule_id']; ?></div>
                <div class="table-20">
                    <span class="table-title-mobile">Cliente:</span><?php echo $s['client_name']; ?>
                </div>
                <div class="table-20">
                    <span class="table-title-mobile">Serviço:</span><?php echo $s['name_service']; ?>
                </div>
                <div class="table-15">
                    <span class="table-title-mobile">Embarque:</span><?php echo $s['departure']; ?>
                </div>
                <div class="table-15">
                    <span class="table-title-mobile">Desembarque:</span><?php echo $s['arrival']; ?>
                </div>
                <div class="table-5">
                    <span class="table-title-mobile">Passageiros:</span><?php echo $s['passengers']; ?>
                </div>
                <div class="table-15">
                    <span class="table-title-mobile">Passageiros:</span>
                    <?php echo date('d/m/Y H:i', strtotime($s['date_service'])); ?> 
                </div>
                <div class="table-5 table-options txt-right">
                    <a class="dropdown-item" href="<?php echo BASE_URL; ?>schedule/view/<?php echo $s['schedule_id']; ?>"><i class="fas fa-eye"></i></a>
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