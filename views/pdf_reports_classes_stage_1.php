<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/pdf.css" />
</head>

<body>
    <table width="100%" id="table-header" cellspacing="0">
        <tr>
            <td width="25%">
                <h2>Campo de experiência 1</h2>
                <div>&nbsp;</div>
                <div>
                    O eu, o outro e nós.
                </div>
            </td>
            <td>
                <div>&nbsp;</div>
                <div class="table-100">Objetivos de Aprendizagem</div>
                <div>&nbsp;</div>
                <table width="100%" class="table-header--tds" cellspacing="0">
                    <tr>
                        <td>
                            EON.1
                        </td>
                        <td>
                            EON.2
                        </td>
                        <td>
                            EON.3
                        </td>
                        <td>
                            EON.4
                        </td>
                        <td>
                            EON.5
                        </td>
                        <td>
                            EON.6
                        </td>
                        <td>
                            EON.7
                        </td>
                        <td>
                            EON.8
                        </td>
                        <td>
                            EON.9
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            Age de maneira independente, com confiança em suas capacidades, reconhecendo suas conquistas e limites?
                        </td>
                        <td valign="top">
                            Respeita as regras nas interaçõe e brincadeiras?
                        </td>
                        <td valign="top">
                            Consegue comunicar suas ideias e sentimentos aos colegas e professores com respeito?
                        </td>
                        <td valign="top">
                            Reconhece os sentimentos dos outros e os seus próprios, respeitando as diferenças?
                        </td>
                        <td valign="top">
                            Compartilha objetos e espaços com outras crianças e com adultos?
                        </td>
                        <td valign="top">
                            Tem atitudes de empatia, auxiliando as outras crianças em diversas situações do turno de aula?
                        </td>
                        <td valign="top">
                            Tem atitudes de participação e colaboração em momentos coletivos, ampliando as relações com os colegas?
                        </td>
                        <td valign="top">
                            Reconhece as características de seu corpo, percebendo as diferenças das demais crianças de forma respeitosa, vendo-se de forma positiva?
                        </td>
                        <td valign="top">
                            Em situações de conflitos nas interações com crianças e adultos, consegue utilizar estratégias pautadas no respeito mútuo para buscar soluções?
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
        <?php foreach ($classes_list_one as $classes) : ?>
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
                <td>
                    <?php
                    if ($answers[7] == '1') {
                        echo "C";
                    } elseif ($answers[7] == '2') {
                        echo "D";
                    } else {
                        echo "A";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if ($answers[8] == '1') {
                        echo "C";
                    } elseif ($answers[8] == '2') {
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