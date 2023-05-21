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
            <td class="border txt-center">Escuta, fala, pensmento e imaginação</td>
        </tr>
    </table>
    <div height="35px" class="border txt-center bold table-student-header bold">
        Objetivos de Aprendizagem
    </div>
    <?php
    $array = $students_answers_five['answers'];
    $answers = explode(",", $array);
    ?>
    <table width="100%" class="table-student-header" cellspacing="0">
        <tr>
            <td class="border">
                Ao ter contato com livros, consegue ter interesse por meio das ilustrações, compreendendo seu conteúdo?
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
                Consegue recontar uma história, ou pelo menos, as principais partes?
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
                Levanta hipóteses em relação à linguagem escrita, realizando registros de palavras e textos, por meio de escrita espontânea?
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
                Ao ouvir contações de histórias ou outras leituras, demonstra atenção e interesse e consegue interagir com o professor?
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
                Consegue identificar e criar rimas em brincadeiras ou músicas?
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
                Consegue criar suas próprias histórias a partir do fornecimento de alguns elementos, como: personagens, espaços, dentre outros?
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