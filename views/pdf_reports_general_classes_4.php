<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/pdf.css" />
</head>

<?php
$results51 = 0;
$results52 = 0;
$results53 = 0;

for ($answers5 = 0; $answers5 <= count($answers_five) - 1; $answers5++) {
    $array = $answers_five[$answers5]['answers'];
    $array2 = explode(",", $array);
    $r =  array_count_values($array2);
    $results51 += $r[1];
    $results52 += $r[2];
    $results53 += $r[3];
}

?>

<body>
    <table width="100%" cellspacing="0">
        <tr>
            <td>
                <table width="<?php echo (100 / (count($answers_five) * 6) * $results51); ?>%" cellspacing="0">
                    <tr>
                        <td class="h-50" style="background-color:red;">
                            &nbsp;&nbsp;<?php echo number_format((100 / (count($answers_five) * 6) * $results51), 2, ',', ' ');
                                        echo "%"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <table width="<?php echo (100 / (count($answers_five) * 6) * $results52); ?>%" cellspacing="0">
                    <tr>
                        <td class="h-50" style="background-color:blue;">
                            &nbsp;&nbsp;<?php echo number_format((100 / (count($answers_five) * 6) * $results52), 2, ',', ' ');
                                        echo "%"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <table width="<?php echo (100 / (count($answers_five) * 6) * $results53); ?>%" cellspacing="0">
                    <tr>
                        <td class="h-50" style="background-color:green;">
                            &nbsp;&nbsp;<?php echo number_format((100 / (count($answers_five) * 6) * $results53), 2, ',', ' ');
                                        echo "%"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table width="100%" cellspacing="0">
        <tr>
            <td height="40px" style="text-align: center; font-size:1.3rem; font-weight:bold;">
                Espaços, tempos, quantidades, relações e transformações
            </td>

        </tr>
    </table>
    <table width="100%" id="graph-info--bottom" cellspacing="0">
        <tr>
            <td height="20px"></td>
        </tr>
        <tr>
            <td width="20%"></td>
            <td style="background-color: red;" width="20px" height="20px">

            </td>
            <td>
                Começando
            </td>
            <td style="background-color: blue;" width="20px">

            </td>
            <td>
                Em desenvolvimento
            </td>
            <td style="background-color: green;" width="20px">

            </td>
            <td>
                Alcançado
            </td>
            <td width="20%"></td>
        </tr>
    </table>
</body>

</html>