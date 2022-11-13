<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Reserva<i class="fas fa-angle-right fa-xs"></i>Visualizar</h2>
    <span>
        <a class="btn" href="<?php echo BASE_URL; ?>schedule"><i class="fas fa-angle-double-left"></i> Voltar</a>
    </span>
</div>

<div class="content">
    <!-- CLIENTS DATA -->
    <div class="schedule-client--data">
        <div class="table-100 bold my-s">
            <?php echo $schedule_view['client_id'] ?> -
            <?php echo $schedule_view['client_name'] ?>
        </div>
        <div class="spt"></div>
        <div class="table-line my-s">
            <div class="table-33">
                <label for="phone" class="bold">CPF/CNPJ: </label>
                <span>
                    <?php echo $schedule_view['cpf'] ?>
                </span>
            </div>
            <div class="table-33">
                <label for="state_registration" class="bold">Identidade: </label>
                <span>
                    <?php echo $schedule_view['identity'] ?>
                </span>
            </div>
            <div class="table-33">

            </div>
        </div>
        <div class="table-line my-s">
            <div class="table-33">
                <label for="phone" class="bold">Telefone: </label>
                <span><?php echo $schedule_view['phone'] ?></span>
            </div>
            <div class="table-33">
                <label for="phone" class="bold">Celular: </label>
                <span><?php echo $schedule_view['cellphone'] ?></span>
            </div>
            <div class="table-33">
                <label for="phone" class="bold">Whatsapp: </label>
                <span><?php echo $schedule_view['whatsapp'] ?></span>
            </div>
        </div>

        <div class="table-100 my-s">
            <label for="phone" class="bold">Endereço: </label>
            <span>
                <?php echo $schedule_view['address'] ?>,
                <?php echo $schedule_view['address_number'] ?>,
                <?php echo $schedule_view['address2'] ?>,
                <?php echo $schedule_view['address_neighb'] ?>
            </span>
        </div>
        <div class="table-100 my-s">
            <label for="phone" class="bold">Cidade/UF: </label>
            <span>
                <?php echo $schedule_view['address_city'] ?>,
                <?php echo $schedule_view['address_state'] ?>
            </span>
        </div>
    </div>
    <!-- CLIENTS DATA -->

    <!-- ADITIONAL INFO -->
    <div class="menu_data py-el mb-el">
        <div>
            <label for="aditional_info" class="bold mr-m">Observações: </label>
            <span>
                <?php echo $schedule_view['aditional_info']; ?>
                <i class="fa-solid fa-pen-to-square" onclick="showBtnAditionalInfo(this)"></i>
            </span>
        </div>
        <div>
            <a class="btn" href="#" onclick="itemShow()">Histórico</a>
        </div>
    </div>
    <!-- ADITIONAL INFO -->

    <!-- HISTORY DATA -->
    <div class="history" id="item_toggle">
        <div class="table-100 bold txt-center">
            Histórico da Reserva
        </div>
        <?php if ($history_list) : ?>
            <?php foreach ($history_list as $hl) : ?>
                <div class="table-line">
                    <div class="table-100 my-s">
                        <?php echo $hl['name_user']; ?> <?php echo $hl['action']; ?> em <?php echo date('d/m/Y h:i', strtotime($hl['time_action'])); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum histórico encontrado!</span>
        <?php endif; ?>
    </div>
    <!-- HISTORY DATA -->

    <!-- ADITIONAL INFO FORM -->
    <div class="table-100 mb-2" id="schedule--form-aditional-info">
        <form method="post" action="<?php echo BASE_URL; ?>schedule/aditionalinfo">
            <div class="table-100">
                <input type="hidden" name="id" id="id" value="<?php echo $schedule_view['id']; ?>">
                <textarea name="aditional_info" id="aditional_info" class="w-100"><?php echo $schedule_view['aditional_info']; ?></textarea>
            </div>
            <div class="table-100 txt-center">
                <button type="submit">Registrar Observações</button>
            </div>
        </form>
    </div>
    <!-- ADITIONAL INFO FORM -->

    <!-- SERVICES LIST -->
    <?php if ($schedules_services) : ?>
        <div class="table_header">
            <div class="table-100 txt-center">Serviços Contratados</div>
        </div>

        <!-- Dados da Tabela (Data Table)-->
        <?php foreach ($schedules_services as $s) : ?>
            <div class="table_data wrap">
                <div class="table-line">
                    <div class="table-35">
                        <label for="name_service" class="bold">Serviço</label>
                        <div class="w-100">
                            <?php echo $s['name_service']; ?>
                        </div>

                    </div>
                    <div class="table-20">
                        <label for="date_service" class="bold">Data/Horário</label>
                        <div class="w-100">
                            <?php echo date('d/m/Y H:i', strtotime($s['date_service'])); ?>
                        </div>
                    </div>
                    <div class="table-10">
                        <label for="data-sale" class="bold">Valor</label>
                        <div class="w-100">
                            R$ <?php echo number_format($s['sale_value'], 2, ',', '.'); ?>
                        </div>
                    </div>
                    <div class="table-10">
                        <label for="passengers" class="bold">Passageiros</label>
                        <div class="w-100">
                            <?php echo $s['passengers']; ?>
                        </div>
                    </div>
                    <div class="table-10">
                        <label for="total" class="bold">Total</label>
                        <div class="w-100">
                            R$ <?php echo number_format($s['total_sale'], 2, ',', '.'); ?>
                        </div>
                    </div>
                    <div class="table-10">
                        <label for="status" class="bold">Status</label>
                        <div class="w-100">
                            <?php if ($s['status'] == 2) {
                                echo '<span class="schedule_status schedule_status--success">Concluída</span>';
                            } elseif ($s['status'] == 3) {
                                echo '<span class="schedule_status schedule_status--canceled">Cancelada</span>';
                            } else {
                                echo '<span class="schedule_status schedule_status--pending">Pendente</span>';
                            } ?>
                        </div>
                    </div>
                    <div class="table-5 table-options txt-right">
                        <div class="dropdown">
                            <i class="fas fa-ellipsis-h dropbtn" onclick="myFunction(this);"></i>
                            <div id="myDropdown1" class="dropdown-content">
                                <?php if ($edit_permission) : ?>
                                    <ul>
                                        <?php if ($schedule_view['situation'] == 2) : ?>
                                            <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>schedule/confirmedService/<?php echo $s['id']; ?>"><i class="fa-solid fa-check"></i> Concluir</a></li>
                                        <?php endif; ?>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>schedule/deleteService/<?php echo $s['id']; ?>" onclick="return confirm('Deseja realmente excluir?')"><i class="fas fa-trash-alt"></i> Deletar</a></li>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>schedule/cancelService/<?php echo $s['id']; ?>" onclick="return confirm('Deseja realmente cancelar?')"><i class="fa-solid fa-ban"></i> Cancelar</a></li>
                                    </ul>
                                <?php else : ?>
                                    <ul>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>schedule/confirmedService/<?php echo $s['id']; ?>"><i class="fa-solid fa-check"></i> Concluir</a></li>
                                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>schedule/cancelService/<?php echo $s['id']; ?>" onclick="return confirm('Deseja realmente cancelar?')"><i class="fa-solid fa-ban"></i> Cancelar</a></li>
                                    </ul>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-line mt-2">
                    <div class="table-35">
                        <label for="departure" class="bold">Embarque</label>
                        <div class="w-100">
                            <?php echo $s['departure']; ?>
                        </div>
                    </div>
                    <div class="table-30">
                        <label for="arrival" class="bold">Desembarque</label>
                        <div class="w-100">
                            <?php echo $s['arrival']; ?>
                        </div>
                    </div>
                    <div class="table-30">
                        <label for="provider" class="bold">Fornecedor</label>
                        <div class="w-100">
                            <?php echo $s['name_provider']; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <div class="flash_info my-2">
            <p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum serviço incluso!</span>
        </div>
    <?php endif; ?>
    <?php if ($schedule_view['situation'] != 4) : ?>
        <div class="btn-schedule-service--field">
            <a href="#" class="btn" onclick="showBtnService(this)">Adicionar Serviços</a>
        </div>
    <?php endif; ?>
    <!-- SERVICES LIST -->


    <!-- FORM ADD SERVICE -->
    <div class="table-line" id="schedule-service--form">
        <form method="post">
            <div class="table-line">
                <div class="table-40 my-s mr-m">
                    <label for="service_id">Serviços</label>
                    <select name="service_id" id="service_id" class="w-100" onblur="addTime()">
                        <?php foreach ($services_list as $srv) : ?>
                            <option data-time="<?php echo $srv['time_standard']; ?>" data-cost="<?php echo $srv['standard_value']; ?>" data-sale="<?php echo $srv['sale_value']; ?>" value="<?php echo $srv['id']; ?>"><?php echo $srv['name_service']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="hidden" name="sale_value_standard" id="sale_value_standard" value="">
                    <input type="hidden" name="total_sale" id="total_sale" value="">
                    <input type="hidden" name="total_cost" id="total_cost" value="">
                    <input type="hidden" name="client_id" id="client_id" value="<?php echo $schedule_view['client_id'] ?>">
                </div>

                <div class="table-20 my-s space-input">
                    <label for="date_service">Data</label>
                    <input type="date" name="date_service" id="date_service" class="w-100" value="<?php echo $schedule_view['schedule_date']; ?>" required onblur="addTime()">
                </div>
                <div class="table-20 my-s space-input">
                    <label for="time_service">Hora Prevista</label>
                    <input type="time" name="time_service" id="time_service" class="w-100" value="" required>
                </div>
                <div class="table-20 my-s">
                    <label for="passengers">Passageiros</label>
                    <input type="number" name="passengers" id="passengers" class="w-100" onblur="saleTotal()" value="<?php echo $schedule_view['provider_id']; ?>" required>
                </div>
            </div>
            <div class="table-line">
                <div class="table-40 my-s space-input">
                    <label for="provider_id">Fornecedor</label>
                    <select name="provider_id" id="provider_id" class="w-100">
                        <?php foreach ($provider_list as $pd) : ?>
                            <option value="<?php echo $pd['id']; ?>"><?php echo $pd['name_provider']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="table-30 my-s space-input">
                    <label for="departure">Embarque</label>
                    <input class="w-100" type="text" name="departure" id="departure" required>
                </div>
                <div class="table-30 my-s">
                    <label for="departure">Chegada</label>
                    <input class="w-100" type="text" name="arrival" id="arrival" required>
                </div>
            </div>
            <div class="table-100">
                <button type="submit">Adicionar</button>
            </div>
        </form>
    </div>
    <!-- FORM ADD SERVICE -->

    <!-- FIELD VALUES -->
    <div class="data_info my-m">
        <div>
            <span class="bold">Total: </span> R$ <span class="area-value" data-services="<?php echo $services_total; ?>"><?php echo number_format($services_total, 2, ',', '.'); ?></span>
        </div>
        <div>
            <span class="bold">Desconto: </span>R$ <span data-discount="<?php echo $schedule_view['discount']; ?>"><?php echo number_format($schedule_view['discount'], 2, ',', '.'); ?></span> <i class="fa-solid fa-pen-to-square" onclick="showBtnDiscount(this)"></i>
        </div>
        <div>
            <span class="bold">Geral: </span>R$ <span class="total-area"></span>
        </div>
    </div>
    <!-- FIELD VALUES -->

    <!-- FORM ADD DISCOUNT -->
    <div class="table-line" id="schedule-service--form-discount">
        <form method="post" action="<?php echo BASE_URL; ?>schedule/discount">
            <input type="text" name="discount" minlength="3" id="discount" value="<?php echo number_format($schedule_view['discount'], 2, ',', '.'); ?>">
            <input type="hidden" name="id" id="id" value="<?php echo $schedule_view['id'] ?>">

            <button type="submit">Aplicar Desconto</button>
        </form>
    </div>
    <!-- FORM ADD DISCOUNT -->

    <!-- VOUCHER LIST -->
    <div class="flash_info my-2 wrap">
        <div class="table-100 txt-center bold">Comprovantes</div>
        <div class="separator"></div>
        <?php if ($voucher_list) : ?>
            <?php foreach ($voucher_list as $vl) : ?>
                <div class="table-50 txt-center my-s">
                    <?php echo $vl['method']; ?> - <?php echo $vl['voucher_name']; ?>
                    <span>
                        <a target="_blank" download href="<?php echo BASE_URL; ?>images/voucher/<?php echo $vl['voucher_name']; ?>">
                            <i class="fa-solid fa-download"></i>
                        </a>
                    </span>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p><i class="fas fa-exclamation-circle fa-2x px"></i></p><span>Nenhum comprovante inserido.</span>
        <?php endif; ?>
    </div>
    <!-- VOUCHER LIST -->

    <!-- VOUCHER FORM -->
    <div class="schedule-client--data txt-center">
        <div class="table-100 bold">
            Inserir Comprovantes
        </div>
        <div class="spt"></div>
        <form action="<?php echo BASE_URL; ?>schedule/voucher" method="post" enctype="multipart/form-data">
            <div class="table-line my-s">
                <div class="table-40 my-s space-input">
                    <input type="hidden" name="voucher_id" value="<?php echo $schedule_view['id']; ?>">
                    <select name="payment" id="payment" class="w-100">
                        <?php foreach ($payment_method_list as $pml) : ?>
                            <option value="<?php echo $pml['id']; ?>"><?php echo $pml['method']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="table-40 my-s space-input">
                    <input type="file" name="img_voucher" id="img_voucher" class="w-100" required>
                </div>
                <div class="table-10 my-s">
                    <input type="submit" name="form_voucher" value="Enviar Comprovante">
                </div>
        </form>
    </div>
</div>
<!-- VOUCHER FORM -->
<?php if ($services_total > 0) : ?>
    <form method="post" class="w-100 my-el" action="<?php echo BASE_URL; ?>schedule/aprove/<?php echo $schedule_view['id'] ?>">
        <div class="table-100 txt-center">
            <?php if ($schedule_view['situation'] == 1) : ?>
                <input type="hidden" name="schedule_date" id="schedule_date" value="<?php echo $date_schedule; ?>">
                <select name="payment" id="payment" class="table-30 my-el">
                    <?php foreach ($payment_method_list as $pml) : ?>
                        <option value="<?php echo $pml['id']; ?>"><?php echo $pml['method']; ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="w-100 txt-center">
                    <button type="submit" onclick="return confirm('Deseja realmente aprovar a reserva?')">Aprovar Reserva</button>
                    <a class="btn_sec" onclick="return confirm('Deseja realmente cancelar a reserva?')" href="<?php echo BASE_URL; ?>schedule/cancel/<?php echo $schedule_view['id'] ?>">Cancelar Reserva</a>
                </div>
            <?php else : ?>
                <div class="w-100 txt-center">
                    <a class="btn_sec" onclick="return confirm('Deseja realmente cancelar a reserva?')" href="<?php echo BASE_URL; ?>schedule/cancel/<?php echo $schedule_view['id'] ?>">Cancelar Reserva</a>
                </div>
            <?php endif; ?>
        </div>
    </form>
<?php endif; ?>
</div>


<!-- SCRIPTS JS -->
<script src="<?php echo BASE_URL; ?>assets/js/schedule.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script_price.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/functions.js"></script>