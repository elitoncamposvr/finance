<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/pdf.css" />
    <title><?php echo $classes_info['school_name']; ?> - Relatório Geral</title>
</head>

<body>
    <div class="container border-cloak">
        <div class="cloak-top">
            <div class="cloak-top--left">
                <img src="<?php echo BASE_URL; ?>assets/images/enfance.png" alt="Logo Enfance">
            </div>
            <div class="cloak-top--right">
                <div class="cloak-top--right-text">
                    Análise de Desenvolvimento das Aprendizagens Educação Infantil
                </div>
            </div>
        </div>
        <div class="cloak-bottom">
            <div class="title">
                Relatório Escola/Turmas
            </div>
            <div class="student-data">
                <div>
                    Escola:
                    <span class="italic-text">
                        <?php echo $classes_info['school_name']; ?>
                    </span>
                </div>
                <div>
                    Turma:
                    <span class="italic-text">
                    <?php echo $classes_info['series_name']; ?>&ordf; <?php echo $classes_info['name_class_students']; ?>
                    </span>
                </div>
            </div>
            <div class="copyright">
                &copy; Todos os direitos reservados à HA Educacional LTDA.
            </div>
        </div>
    </div>
</body>

</html>