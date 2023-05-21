<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/pdf.css" />
</head>

<body>
    <?php
    $count1 = count($answers_one);
    $results1 =  array_count_values($answers_one);

    $count2 = count($answers_two);
    $results2 =  array_count_values($answers_two);

    $count3 = count($answers_three);
    $results3 =  array_count_values($answers_three);

    $count4 = count($answers_four);
    $results4 =  array_count_values($answers_four);

    $count5 = count($answers_five);
    $results5 =  array_count_values($answers_five);

    ?>
    <table width="100%" cellspacing="0">
        <tr>
            <td width="30%" height="40px">
                O eu, o outro e nós
            </td>
            <td>
                <table width="100%" style="color: white; text-align:center;" cellspacing="0">
                    <tr>
                        <td heigth="30px" style="background-color: blue;" width="<?php if (isset($results1[1])) {
                                                                                        echo (100 / $count1 * $results1[1]);
                                                                                        echo '%';
                                                                                    } else {
                                                                                        echo '0';
                                                                                    } ?>">
                            <?php if (isset($results1[1])) {
                                echo number_format((100 / (count($answers_one)) * $results1[1]), 2, ',', ' ');
                                echo '%';
                            } ?>
                        </td>
                        <td style="background-color: red;" width="<?php if (isset($results1[2])) {
                                                                        echo (100 / $count1 * $results1[2]);
                                                                        echo '%';
                                                                    } else {
                                                                        echo '0';
                                                                    } ?>">

                            <?php if (isset($results1[2])) {
                                echo number_format((100 / (count($answers_one)) * $results1[2]), 2, ',', ' ');
                                echo '%';
                            } ?>
                        </td>
                        <td style="background-color: green;" width="<?php if (isset($results1[3])) {
                                                                        echo (100 / $count1 * $results1[3]);
                                                                        echo '%';
                                                                    } else {
                                                                        echo '0';
                                                                    } ?>">
                            <?php if (isset($results1[3])) {
                                echo number_format((100 / (count($answers_one)) * $results1[3]), 2, ',', ' ');
                                echo '%';
                            } ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td height="1px" style="background-color:#DDD"></td>
            <td height="1px" style="background-color:#DDD"></td>
        </tr>
        <tr>
            <td width="30%" height="40px">
                Corpo, gesto e movimento
            </td>
            <td>
                <table width="100%" style="color: white; text-align:center;" cellspacing="0">
                    <tr>
                        <td heigth="30px" style="background-color: blue;" width="<?php if (isset($results2[1])) {
                                                                                        echo (100 / $count2 * $results2[1]);
                                                                                        echo '%';
                                                                                    } else {
                                                                                        echo '0';
                                                                                    } ?>">
                            <?php if (isset($results2[1])) {
                                echo number_format((100 / (count($answers_two)) * $results2[1]), 2, ',', ' ');
                                echo '%';
                            } ?>
                        </td>
                        <td style="background-color: red;" width="<?php if (isset($results2[2])) {
                                                                        echo (100 / $count2 * $results2[2]);
                                                                        echo '%';
                                                                    } else {
                                                                        echo '0';
                                                                    } ?>">
                            <?php if (isset($results2[2])) {
                                echo number_format((100 / (count($answers_two)) * $results2[2]), 2, ',', ' ');
                                echo '%';
                            } ?>
                        </td>
                        <td style="background-color: green;" width="<?php if (isset($results2[3])) {
                                                                        echo (100 / $count2 * $results2[3]);
                                                                        echo '%';
                                                                    } else {
                                                                        echo '0';
                                                                    } ?>">
                            <?php if (isset($results2[3])) {
                                echo number_format((100 / (count($answers_two)) * $results2[3]), 2, ',', ' ');
                                echo '%';
                            } ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td height="1px" style="background-color:#DDD"></td>
            <td height="1px" style="background-color:#DDD"></td>
        </tr>
        <tr>
            <td width="30%" height="40px">
                Traços, sons, cores e formas
            </td>
            <td>
                <table width="100%" style="color: white; text-align:center;" cellspacing="0">
                    <tr>
                        <td heigth="30px" style="background-color: blue;" width="<?php if (isset($results3[1])) {
                                                                                        echo (100 / $count3 * $results3[1]);
                                                                                        echo '%';
                                                                                    } else {
                                                                                        echo '0';
                                                                                    } ?>">
                            <?php if (isset($results3[1])) {
                                echo number_format((100 / (count($answers_three)) * $results3[1]), 2, ',', ' ');
                                echo '%';
                            } ?>
                        </td>
                        <td style="background-color: red;" width="<?php if (isset($results3[2])) {
                                                                        echo (100 / $count3 * $results3[2]);
                                                                        echo '%';
                                                                    } else {
                                                                        echo '0';
                                                                    } ?>">
                            <?php if (isset($results3[2])) {
                                echo number_format((100 / (count($answers_three)) * $results3[2]), 2, ',', ' ');
                                echo '%';
                            } ?>
                        </td>
                        <td style="background-color: green;" width="<?php if (isset($results3[3])) {
                                                                        echo (100 / $count3 * $results3[3]);
                                                                        echo '%';
                                                                    } else {
                                                                        echo '0';
                                                                    } ?>">
                            <?php if (isset($results3[3])) {
                                echo number_format((100 / (count($answers_three)) * $results3[3]), 2, ',', ' ');
                                echo '%';
                            } ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td height="1px" style="background-color:#DDD"></td>
            <td height="1px" style="background-color:#DDD"></td>
        </tr>
        <tr>
            <td width="30%" height="40px">
                Espaços, tempos, quantidades, relações e transformações
            </td>
            <td>
                <table width="100%" style="color: white; text-align:center;" cellspacing="0">
                    <tr>
                        <td heigth="30px" style="background-color: blue;" width="<?php if (isset($results4[1])) {
                                                                                        echo (100 / $count4 * $results4[1]);
                                                                                        echo '%';
                                                                                    } else {
                                                                                        echo '0';
                                                                                    } ?>">
                            <?php if (isset($results4[1])) {
                                echo number_format((100 / (count($answers_four)) * $results4[1]), 2, ',', ' ');
                                echo '%';
                            } ?>
                        </td>
                        <td style="background-color: red;" width="<?php if (isset($results4[2])) {
                                                                        echo (100 / $count4 * $results4[2]);
                                                                        echo '%';
                                                                    } else {
                                                                        echo '0';
                                                                    } ?>">
                            <?php if (isset($results4[2])) {
                                echo number_format((100 / (count($answers_four)) * $results4[2]), 2, ',', ' ');
                                echo '%';
                            } ?>
                        </td>
                        <td style="background-color: green;" width="<?php if (isset($results4[3])) {
                                                                        echo (100 / $count4 * $results4[3]);
                                                                        echo '%';
                                                                    } else {
                                                                        echo '0';
                                                                    } ?>">
                            <?php if (isset($results4[3])) {
                                echo number_format((100 / (count($answers_four)) * $results4[3]), 2, ',', ' ');
                                echo '%';
                            } ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td height="1px" style="background-color:#DDD"></td>
            <td height="1px" style="background-color:#DDD"></td>
        </tr>
        <tr>
            <td width="30%" height="40px">
                Escuta, fala, pensmento e imaginação
            </td>
            <td>
                <table width="100%" style="color: white; text-align:center;" cellspacing="0">
                    <tr>
                        <td heigth="30px" style="background-color: blue;" width="<?php if (isset($results5[1])) {
                                                                                        echo (100 / $count5 * $results5[1]);
                                                                                        echo '%';
                                                                                    } else {
                                                                                        echo '0';
                                                                                    } ?>">
                            <?php if (isset($results5[1])) {
                                echo number_format((100 / (count($answers_five)) * $results5[1]), 2, ',', ' ');
                                echo '%';
                            } ?>
                        </td>
                        <td style="background-color: red;" width="<?php if (isset($results5[2])) {
                                                                        echo (100 / $count5 * $results5[2]);
                                                                        echo '%';
                                                                    } else {
                                                                        echo '0';
                                                                    } ?>">
                            <?php if (isset($results5[2])) {
                                echo number_format((100 / (count($answers_five)) * $results5[2]), 2, ',', ' ');
                                echo '%';
                            } ?>
                        </td>
                        <td style="background-color: green;" width="<?php if (isset($results5[3])) {
                                                                        echo (100 / $count5 * $results5[3]);
                                                                        echo '%';
                                                                    } else {
                                                                        echo '0';
                                                                    } ?>">
                            <?php if (isset($results5[3])) {
                                echo number_format((100 / (count($answers_five)) * $results5[3]), 2, ',', ' ');
                                echo '%';
                            } ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td height="1px" style="background-color:#DDD"></td>
            <td height="1px" style="background-color:#DDD"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <table width="100%">
                    <tr>
                        <td width="20px" style="background-color: blue;"></td>
                        <td>Começando</td>
                        <td width="20px" style="background-color:red;"></td>
                        <td>Desenvolvendo</td>
                        <td width="20px" style="background-color:green;"></td>
                        <td>Alcançado</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>