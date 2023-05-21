<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/pdf.css" />
</head>

<body>
    <table width="100%" id="table-header" cellspacing="0">
        <tr>
            <td width="25%">
                <h2>Campo de experiência 2</h2>
                <div>&nbsp;</div>
                <div>
                    Corpo, gesto e movimento
                </div>
            </td>
            <td>
                <div>&nbsp;</div>
                <div class="table-100">Objetivos de Aprendizagem</div>
                <div>&nbsp;</div>
                <table width="100%" class="table-header--tds" cellspacing="0">
                    <tr>
                        <td>
                            CGM.1
                        </td>
                        <td>
                            CGM.2
                        </td>
                        <td>
                            CGM.3
                        </td>
                        <td>
                            CGM.4
                        </td>
                        <td>
                            CGM.5
                        </td>
                        <td>
                            CGM.6
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            Demonstra controle e adequação do uso de seu corpo em brincadeiras e jogos?
                        </td>
                        <td valign="top">
                            Tem independência ao cuidar do próprio corpo, nos aspectos relacionados à higiene?
                        </td>
                        <td valign="top">
                            Nos momentos de alimentação, tem autonomia para comer?
                        </td>
                        <td valign="top">
                            Tem consciência corporal, sendo capaz de representar o corpo humano por meio de desenho, distinguindo as partes do corpo?
                        </td>
                        <td valign="top">
                            Cria com o corpo formas diversificadas de expressão de sentimentos, sensações e emoções, tanto nas situações do cotidiano quanto em brincadeiras, dança, teatro, música?
                        </td>
                        <td valign="top">
                            Coordena suas habilidades manuais no atendimento adequado aos seus interesses e necessidades em situações diversas?
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table width="100%" id="table-header" cellspacing="0">
        <tr>
            <td width="25%" style="font-weight: bold;">
                Nome das Crianças
            </td>
            <td style="font-weight: bold;">
                Registre sua percepção sobre esses objetivos em cada criança <br>
                Preencha: C - começando D - desenvolvendo A - alcançado
            </td>
        </tr>
    </table>
    <table width="100%" id="table-data" cellspacing="0">
        <?php foreach ($classes_list_two as $classes) : ?>
            <?php
            $array = $classes['answers'];
            $answers = explode(",", $array);
            ?>
            <tr class="border">
                <td width="25%">
                    <?php echo $classes['name']; ?>
                </td>
                <td>
                    <?php
                    if ($answers[0] == '1') {
                        echo "C";
                    } elseif ($answers[0] == '2') {
                        echo "D";
                    } else {
                        echo "A";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($answers[1] == '1') {
                        echo "C";
                    } elseif ($answers[1] == '2') {
                        echo "D";
                    } else {
                        echo "A";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($answers[2] == '1') {
                        echo "C";
                    } elseif ($answers[2] == '2') {
                        echo "D";
                    } else {
                        echo "A";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($answers[3] == '1') {
                        echo "C";
                    } elseif ($answers[3] == '2') {
                        echo "D";
                    } else {
                        echo "A";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($answers[4] == '1') {
                        echo "C";
                    } elseif ($answers[4] == '2') {
                        echo "D";
                    } else {
                        echo "A";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($answers[5] == '1') {
                        echo "C";
                    } elseif ($answers[5] == '2') {
                        echo "D";
                    } else {
                        echo "A";
                    }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>