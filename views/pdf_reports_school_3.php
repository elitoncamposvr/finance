<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/pdf.css" />
</head>

<?php
$results31 = 0;
$results32 = 0;
$results33 = 0;
$results41 = 0;
$results42 = 0;
$results43 = 0;

for ($answers3 = 0; $answers3 <= count($answers_three) - 1; $answers3++) {
    $array = $answers_three[$answers3]['answers'];
    $array2 = explode(",", $array);
    $r =  array_count_values($array2);
    $results31 += $r[1];
    $results32 += $r[2];
    $results33 += $r[3];
}

for ($answers4 = 0; $answers4 <= count($answers_four) - 1; $answers4++) {
    $array = $answers_four[$answers4]['answers'];
    $array2 = explode(",", $array);
    $r =  array_count_values($array2);
    $results41 += $r[1];
    $results42 += $r[2];
    $results43 += $r[3];
}

?>

<body>
    <table width="100%" cellspacing="0">
        <tr>
            <td>
                <table width="<?php echo (100 / (count($answers_three) * 4) * $results31); ?>%" cellspacing="0">
                    <tr>
                        <td class="h-50" style="background-color:red;">
                            &nbsp;&nbsp;<?php echo number_format((100 / (count($answers_three) * 4) * $results31), 2, ',', ' ');
                                        echo "%"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <table width="<?php echo (100 / (count($answers_three) * 4) * $results32); ?>%" cellspacing="0">
                    <tr>
                        <td class="h-50" style="background-color:blue;">
                            &nbsp;&nbsp;<?php echo number_format((100 / (count($answers_three) * 4) * $results32), 2, ',', ' ');
                                        echo "%"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <table width="<?php echo (100 / (count($answers_three) * 4) * $results33); ?>%" cellspacing="0">
                    <tr>
                        <td class="h-50" style="background-color:green;">
                            &nbsp;&nbsp;<?php echo number_format((100 / (count($answers_three) * 4) * $results33), 2, ',', ' ');
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
    <table width="100%">
        <tr>
            <td height="80px"></td>
        </tr>
    </table>
    <table width="100%" cellspacing="0">
        <tr>
            <td>
                <table width="<?php echo (100 / (count($answers_four) * 7) * $results41); ?>%" cellspacing="0">
                    <tr>
                        <td class="h-50" style="background-color:red;">
                            &nbsp;&nbsp;<?php echo number_format((100 / (count($answers_four) * 7) * $results41), 2, ',', ' ');
                                        echo "%"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <table width="<?php echo (100 / (count($answers_four) * 7) * $results42); ?>%" cellspacing="0">
                    <tr>
                        <td class="h-50" style="background-color:blue;">
                            &nbsp;&nbsp;<?php echo number_format((100 / (count($answers_four) * 7) * $results42), 2, ',', ' ');
                                        echo "%"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <table width="<?php echo (100 / (count($answers_four) * 7) * $results43); ?>%" cellspacing="0">
                    <tr>
                        <td class="h-50" style="background-color:green;">
                            &nbsp;&nbsp;<?php echo number_format((100 / (count($answers_four) * 7) * $results43), 2, ',', ' ');
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
                Traços, sons, cores e formas
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