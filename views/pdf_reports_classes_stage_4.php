<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/pdf.css" />
</head>

<body>
    <table width="100%" id="table-header" cellspacing="0">
        <tr>
            <td width="25%">
                <h2>Campo de experiência 4</h2>
                <div>&nbsp;</div>
                <div>
                    Espaços, tempos, quantidades, relações e transformações
                </div>
            </td>
            <td>
                <div>&nbsp;</div>
                <div class="table-100">Objetivos de Aprendizagem</div>
                <div>&nbsp;</div>
                <table width="100%" class="table-header--tds" cellspacing="0">
                    <tr>
                        <td>
                            ETQRT.1
                        </td>
                        <td>
                            ETQRT.2
                        </td>
                        <td>
                            ETQRT.3
                        </td>
                        <td>
                            ETQRT.4
                        </td>
                        <td>
                            ETQRT.5
                        </td>
                        <td>
                            ETQRT.6
                        </td>
                        <td>
                            ETQRT.7
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            Consegue comparar objetos, deferenciando suas propriedades, tais como: tamanho, peso, textura, formato?
                        </td>
                        <td valign="top">
                            Consegue representar por meio de desenhos distinções de medidas como altura e peso?
                        </td>
                        <td valign="top">
                            Relata fatos importantes sobre seu nascimento e desenvolvimento, a história dos seus familiares ou de pessoas com quem convive?
                        </td>
                        <td valign="top">
                            Ao contar acontecimentos, consegue indicar corretamente os marcadores de tempo, tais como: ontem, hoje, amanhã, manhã, tarde e noite?
                        </td>
                        <td valign="top">
                            Consegue relacionar os números às suas respectivas quantidades?
                        </td>
                        <td valign="top">
                            Identifica o antes, o depois e o entre em uma sequência de números?
                        </td>
                        <td valign="top">
                            Ao receber indicações de sentido como para frente, para trás, para cima ou para baixo, coordenase corretamente?
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
        <?php foreach ($classes_list_four as $classes) : ?>
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
                <td>
                    <?php
                    if ($answers[6] == '1') {
                        echo "C";
                    } elseif ($answers[6] == '2') {
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