<div class="breadcrumb">
    <h2>Reserva<i class="fas fa-angle-right fa-xs"></i>Selecionar Cliente</h2>

    <span>
        <a class="btn" href="<?php echo BASE_URL; ?>schedule/add"><i class="fas fa-angle-double-left"></i> Voltar</a>
    </span>
</div>

<div class="content">

    <!-- Formulário de Cadastro (Register Form) -->
    <form class="w-100" action="<?php echo BASE_URL; ?>clients/searchclient_schedule">
        <div class="table-line">
            <div class="mb-2 w-80 space-input">
                <input type="text" class="w-100" name="sp" id="sp" placeholder="Pesquisar Cliente" required>
            </div>
            <div class="w-20 txt-right">
                <button class="w-100" type="submit">Pesquisar Cliente</button>
            </div>
        </div>
    </form>

    <!-- Cabeçalho da Tabela (Table Header) -->
    <?php if ($clients_list) : ?>

        <!-- Dados da Tabela (Table Data) -->
        <?php foreach ($clients_list as $c) : ?>
            <div class="table_data">
                <div class="table-80"><span class="table-title-mobile">Nome:</span><?php echo $c['client_name']; ?></div>
                <div class="table-20 table-options txt-right">
                    <form action="<?php echo BASE_URL; ?>schedule/add" method="post">
                        <input type="hidden" name="client_id" id="client_id" value="<?php echo $c['id']; ?>">
                        <button type="submit">Selecionar Cliente</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>


    <?php else : ?>
        <div class="flash_info my-2">
            <p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum registro encontrado!</span>
        </div>
        <div class="search_pg">
            <form class="w-100" action="<?php echo BASE_URL; ?>clients/searchclient_schedule">
                <p class="mb-l">Refaça sua pesquisa</p>
                <span class="mb-2"><input type="text" class="input-field-search" name="sp" id="sp" placeholder="Pesquisar Cliente" required></span>
                <span><button type="submit"><i class="fas fa-search"></i> Pesquisar</button></span>
            </form>
        </div>
    <?php endif; ?>

</div>

<!-- Script Dropdown Itens -->
<script src="<?php echo BASE_URL; ?>assets/js/dropdown_itens.js"></script>