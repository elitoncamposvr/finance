<div class="content">
    <div class="breadcrumb">
        <h2>Relatório por Aluno<i class="fas fa-angle-right fa-xs"></i> Selecionar Escola</h2>
    </div>

    <!-- Cabeçalho da Tabela (Table Header)-->
    <?php if ($series_list) : ?>
        <div class="table_header">
            <div class="table-20">Série</div>
            <div class="table-60">Escola</div>
            <div class="table-20 txt-right">Selecionar Série</div>
        </div>

        <!-- Dados da Tabela (Data Table)-->
        <?php foreach ($series_list as $series) : ?>
            <div class="table_data">
                <div class="table-20"><span class="table-title-mobile">Nome da Escola:</span><?php echo $series['series_name']; ?></div>
                <div class="table-60"><span class="table-title-mobile">Responsável:</span><?php echo $series['school_name']; ?></div>
                <div class="table-20 table-options txt-right">
                    <a class="btn" href="<?php echo BASE_URL; ?>reports/students_selectclasses/<?php echo $series['id']; ?>">Selecionar Série</a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <div class="flash_info my-x">
            <p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum registro encontrado!</span>
        </div>
    <?php endif; ?>
</div>