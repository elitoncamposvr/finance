<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/pdf.css" />
</head>

<body>
    <table width="100%" class="table-student-header" cellspacing="0">
        <tr>
            <td width="30%" height="40px" class="border txt-center bold">Nome da Criança:</td>
            <td class="border txt-center bold"><?php echo $student_info['student_name']; ?></td>
        </tr>
        <tr>
            <td width="30%" height="60px" class="border txt-center bold">Campo de Experiência</td>
            <td class="border txt-center">Espaços, tempos, quantidades, relações e transformações</td>
        </tr>
    </table>
    <div height="35px" class="border txt-center bold table-student-header bold">
        Objetivos de Aprendizagem
    </div>
    <?php
    $array = $students_answers_four['answers'];
    $answers = explode(",", $array);
    ?>
    <table width="100%" class="table-student-header" cellspacing="0">
        <tr>
            <td class="border">
                Consegue comparar objetos, deferenciando suas propriedades, tais como: tamanho, peso, textura, formato?
            </td>
            <td width="20%" class="border txt-center bold">
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
        </tr>
        <tr>
            <td class="border">
                Consegue representar por meio de desenhos distinções de medidas como altura e peso?
            </td>
            <td width="20%" class="border txt-center bold">
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
        </tr>
        <tr>
            <td class="border">
                Relata fatos importantes sobre seu nascimento e desenvolvimento, a história dos seus familiares ou de pessoas com quem convive?
            </td>
            <td width="20%" class="border txt-center bold">
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
        </tr>
        <tr>
            <td class="border">
                Ao contar acontecimentos, consegue indicar corretamente os marcadores de tempo, tais como: ontem, hoje, amanhã, manhã, tarde e noite?
            </td>
            <td width="20%" class="border txt-center bold">
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
        <tr>
            <td class="border">
                Consegue relacionar os números às suas respectivas quantidades?
            </td>
            <td width="20%" class="border txt-center bold">
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
        </tr>
        <tr>
            <td class="border">
                Identifica o antes, o depois e o entre em uma sequência de números?
            </td>
            <td width="20%" class="border txt-center bold">
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
        <tr>
            <td class="border">
                Ao receber indicações de sentido como para frente, para trás, para cima ou para baixo, coordena-se corretamente?
            </td>
            <td width="20%" class="border txt-center bold">
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
    </table>
</body>

</html>