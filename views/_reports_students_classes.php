<div class="content">
    <div class="breadcrumb">
        <h2>Relatório por Aluno<i class="fas fa-angle-right fa-xs"></i> Selecionar Aluno</h2>
        <span>
            <a href="<?php echo BASE_URL; ?>reports/reportstudentsclasses"><i class="fas fa-angle-double-left"></i> Voltar</a>
        </span>
    </div>

    <!-- Cabeçalho da Tabela (Table Header)-->
    <?php if ($students_list) : ?>
        <div class="table_header">
            <div class="table-35">Aluno</div>
            <div class="table-15">Turma</div>
            <div class="table-10">Serie</div>
            <div class="table-25">Escola</div>
            <div class="table-15">Selecionar Turma</div>
        </div>

        <!-- Dados da Tabela (Data Table)-->
        <?php foreach ($students_list as $school) : ?>
            <div class="table_data">
                <div class="table-35"><span class="table-title-mobile">Nome da Aluno:</span><?php echo $school['student_name']; ?></div>
                <div class="table-15"><span class="table-title-mobile">Nome da Turma:</span><?php echo $school['students_class']; ?></div>
                <div class="table-10"><span class="table-title-mobile">Série:</span><?php echo $school['series']; ?></div>
                <div class="table-25"><span class="table-title-mobile">Nome da Escola:</span><?php echo $school['school_name']; ?></div>
                <div class="table-15 table-options txt-right">
                    <a class="btn" href="<?php echo BASE_URL; ?>reports/reportsstudentspdf/<?php echo $school['id']; ?>">Selecionar Turma</a>
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