<div class="content">
    <div class="breadcrumb">
        <h2>Relatório Geral por Turma<i class="fas fa-angle-right fa-xs"></i> Selecionar Escola</h2>
    </div>

    <!-- Cabeçalho da Tabela (Table Header)-->
    <?php if ($school_list) : ?>
        <div class="table_header">
            <div class="table-50">Escola</div>
            <div class="table-30">Responsável</div>
            <div class="table-20">Selecionar Escola</div>
        </div>

        <!-- Dados da Tabela (Data Table)-->
        <?php foreach ($school_list as $school) : ?>
            <div class="table_data">
                <div class="table-50"><span class="table-title-mobile">Nome da Escola:</span><?php echo $school['school_name']; ?></div>
                <div class="table-30"><span class="table-title-mobile">Responsável:</span><?php echo $school['head_school']; ?></div>
                <div class="table-20 table-options txt-right">
                    <a class="btn" href="<?php echo BASE_URL; ?>reports/general_selectseries/<?php echo $school['id']; ?>">Selecionar Escola</a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <div class="flash_info my-x">
            <p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum registro encontrado!</span>
        </div>
    <?php endif; ?>
</div>