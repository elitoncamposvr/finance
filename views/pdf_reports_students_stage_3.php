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
            <td class="border txt-center">Traços, sons, cores e formas</td>
        </tr>
    </table>
    <div height="35px" class="border txt-center bold table-student-header bold">
        Objetivos de Aprendizagem
    </div>
    <?php
    $array = $students_answers_three['answers'];
    $answers = explode(",", $array);
    ?>
    <table width="100%" class="table-student-header" cellspacing="0">
        <tr>
            <td class="border">
                Consegue usar adequadamente tinta, tesoura, lápis de cor, cola e outros materiais para expressar-se por meio das artes?
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
                Sabe diferenciar os sons e os ritmos de acordo com sua intensidade, duração, altura e timbre?
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
                Utiliza a musicalidade em brincadeiras e outras atividades?
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
                Consegue produzir sons com materiais diversos em momentos dirigidos ou em brincadeiras?
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
    </table>
</body>

</html>