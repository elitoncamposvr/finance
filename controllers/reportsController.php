<?php
require_once __DIR__ . '/../vendor/autoload.php';

class reportsController extends controller
{
    public function __construct()
    {

        $u = new Users();
        if ($u->isLogged() == false) {
            header("Location: " . BASE_URL . "login");
            exit;
        }
    }

    public function index()
    {
        $data = array();
        $u = new Users();
        $schools = new Schools();
        $u->setLoggedUser();

        if ($u->hasPermission('reports')) {

            $this->loadTemplate('reports', $data);
        } else {
            header("Location: " . BASE_URL . "home/unauthorized");
        }
    }

    public function classes_reports()
    {
        $data = array();
        $u = new Users();
        $schools = new Schools();
        $u->setLoggedUser();

        if ($u->hasPermission('reports')) {
            $data['school_list'] = $schools->getListAll();

            $this->loadTemplate('reports_classes', $data);
        } else {
            header("Location: " . BASE_URL . "home/unauthorized");
        }
    }

    public function classes_selectschool()
    {
        $data = array();
        $u = new Users();
        $schools = new Schools();
        $u->setLoggedUser();

        if ($u->hasPermission('reports')) {
            $data['school_list'] = $schools->getListAll();

            $this->loadTemplate('reports_classes_select_school', $data);
        } else {
            header("Location: " . BASE_URL . "home/unauthorized");
        }
    }

    public function classes_selectseries($school_id)
    {
        $data = array();
        $u = new Users();
        $schools = new Schools();
        $series = new Series();
        $u->setLoggedUser();

        if ($u->hasPermission('reports')) {
            $data['series_list'] = $series->getList($school_id);

            $this->loadTemplate('reports_classes_select_series', $data);
        } else {
            header("Location: " . BASE_URL . "home/unauthorized");
        }
    }

    public function classes_selectclasses($series_id)
    {
        $data = array();
        $u = new Users();
        $schools = new Schools();
        $u->setLoggedUser();

        if ($u->hasPermission('reports')) {
            $data['classes_list'] = $schools->getListClasses($series_id);

            $this->loadTemplate('reports_classes_select', $data);
        } else {
            header("Location: " . BASE_URL . "home/unauthorized");
        }
    }

    public function classes_pdf($student_class)
    {
        $data = array();
        $u = new Users();
        $schools = new Schools();
        $u->setLoggedUser();

        if ($u->hasPermission('reports')) {
            $data['classes_list_one'] = $schools->getReportClasses($student_class, 1);
            $data['classes_list_two'] = $schools->getReportClasses($student_class, 2);
            $data['classes_list_three'] = $schools->getReportClasses($student_class, 3);
            $data['classes_list_four'] = $schools->getReportClasses($student_class, 4);
            $data['classes_list_five'] = $schools->getReportClasses($student_class, 5);
            $data['classes_info'] = $schools->getInfoClasses($student_class);

            ob_start();
            $this->loadView('pdf_reports_classes_cloak', $data);
            $cloak = ob_get_contents();
            ob_end_clean();

            ob_start();
            $this->loadView('pdf_reports_classes_stage_1', $data);
            $stage1 = ob_get_contents();
            ob_end_clean();

            ob_start();
            $this->loadView('pdf_reports_classes_stage_2', $data);
            $stage2 = ob_get_contents();
            ob_end_clean();

            ob_start();
            $this->loadView('pdf_reports_classes_stage_3', $data);
            $stage3 = ob_get_contents();
            ob_end_clean();

            ob_start();
            $this->loadView('pdf_reports_classes_stage_4', $data);
            $stage4 = ob_get_contents();
            ob_end_clean();

            ob_start();
            $this->loadView('pdf_reports_classes_stage_5', $data);
            $stage5 = ob_get_contents();
            ob_end_clean();

            $mpdf = new \Mpdf\Mpdf([
                'mode' => 'utf-8',
                'autoMarginPadding' => 1,
                'orientation' => 'L'
            ]);

            $mpdf->WriteHTML($cloak);

            $mpdf->AddPage();
            $mpdf->WriteHTML($stage1);

            $mpdf->AddPage();
            $mpdf->WriteHTML($stage2);

            $mpdf->AddPage();
            $mpdf->WriteHTML($stage3);

            $mpdf->AddPage();
            $mpdf->WriteHTML($stage4);

            $mpdf->AddPage();
            $mpdf->WriteHTML($stage5);

            $mpdf->Output();

            // $this->loadTemplate('report_', $data);
        } else {
            header("Location: " . BASE_URL . "home/unauthorized");
        }
    }

    public function students_selectschool()
    {
        $data = array();
        $u = new Users();
        $schools = new Schools();
        $u->setLoggedUser();

        if ($u->hasPermission('reports')) {
            $data['school_list'] = $schools->getListAll();

            $this->loadTemplate('reports_students_select_school', $data);
        } else {
            header("Location: " . BASE_URL . "home/unauthorized");
        }
    }

    public function students_selectseries($school_id)
    {
        $data = array();
        $u = new Users();
        $schools = new Schools();
        $series = new Series();
        $u->setLoggedUser();

        if ($u->hasPermission('reports')) {
            $data['series_list'] = $series->getList($school_id);

            $this->loadTemplate('reports_students_select_series', $data);
        } else {
            header("Location: " . BASE_URL . "home/unauthorized");
        }
    }

    public function students_selectclasses($series_id)
    {
        $data = array();
        $u = new Users();
        $schools = new Schools();
        $u->setLoggedUser();

        if ($u->hasPermission('reports')) {
            $data['classes_list'] = $schools->getListClasses($series_id);

            $this->loadTemplate('reports_students_select_classes', $data);
        } else {
            header("Location: " . BASE_URL . "home/unauthorized");
        }
    }

    public function students_selectstudents($student_class_id)
    {
        $data = array();
        $u = new Users();
        $schools = new Schools();
        $u->setLoggedUser();

        if ($u->hasPermission('reports')) {
            $data['students_list'] = $schools->getStudentsList($student_class_id);

            $this->loadTemplate('reports_students_select_student', $data);
        } else {
            header("Location: " . BASE_URL . "home/unauthorized");
        }
    }

    public function students_pdf($id)
    {
        $data = array();
        $u = new Users();
        $schools = new Schools();
        $u->setLoggedUser();

        if ($u->hasPermission('reports')) {
            $data['student_info'] = $schools->getInfoStudent($id);
            $data['students_answers_one'] = $schools->getStudentsAnswers($id, 1);
            $data['students_answers_two'] = $schools->getStudentsAnswers($id, 2);
            $data['students_answers_three'] = $schools->getStudentsAnswers($id, 3);
            $data['students_answers_four'] = $schools->getStudentsAnswers($id, 4);
            $data['students_answers_five'] = $schools->getStudentsAnswers($id, 5);
            $data['answers_one'] = $schools->getReportAnswersStudent($id, 1);
            $data['answers_two'] = $schools->getReportAnswersStudent($id, 2);
            $data['answers_three'] = $schools->getReportAnswersStudent($id, 3);
            $data['answers_four'] = $schools->getReportAnswersStudent($id, 4);
            $data['answers_five'] = $schools->getReportAnswersStudent($id, 5);

            ob_start();
            $this->loadView('pdf_reports_students_cloak', $data);
            $cloak = ob_get_contents();
            ob_end_clean();

            ob_start();
            $this->loadView('pdf_reports_students_stage_1', $data);
            $stage1 = ob_get_contents();
            ob_end_clean();

            ob_start();
            $this->loadView('pdf_reports_students_stage_2', $data);
            $stage2 = ob_get_contents();
            ob_end_clean();

            ob_start();
            $this->loadView('pdf_reports_students_stage_3', $data);
            $stage3 = ob_get_contents();
            ob_end_clean();

            ob_start();
            $this->loadView('pdf_reports_students_stage_4', $data);
            $stage4 = ob_get_contents();
            ob_end_clean();

            ob_start();
            $this->loadView('pdf_reports_students_stage_5', $data);
            $stage5 = ob_get_contents();
            ob_end_clean();

            
            ob_start();
            $this->loadView('pdf_reports_students_graph', $data);
            $graph = ob_get_contents();
            ob_end_clean();
            
            ob_start();
            $this->loadView('pdf_reports_students_obs', $data);
            $obs = ob_get_contents();
            ob_end_clean();
            
            $mpdf = new \Mpdf\Mpdf([
                'mode' => 'utf-8',
                'autoMarginPadding' => 1,
                'orientation' => 'L'
            ]);

            $mpdf->WriteHTML($cloak);

            $mpdf->AddPage();
            $mpdf->WriteHTML($stage1);

            $mpdf->AddPage();
            $mpdf->WriteHTML($stage2);

            $mpdf->AddPage();
            $mpdf->WriteHTML($stage3);

            $mpdf->AddPage();
            $mpdf->WriteHTML($stage4);

            $mpdf->AddPage();
            $mpdf->WriteHTML($stage5);

            $mpdf->AddPage();
            $mpdf->WriteHTML($graph);

            $mpdf->AddPage();
            $mpdf->WriteHTML($obs);

            $mpdf->Output();

            // $this->loadView('pdf_reports_students_graph', $data);
        } else {
            header("Location: " . BASE_URL . "home/unauthorized");
        }
    }

    public function general_reports()
    {
        $data = array();
        $u = new Users();
        $schools = new Schools();
        $u->setLoggedUser();

        if ($u->hasPermission('reports')) {

            $this->loadTemplate('general_reports', $data);
        } else {
            header("Location: " . BASE_URL . "home/unauthorized");
        }
    }

    public function general_selectschool()
    {
        $data = array();
        $u = new Users();
        $schools = new Schools();
        $u->setLoggedUser();

        if ($u->hasPermission('reports')) {
            $data['school_list'] = $schools->getListAll();

            $this->loadTemplate('reports_general_select_school', $data);
        } else {
            header("Location: " . BASE_URL . "home/unauthorized");
        }
    }

    public function general_selectseries($school_id)
    {
        $data = array();
        $u = new Users();
        $schools = new Schools();
        $series = new Series();
        $u->setLoggedUser();

        if ($u->hasPermission('reports')) {
            $data['series_list'] = $series->getList($school_id);

            $this->loadTemplate('reports_general_select_series', $data);
        } else {
            header("Location: " . BASE_URL . "home/unauthorized");
        }
    }

    public function general_selectclasses($series_id)
    {
        $data = array();
        $u = new Users();
        $schools = new Schools();
        $u->setLoggedUser();

        if ($u->hasPermission('reports')) {
            $data['classes_list'] = $schools->getListClasses($series_id);

            $this->loadTemplate('reports_general_select_classes', $data);
        } else {
            header("Location: " . BASE_URL . "home/unauthorized");
        }
    }

    public function generalclasses_pdf($student_class)
    {
        $data = array();
        $u = new Users();
        $schools = new Schools();
        $u->setLoggedUser();

        if ($u->hasPermission('reports')) {
            $data['classes_info'] = $schools->getInfoClasses($student_class);
            $data['answers_one'] = $schools->getReportAnswersClasses($student_class, 1);
            $data['answers_two'] = $schools->getReportAnswersClasses($student_class, 2);
            $data['answers_three'] = $schools->getReportAnswersClasses($student_class, 3);
            $data['answers_four'] = $schools->getReportAnswersClasses($student_class, 4);
            $data['answers_five'] = $schools->getReportAnswersClasses($student_class, 5);

            ob_start();
            $this->loadView('pdf_reports_general_classes_cloak', $data);
            $html = ob_get_contents();
            ob_end_clean();

            ob_start();
            $this->loadView('pdf_reports_general_classes_1', $data);
            $graph_one = ob_get_contents();
            ob_end_clean();

            ob_start();
            $this->loadView('pdf_reports_general_classes_2', $data);
            $graph_two = ob_get_contents();
            ob_end_clean();

            ob_start();
            $this->loadView('pdf_reports_general_classes_3', $data);
            $graph_three = ob_get_contents();
            ob_end_clean();

            ob_start();
            $this->loadView('pdf_reports_general_classes_4', $data);
            $graph_four = ob_get_contents();
            ob_end_clean();

            // ob_start();
            // $this->loadView('pdf_reports_general_classes_5', $data);
            // $graph_five = ob_get_contents();
            // ob_end_clean();

            $mpdf = new \Mpdf\Mpdf([
                'mode' => 'utf-8',
                'autoMarginPadding' => 1,
                'orientation' => 'L'
            ]);
            $mpdf->WriteHTML($html);

            $mpdf->AddPage();
            $mpdf->WriteHTML($graph_one);

            $mpdf->AddPage();
            $mpdf->WriteHTML($graph_two);

            $mpdf->AddPage();
            $mpdf->WriteHTML($graph_three);

            $mpdf->AddPage();
            $mpdf->WriteHTML($graph_four);

            $mpdf->Output();

            // $this->loadTemplate('pdf_reports_school', $data);
        } else {
            header("Location: " . BASE_URL . "home/unauthorized");
        }
    }

    public function school_selectschool()
    {
        $data = array();
        $u = new Users();
        $schools = new Schools();
        $u->setLoggedUser();

        if ($u->hasPermission('reports')) {
            $data['school_list'] = $schools->getListAll();

            $this->loadTemplate('reports_school_select_school', $data);
        } else {
            header("Location: " . BASE_URL . "home/unauthorized");
        }
    }

    public function school_pdf($id)
    {
        $data = array();
        $u = new Users();
        $schools = new Schools();
        $u->setLoggedUser();

        if ($u->hasPermission('reports')) {
            $data['school_info'] = $schools->getInfo($id);

            $data['answers_one'] = $schools->getReportAnswersSchool($id, 1);
            $data['answers_two'] = $schools->getReportAnswersSchool($id, 2);
            $data['answers_three'] = $schools->getReportAnswersSchool($id, 3);
            $data['answers_four'] = $schools->getReportAnswersSchool($id, 4);
            $data['answers_five'] = $schools->getReportAnswersSchool($id, 5);

            ob_start();
            $this->loadView('pdf_reports_school_cloak', $data);
            $html = ob_get_contents();
            ob_end_clean();

            ob_start();
            $this->loadView('pdf_reports_school_1', $data);
            $graph_one = ob_get_contents();
            ob_end_clean();

            ob_start();
            $this->loadView('pdf_reports_school_2', $data);
            $graph_two = ob_get_contents();
            ob_end_clean();

            ob_start();
            $this->loadView('pdf_reports_school_3', $data);
            $graph_three = ob_get_contents();
            ob_end_clean();

            ob_start();
            $this->loadView('pdf_reports_school_4', $data);
            $graph_four = ob_get_contents();
            ob_end_clean();

            $mpdf = new \Mpdf\Mpdf([
                'mode' => 'utf-8',
                'autoMarginPadding' => 1,
                'orientation' => 'L'
            ]);
            $mpdf->WriteHTML($html);

            $mpdf->AddPage();
            $mpdf->WriteHTML($graph_one);

            $mpdf->AddPage();
            $mpdf->WriteHTML($graph_two);

            $mpdf->AddPage();
            $mpdf->WriteHTML($graph_three);

            $mpdf->AddPage();
            $mpdf->WriteHTML($graph_four);

            $mpdf->Output();

            // $this->loadTemplate('pdf_reports_school', $data);
        } else {
            header("Location: " . BASE_URL . "home/unauthorized");
        }
    }
}
