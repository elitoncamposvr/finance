  <!-- Breadcrumbs -->
  <div class="breadcrumb">
      <h2>Serviços<i class="fas fa-angle-right fa-xs"></i>Editar</h2>
      <span>
          <a class="btn" href="<?php echo BASE_URL; ?>services"><i class="fas fa-angle-double-left"></i> Voltar</a>
      </span>
  </div>

  <div class="content">

      <!-- Formulário (Add Form) -->
      <form method="POST">
      <div class="table-line">
            <div class="table-40 my-s space-input">
                <label for="name_service">Nome do Serviço</label>
                <input class="w-100" type="text" name="name_service" id="name_service" value="<?php echo $services_info['name_service']; ?>" autofocus>
            </div>
            <div class="table-20 my-s space-input">
                <label for="standard_value">Valor de Custo</label>
                <input class="w-100" type="text" name="standard_value" id="standard_value" value="<?php echo number_format($services_info['standard_value'], 2, ',', '.'); ?>" required>
            </div>
            <div class="table-20 my-s space-input">
                <label for="sale_value">Valor de Venda</label>
                <input class="w-100" type="text" name="sale_value" id="sale_value" value="<?php echo number_format($services_info['sale_value'], 2, ',', '.'); ?>" required>
            </div>
            <div class="table-20 my-s">
                <label for="time_standard">Hora Padrão</label>
                <input type="time" name="time_standard" id="time_standard" class="w-100" value="<?php echo $services_info['time_standard']; ?>" required>
            </div>
        </div>

          <!-- Botão (Button) -->
          <button class="my-el" type="submit">
              Editar Serviço
          </button>
      </form>
  </div>

  <!-- SCRIPTS JS -->
  <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script_price.js"></script>