<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Reserva<i class="fas fa-angle-right fa-xs"></i>Editar</h2>
    <span>
        <a class="btn" href="<?php echo BASE_URL; ?>schedule/view/<?php echo $schedule_info['id']; ?>"><i class="fas fa-angle-double-left"></i> Voltar</a>
    </span>
</div>
<div class="content">

    <!-- Formulário de Cadastro (Register Form) -->
    <div class="data_info my-m">
        <p>
            <?php echo $schedule_info['client_name'] ?>
        </p>
    </div>
    <form method="post">
        <div class="table-line">
            <div class="table-50 my-s space-input">
                <label for="mechanic">Fornecedor</label>
                <select name="mechanic" id="mechanic" class="w-100 txt-up">
                    <?php foreach ($provider_list as $pd) : ?>
                        <option value="<?php echo $pd['id']; ?>" <?php if ($schedule_info['provider_id'] == $pd['id']) {
                                                                        echo 'selected="selected"';
                                                                    } else {
                                                                        echo '';
                                                                    } ?>><?php echo $pd['name_provider']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="table-25 my-s space-input">
                <label for="schedule_date">Data</label>
                <input type="date" name="schedule_date" id="schedule_date" class="w-100" value="<?php echo $schedule_info['schedule_date']; ?>" required>
            </div>
            <div class="table-25 my-s">
                <label for="schedule_time">Hora Prevista</label>
                <input type="time" name="schedule_time" id="schedule_time" class="w-100" value="<?php echo $schedule_info['schedule_time']; ?>">
            </div>

        </div>
        <div class="w-100 my-s">
            <label for="aditional_info">Observações</label>
            <textarea name="aditional_info" id="aditional_info" cols="30" rows="10" class="w-100"><?php echo $schedule_info['aditional_info']; ?> </textarea>
        </div>

        <!-- Botão (Button) -->
        <div class="w-100 txt-center my-el">
            <button type="submit">
                Editar Reserva
            </button>
        </div>
    </form>
</div>