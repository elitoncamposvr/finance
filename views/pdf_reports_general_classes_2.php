<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/pdf.css" />
</head>

<?php
$results11 = 0;
$results12 = 0;
$results13 = 0;
$results21 = 0;
$results22 = 0;
$results23 = 0;

for ($answers1 = 0; $answers1 <= count($answers_one) - 1; $answers1++) {
    $array = $answers_one[$answers1]['answers'];
    $array2 = explode(",", $array);
    $r =  array_count_values($array2);
    $results11 += $r[1];
    $results12 += $r[2];
    $results13 += $r[3];
}

for ($answers2 = 0; $answers2 <= count($answers_two) - 1; $answers2++) {
    $array = $answers_two[$answers2]['answers'];
    $array2 = explode(",", $array);
    $r =  array_count_values($array2);
    $results21 += $r[1];
    $results22 += $r[2];
    $results23 += $r[3];
}
?>

<body>
    <table width="100%" cellspacing="0">
        <tr>
            <td>
                <table width="<?php echo (100 / (count($answers_one) * 9) * $results11); ?>%" cellspacing="0">
                    <tr>
                        <td class="h-50" style="background-color:red;">
                            &nbsp;&nbsp;<?php echo number_format((100 / (count($answers_one) * 9) * $results11), 2, ',', ' ');
                                        echo "%"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <table width="<?php echo (100 / (count($answers_one) * 9) * $results12); ?>%" cellspacing="0">
                    <tr>
                        <td class="h-50" style="background-color:blue;">
                            &nbsp;&nbsp;<?php echo number_format((100 / (count($answers_one) * 9) * $results12), 2, ',', ' ');
                                        echo "%"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <table width="<?php echo (100 / (count($answers_one) * 9) * $results13); ?>%" cellspacing="0">
                    <tr>
                        <td class="h-50" style="background-color:green;">
                            &nbsp;&nbsp;<?php echo number_format((100 / (count($answers_one) * 9) * $results13), 2, ',', ' ');
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
                O eu, o outro e nós
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
                <table width="<?php echo (100 / (count($answers_two) * 6) * $results21); ?>%" cellspacing="0">
                    <tr>
                        <td class="h-50" style="background-color:red;">
                            &nbsp;&nbsp;<?php echo number_format((100 / (count($answers_two) * 6) * $results21), 2, ',', ' ');
                                        echo "%"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <table width="<?php echo (100 / (count($answers_two) * 6) * $results22); ?>%" cellspacing="0">
                    <tr>
                        <td class="h-50" style="background-color:blue;">
                            &nbsp;&nbsp;<?php echo number_format((100 / (count($answers_two) * 6) * $results22), 2, ',', ' ');
                                        echo "%"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                <table width="<?php echo (100 / (count($answers_two) * 6) * $results23); ?>%" cellspacing="0">
                    <tr>
                        <td class="h-50" style="background-color:green;">
                            &nbsp;&nbsp;<?php echo number_format((100 / (count($answers_two) * 6) * $results23), 2, ',', ' ');
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
                Corpo, gesto e movimento
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