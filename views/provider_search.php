<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Fornecedores <i class="fas fa-angle-right fa-xs"></i> Resultados da Pesquisa</h2>
    <span>
        <a class="btn" href="<?php echo BASE_URL; ?>provider"><i class="fas fa-angle-double-left"></i> Voltar</a>
    </span>
</div>

<div class="content">

    <!-- Botões (Buttons) -->
    <div class="menu_data">
        <div class="menu_data--left">
            <?php if ($edit_permission) : ?>
                <div>
                    <a class="btn btn--data-menu" href="<?php echo BASE_URL; ?>provider/add">Novo</a>
                </div>
            <?php endif; ?>
        </div>
        <div class="menu_data--right">
            <form class="form-search-right" action="<?php echo BASE_URL; ?>provider/search">
                <span class="mb-2 w-100"><input type="text" class="w-100" name="sp" id="sp" placeholder="Pesquisar Fornecedor" required></span>
            </form>
        </div>
    </div>

    <!-- Cabeçalho da Tabela (Table Header)-->
    <?php if ($provider_list) : ?>
        <div class="table_header">
            <div class="w-50">Nome</div>
            <div class="w-20">Telefone</div>
            <div class="w-20">Contato</div>
            <div class="w-10"></div>
        </div>

        <!-- Dados da Tabela (Data Table)-->
        <?php foreach ($provider_list as $pd) : ?>
            <div class="table_data">
            <div class="table-50"><span class="table-title-mobile">Nome:</span><?php echo $pd['name_provider']; ?></div>
					<div class="table-20"><span class="table-title-mobile">Telefone:</span><?php echo $pd['phone']; ?></div>
					<div class="table-20"><span class="table-title-mobile">Contato:</span><?php echo $pd['contact_name']; ?></div>
                <div class="table-10 table-options txt-right">
                    <div class="dropdown">
                        <i class="fas fa-ellipsis-h dropbtn btn-awesome" onclick="myFunction(this);"></i>
                        <div id="myDropdown1" class="dropdown-content">
                            <?php if ($edit_permission) : ?>
                                <ul>
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>provider/edit/<?php echo  $pd['id']; ?>"><i class="fas fa-edit"></i> Editar</a></li>
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>provider/delete/<?php echo  $pd['id']; ?>" onclick="return confirm('Deseja realmente excluir?')"><i class="fas fa-trash-alt"></i> Deletar</a></li>
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>provider/view/<?php echo  $pd['id']; ?>"><i class="fas fa-eye"></i> Visualizar</a></li>
                                </ul>
                            <?php else : ?>
                                <ul>
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>provider/view/<?php echo  $pd['id']; ?>"><i class="fas fa-eye"></i> Visualizar</a></li>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    <?php else : ?>
        <div class="flash_info my-2">
            <p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum registro encontrado!</span>
        </div>
        <div class="search_pg">
            <form class="w-100" action="<?php echo BASE_URL; ?>provider/search">
                <p class="mb-l">Refaça sua pesquisa</p>
                <span class="mb-2"><input type="text" class="input-field-search" name="sp" id="sp" placeholder="Pesquisar Fornecedor" required></span>
                <span><button type="submit"><i class="fas fa-search"></i> Pesquisar</button></span>
            </form>
        </div>
    <?php endif; ?>

</div>

<!-- Script Dropdown Itens -->
<script src="<?php echo BASE_URL; ?>assets/js/dropdown_itens.js"></script>