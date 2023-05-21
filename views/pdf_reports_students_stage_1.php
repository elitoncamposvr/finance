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
            <td class="border txt-center">O eu, o outro e nós.</td>
        </tr>
    </table>
    <div height="35px" class="border txt-center bold table-student-header bold">
        Objetivos de Aprendizagem
    </div>
    <?php
    $array = $students_answers_one['answers'];
    $answers = explode(",", $array);
    ?>
    <table width="100%" class="table-student-header" cellspacing="0">
        <tr>
            <td class="border">
                Age de maneira independente, com confiança em suas capacidades, reconhecendo suas conquistas e limites?
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
                Respeita as regras nas interaçõe e brincadeiras?
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
                Consegue comunicar suas ideias e sentimentos aos colegas e professores com respeito?
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
                Reconhece os sentimentos dos outros e os seus próprios, respeitando as diferenças?
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
                Compartilha objetos e espaços com outras crianças e com adultos?
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
                Tem atitudes de empatia, auxiliando as outras crianças em diversas situações do turno de aula?
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
                Tem atitudes de participação e colaboração em momentos coletivos, ampliando as relações com os colegas?
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
        <tr>
            <td class="border">
                Reconhece as características de seu corpo, percebendo as diferenças das demais crianças de forma respeitosa, vendo-se de forma positiva?
            </td>
            <td width="20%" class="border txt-center bold">
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
        </tr>
        <tr>
            <td class="border">
                Em situações de conflitos nas interações com crianças e adultos, consegue utilizar estratégias pautadas no respeito mútuo para buscar soluções?
            </td>
            <td width="20%" class="border txt-center bold">
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
    </table>
</body>

</html>