<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/pdf.css" />
</head>

<body>
    <table width="100%" id="table-header" cellspacing="0">
        <tr>
            <td width="25%">
                <h2>Campo de experiência 5</h2>
                <div>&nbsp;</div>
                <div>
                    Escuta, fala, pensamento e imaginação
                </div>
            </td>
            <td>
                <div>&nbsp;</div>
                <div class="table-100">Objetivos de Aprendizagem</div>
                <div>&nbsp;</div>
                <table width="100%" class="table-header--tds" cellspacing="0">
                    <tr>
                        <td>
                            EFPI.1
                        </td>
                        <td>
                            EFPI.2
                        </td>
                        <td>
                            EFPI.3
                        </td>
                        <td>
                            EFPI.4
                        </td>
                        <td>
                            EFPI.5
                        </td>
                        <td>
                            EFPI.6
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            Ao ter contato com livros, consegue ter interesse por meio das ilustrações, compreendendo seu conteúdo?
                        </td>
                        <td valign="top">
                            Consegue recontar uma história, ou pelo menos, as principais partes?
                        </td>
                        <td valign="top">
                            Levanta hipóteses em relação à linguagem escrita, realizando registros de palavras e textos, por meio de escrita espontânea?
                        </td>
                        <td valign="top">
                            Ao ouvir contações de histórias ou outras leituras, demonstra atenção e interesse e consegue interagir com o professor?
                        </td>
                        <td valign="top">
                            Consegue identificar e criar rimas em brincadeiras ou músicas?
                        </td>
                        <td valign="top">
                            Consegue criar suas próprias histórias a partir do fornecimento de alguns elementos, como: personagens, espaços, dentre outros?
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
        <?php foreach ($classes_list_five as $classes) : ?>
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