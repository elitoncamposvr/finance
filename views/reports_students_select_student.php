<div class="content">
    <div class="breadcrumb">
        <h2>Relatório por Aluno<i class="fas fa-angle-right fa-xs"></i> Selecionar Aluno</h2>
    </div>

    <!-- Cabeçalho da Tabela (Table Header)-->
    <?php if ($students_list) : ?>
        <div class="table_header">
            <div class="table-70">Escola</div>
            <div class="table-30">Selecionar Aluno</div>
        </div>

        <!-- Dados da Tabela (Data Table)-->
        <?php foreach ($students_list as $students) : ?>
            <div class="table_data">
                <div class="table-70"><span class="table-title-mobile">Nome da Escola:</span><?php echo $students['student_name']; ?></div>
                <div class="table-30 table-options txt-right">
                    <a class="btn" target="_blank" href="<?php echo BASE_URL; ?>reports/students_pdf/<?php echo $students['id']; ?>">Selecionar Aluno</a>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <div class="flash_info my-x">
            <p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum registro encontrado!</span>
        </div>
    <?php endif; ?>
</div>