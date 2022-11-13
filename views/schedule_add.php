    <!-- Breadcrumbs -->
    <div class="breadcrumb">
        <h2>Reserva<i class="fas fa-angle-right fa-xs"></i>Adicionar</h2>
        <span>
            <a class="btn" href="<?php echo BASE_URL; ?>schedule"><i class="fas fa-angle-double-left"></i> Voltar</a>
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
    </div>