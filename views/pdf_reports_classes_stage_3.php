<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/pdf.css" />
</head>

<body>
    <table width="100%" id="table-header" cellspacing="0">
        <tr>
            <td width="25%">
                <h2>Campo de experiência 3</h2>
                <div>&nbsp;</div>
                <div>
                    Traços, sons, cores e formas
                </div>
            </td>
            <td>
                <div>&nbsp;</div>
                <div class="table-100">Objetivos de Aprendizagem</div>
                <div>&nbsp;</div>
                <table width="100%" class="table-header--tds" cellspacing="0">
                    <tr>
                        <td>
                            TSCF.1
                        </td>
                        <td>
                            TSCF.2
                        </td>
                        <td>
                            TSCF.3
                        </td>
                        <td>
                            TSCF.4
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            Consegue usar adequadamente tinta, tesoura, lápis de cor, cola e outros materiais para expressar-se por meio das artes?
                        </td>
                        <td valign="top">
                            Sabe diferenciar os sons e os ritmos de acordo com sua intensidade, duração, altura e timbre?
                        </td>
                        <td valign="top">
                            Utiliza a musicalidade em brincadeiras e outras atividades?
                        </td>
                        <td valign="top">
                            Consegue produzir sons com materiais diversos em momentos dirigidos ou em brincadeiras?
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
        <?php foreach ($classes_list_three as $classes) : ?>
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
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>