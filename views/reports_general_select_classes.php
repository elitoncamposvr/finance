<div class="content">
    <div class="breadcrumb">
        <h2>Relatório Geral por Turma<i class="fas fa-angle-right fa-xs"></i> Selecionar Turma</h2>
    </div>

    <!-- Cabeçalho da Tabela (Table Header)-->
    <?php if ($classes_list) : ?>
        <div class="table_header">
            <div class="table-20">Série</div>
            <div class="table-20">Turma</div>
            <div class="table-40">Escola</div>
            <div class="table-20 txt-right">Selecionar Turma</div>
        </div>

        <!-- Dados da Tabela (Data Table)-->
        <?php foreach ($classes_list as $classes) : ?>
            <div class="table_data">
                <div class="table-20"><span class="table-title-mobile">Série:</span><?php echo $classes['series_name']; ?>&ordf;</div>
                <div class="table-20"><span class="table-title-mobile">Turma:</span><?php echo $classes['name_class_students']; ?></div>
                <div class="table-40"><span class="table-title-mobile">Nome da Escola:</span><?php echo $classes['school_name']; ?></div>
                <div class="table-20 table-options txt-right">
                    <a class="btn" target="_blank" href="<?php echo BASE_URL; ?>reports/generalclasses_pdf/<?php echo $classes['id']; ?>">Selecionar Turma</a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <div class="flash_info my-x">
            <p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum registro encontrado!</span>
        </div>
    <?php endif; ?>
</div>