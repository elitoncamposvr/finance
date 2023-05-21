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
$results31 = 0;
$results32 = 0;
$results33 = 0;
$results41 = 0;
$results42 = 0;
$results43 = 0;
$results51 = 0;
$results52 = 0;
$results53 = 0;

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
            <td height="300px" valign="bottom">
                <table width="100%" cellspacing="0">
                    <tr>
                        <td height="<?php echo (100 / 9 * $results11 * 3); ?>px" style="background-color: red;"></td>
                    </tr>
                </table>
            <td width="1%"></td>
            <td valign="bottom">
                <table width="100%" cellspacing="0">
                    <tr>
                        <td height="<?php echo (100 / 9 * $results12 * 3); ?>px" style="background-color: blue;"></td>
                    </tr>
                </table>
            </td>
            <td width="1%"></td>
            <td valign="bottom">
                <table width="100%" cellspacing="0">
                    <tr>
                        <td height="<?php echo (100 / 9 * $results13 * 3); ?>px" style="background-color: green;"></td>
                    </tr>
                </table>
            </td>
            <td width="8%"></td>
            <td height="300px" valign="bottom">
                <table width="100%" cellspacing="0">
                    <tr>
                        <td height="<?php echo (100 / 9 * $results21 * 3); ?>px" style="background-color: red;"></td>
                    </tr>
                </table>
            <td width="1%"></td>
            <td valign="bottom">
                <table width="100%" cellspacing="0">
                    <tr>
                        <td height="<?php echo (100 / 9 * $results22 * 3); ?>px" style="background-color: blue;"></td>
                    </tr>
                </table>
            </td>
            <td width="1%"></td>
            <td valign="bottom">
                <table width="100%" cellspacing="0">
                    <tr>
                        <td height="<?php echo (100 / 9 * $results23 * 3); ?>px" style="background-color: green;"></td>
                    </tr>
                </table>
            </td>
            <td width="8%"></td>
            <td height="300px" valign="bottom">
                <table width="100%" cellspacing="0">
                    <tr>
                        <td height="<?php echo (100 / 9 * $results31 * 3); ?>px" style="background-color: red;"></td>
                    </tr>
                </table>
            <td width="1%"></td>
            <td valign="bottom">
                <table width="100%" cellspacing="0">
                    <tr>
                        <td height="<?php echo (100 / 9 * $results32 * 3); ?>px" style="background-color: blue;"></td>
                    </tr>
                </table>
            </td>
            <td width="1%"></td>
            <td valign="bottom">
                <table width="100%" cellspacing="0">
                    <tr>
                        <td height="<?php echo (100 / 9 * $results33 * 3); ?>px" style="background-color: green;"></td>
                    </tr>
                </table>
            </td>
            <td width="8%"></td>
            <td height="300px" valign="bottom">
                <table width="100%" cellspacing="0">
                    <tr>
                        <td height="<?php echo (100 / 9 * $results41 * 3); ?>px" style="background-color: red;"></td>
                    </tr>
                </table>
            <td width="1%"></td>
            <td valign="bottom">
                <table width="100%" cellspacing="0">
                    <tr>
                        <td height="<?php echo (100 / 9 * $results42 * 3); ?>px" style="background-color: blue;"></td>
                    </tr>
                </table>
            </td>
            <td width="1%"></td>
            <td valign="bottom">
                <table width="100%" cellspacing="0">
                    <tr>
                        <td height="<?php echo (100 / 9 * $results43 * 3); ?>px" style="background-color: green;"></td>
                    </tr>
                </table>
            </td>
            <td width="8%"></td>
            <td height="300px" valign="bottom">
                <table width="100%" cellspacing="0">
                    <tr>
                        <td height="<?php echo (100 / 9 * $results51 * 3); ?>px" style="background-color: red;"></td>
                    </tr>
                </table>
            <td width="1%"></td>
            <td valign="bottom">
                <table width="100%" cellspacing="0">
                    <tr>
                        <td height="<?php echo (100 / 9 * $results52 * 3); ?>px" style="background-color: blue;"></td>
                    </tr>
                </table>
            </td>
            <td width="1%"></td>
            <td valign="bottom">
                <table width="100%" cellspacing="0">
                    <tr>
                        <td height="<?php echo (100 / 9 * $results53 * 3); ?>px" style="background-color: green;"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table width="100%" id="graph-info--bottom" cellspacing="0">
        <tr>
            <td width="20%" height="40px">
                O eu, o outro e nós
            </td>
            <td width="20%">
                Corpo, gesto e movimento
            </td>
            <td width="20%">
                Espaços, tempos, quantidades, relações e transformações
            </td>
            <td width="20%">
                Traços, sons, cores e formas
            </td>
            <td width="20%">
                Escuta, fala, pensamento e imaginação
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