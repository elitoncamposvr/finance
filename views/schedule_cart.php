<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Reserva<i class="fas fa-angle-right fa-xs"></i>Visualizar Fechamento</h2>
    <span>
        <a class="btn" href="<?php echo BASE_URL; ?>schedule/listall"><i class="fas fa-angle-double-left"></i> Voltar</a>
    </span>
</div>

<div class="content" id="printarea">

    <!-- CLIENTS DATA -->
    <div class="schedule-client--data">
        <div class="table-100 bold my-s">
            <?php echo $schedule_info['client_id'] ?> -
            <?php echo $schedule_info['client_name'] ?>
        </div>
        <div class="spt"></div>
        <div class="table-line my-s">
            <div class="table-33">
                <label for="phone" class="bold">CPF/CNPJ: </label>
                <span>
                    <?php echo $schedule_info['cpf'] ?>
                </span>
            </div>
            <div class="table-33">
                <label for="state_registration" class="bold">Identidade: </label>
                <span>
                    <?php echo $schedule_info['identity'] ?>
                </span>
            </div>
            <div class="table-33">

            </div>
        </div>
        <div class="table-line my-s">
            <div class="table-33">
                <label for="phone" class="bold">Telefone: </label>
                <span><?php echo $schedule_info['phone'] ?></span>
            </div>
            <div class="table-33">
                <label for="phone" class="bold">Celular: </label>
                <span><?php echo $schedule_info['cellphone'] ?></span>
            </div>
            <div class="table-33">
                <label for="phone" class="bold">Whatsapp: </label>
                <span><?php echo $schedule_info['whatsapp'] ?></span>
            </div>
        </div>

        <div class="table-100 my-s">
            <label for="phone" class="bold">Endereço: </label>
            <span>
                <?php echo $schedule_info['address'] ?>,
                <?php echo $schedule_info['address_number'] ?>,
                <?php echo $schedule_info['address2'] ?>,
                <?php echo $schedule_info['address_neighb'] ?>
            </span>
        </div>
        <div class="table-100 my-s">
            <label for="phone" class="bold">Cidade/UF: </label>
            <span>
                <?php echo $schedule_info['address_city'] ?>,
                <?php echo $schedule_info['address_state'] ?>
            </span>
        </div>
    </div>
    <!-- CLIENTS DATA -->

    <!-- ADITIONAL INFO -->
    <div class="menu_data py-el mb-el">
        <div>
            <label for="aditional_info" class="bold mr-m">Observações: </label>
            <span>
                <?php echo $schedule_info['aditional_info']; ?>
                <i class="fa-solid fa-pen-to-square" onclick="showBtnAditionalInfo(this)"></i>
            </span>
        </div>
        <div>
            <a class="btn" href="#" onclick="itemShow()">Histórico</a>
        </div>
    </div>
    <!-- ADITIONAL INFO -->

    <!-- PAYMENT METHOD -->
    <div class="menu_data py-el">
        <div>
            <label class="bold txt-up mr-el" for="mechanic">Forma de Pagamento:</label>
            <?php echo $schedule_info['method'] ?>
        </div>
    </div>
    <!-- PAYMENT METHOD -->

    <!-- HISTORY DATA -->
    <div class="history print_none" id="item_toggle">
        <div class="table-100 bold txt-center">
            Histórico da Reserva
        </div>
        <?php if ($history_list) : ?>
            <?php foreach ($history_list as $hl) : ?>
                <div class="table-line ">
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

    <div class="table_header mt-3">
        <div class="table-100 txt-center">Serviços Executados</div>
    </div>

    <!-- Dados da Tabela (Data Table)-->
    <?php foreach ($schedules_services as $s) : ?>
        <div class="table_data wrap">
            <div class="table-line">
                <div class="table-30">
                    <label for="name_service" class="bold">Serviço</label>
                    <div class="w-100">
                        <?php echo $s['name_service']; ?>
                    </div>

                </div>
                <div class="table-20">
                    <label for="date_service" class="bold">Data/Horário</label>
                    <div class="w-100">
                        <?php echo date('d/m/Y', strtotime($s['date_service']));
                        echo ' ' . date('h:i', strtotime($s['time_service'])); ?>
                    </div>
                </div>
                <div class="table-15">
                    <label for="data-sale" class="bold">Valor</label>
                    <div class="w-100">
                        R$ <?php echo number_format($s['sale_value'], 2, ',', '.'); ?>
                    </div>
                </div>
                <div class="table-15">
                    <label for="passengers" class="bold">Passageiros</label>
                    <div class="w-100 txt-center">
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
            </div>
            <div class="table-line mt-2">
                <div class="table-30">
                    <label for="departure" class="bold">Embarque</label>
                    <div class="w-100">
                        <?php echo $s['departure']; ?>
                    </div>
                </div>
                <div class="table-20">
                    <label for="arrival" class="bold">Desembarque</label>
                    <div class="w-100">
                        <?php echo $s['arrival']; ?>
                    </div>
                </div>
                <div class="table-50">
                    <label for="provider" class="bold">Fornecedor</label>
                    <div class="w-100">
                        <?php echo $s['name_provider']; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- FIELD VALUES -->
    <div class="data_info my-3">
        <div>
            <span class="bold">Total: </span> R$ <span class="area-value" data-services="<?php echo $services_total; ?>"><?php echo number_format($services_total, 2, ',', '.'); ?></span>
        </div>
        <div>
            <span class="bold">Desconto: </span>R$ <span data-discount="<?php echo $schedule_info['discount']; ?>"><?php echo number_format($schedule_info['discount'], 2, ',', '.'); ?></span>
        </div>
        <div>
            <span class="bold">Geral: </span>R$ <span class="total-area"></span>
        </div>
    </div>
    <!-- FIELD VALUES -->

    <!-- VOUCHER LIST -->
    <div class="flash_info my-2 wrap">
        <div class="table-100 txt-center bold">Comprovantes</div>
        <div class="separator"></div>
        <?php if ($voucher_list) : ?>
            <?php foreach ($voucher_list as $vl) : ?>
                <div class="table-33 txt-center my-s">
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

    <div class="btn-close-schedule">
        <a href="#" onclick="PrintDiv()" class="btn">
            <i class="fas fa-print"></i> Imprimir
        </a>
    </div>
</div>

<!-- SCRIPTS JS -->
<script src="<?php echo BASE_URL; ?>assets/js/schedule.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script_price.js"></script>
<script src="<?php echo BASE_URL; ?>assets/js/functions.js"></script>


<!--Script Impressão (Print)  -->
<script type="text/javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('printarea');
        var popupWin = window.open('', '_blank');
        popupWin.document.open();
        popupWin.document.write('<html><head><title>Comprovante de Reserva</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/print.css" /><style>body{display:block;}.display_print{display:block;}</style></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>