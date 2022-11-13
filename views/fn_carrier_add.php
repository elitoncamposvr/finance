<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Configurações<i class="fas fa-angle-right fa-xs"></i>Financeiro<i class="fas fa-angle-right fa-xs"></i>Portador/Carteira<i class="fas fa-angle-right fa-xs"></i>Adicionar</h2>
    <span>
        <a class="btn" href="<?php echo BASE_URL; ?>financial/settingscarrier"><i class="fas fa-angle-double-left"></i> Voltar</a>
    </span>
</div>


<div class="content">
    <!-- Formulário de Adição (Form Add) -->
    <form method="post">
        <div class="w-50 my-s">
            <label for="carrier_title">Nome do Portador</label>
            <input type="text" name="carrier_title" id="carrier_title" class="w-100" required>
        </div>

        <!-- Botões (Button) -->
        <div class="w-100 my-el">
            <button type="submit">
                Adicionar Portador
            </button>
        </div>
    </form>
</div>