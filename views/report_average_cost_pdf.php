<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/main.css" />
    <title>Relatório de Reservas</title>
</head>

<body>

    <h1>Relatório de Reservas</h1>
    <fieldset>
        <?php
        if (!empty($filters['period1']) && !empty($filters['period2'])) {
            echo "No período: " . date('d/m/Y', strtotime($filters['period1'])) . " a " . date('d/m/Y', strtotime($filters['period2'])) . "<br>";
        }
        if(isset($filters['provider_id']) && !empty($filters['provider_id'])){
			echo "Filtrando pelo Fornecedor: ".$filters['provider_id']."<br>";
		}
        ?>
        
    </fieldset>
    <br>
    <?php if ($total_list) : ?>
    <table style="width: 100%;">
        <tr>
            <th>Fornecedor</th>
            <th>Data Comissão</th>
            <th>Valor</th>
            <th>Custo</th>
            <th>Reserva nº</th>
        </tr>

        <?php foreach ($total_list as $total) : ?>
            <tr>
                <td width="35%"><?php echo $total['name_provider']; ?></td>
                <td width="20%"><?php echo date('d/m/Y', strtotime($total['schedule_date'])); ?></td>
                <td width="15%"><?php echo number_format($total['total_with_discount'], 2, ',', '.'); ?></td>
                <td width="15%"><?php echo number_format($total['total_cost'], 2, ',', '.'); ?></td>
                <td width="15%"><?php echo $total['id']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?php else : ?>
        <div class="flash_info my-x txt-center">
            <p>Nenhum registro encontrado!</p>
        </div>
    <?php endif; ?>

</body>

</html>