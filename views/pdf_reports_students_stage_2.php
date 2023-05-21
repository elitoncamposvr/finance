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
            <td class="border txt-center">Corpo, gesto e movimento</td>
        </tr>
    </table>
    <div height="35px" class="border txt-center bold table-student-header bold">
        Objetivos de Aprendizagem
    </div>
    <?php
    $array = $students_answers_two['answers'];
    $answers = explode(",", $array);
    ?>
    <table width="100%" class="table-student-header" cellspacing="0">
        <tr>
            <td class="border">
                Demonstra controle e adequação do uso de seu corpo em brincadeiras e jogos?
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
                Tem independência ao cuidar do próprio corpo, nos aspectos relacionados à higiene?
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
                Nos momentos de alimentação, tem autonomia para comer?
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
                Tem consciência corporal, sendo capaz de representar o corpo humano por meio de desenho, distinguindo as partes do corpo?
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
                Cria com o corpo formas diversificadas de expressão de sentimentos, sensações e emoções, tanto nas situações do cotidiano quanto em brincadeiras, dança, teatro, música?
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
                Coordena suas habilidades manuais no atendimento adequado aos seus interesses e necessidades em situações diversas?
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
    </table>
</body>

</html>