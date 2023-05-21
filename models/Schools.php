<?php
class Schools extends model
{

    public function getList($offset)
    {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM schools ORDER BY school_name ASC LIMIT $offset, 15");
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getListAll()
    {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM schools ORDER BY school_name ASC");
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getInfo($id)
    {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM schools WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }

    public function getCountSchool()
    {
        $r = 0;

        $sql = $this->db->prepare("SELECT COUNT(*) as pd FROM schools");
        $sql->execute();
        $row = $sql->fetch();

        $r = $row['pd'];

        return $r;
    }
    public function getCountStudentsClasses()
    {
        $r = 0;

        $sql = $this->db->prepare("SELECT COUNT(*) as pd FROM students_classes");
        $sql->execute();
        $row = $sql->fetch();

        $r = $row['pd'];

        return $r;
    }
    public function getCountStudents()
    {
        $r = 0;

        $sql = $this->db->prepare("SELECT COUNT(*) as pd FROM students");
        $sql->execute();
        $row = $sql->fetch();

        $r = $row['pd'];

        return $r;
    }

    public function create($school_name, $head_school)
    {

        $sql = $this->db->prepare("INSERT INTO schools SET school_name = :school_name, head_school = :head_school");

        $sql->bindValue(":school_name", $school_name);
        $sql->bindValue("head_school", $head_school);
        $sql->execute();
    }


    public function update($id, $school_name, $head_school)
    {
        $sql = $this->db->prepare("UPDATE schools SET school_name = :school_name, head_school = :head_school WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->bindValue(":school_name", $school_name);
        $sql->bindValue(":head_school", $head_school);
        $sql->execute();
    }

    public function destroy($id)
    {
        $sql = $this->db->prepare("DELETE FROM schools WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

    public function searchSchools($sp)
    {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM schools WHERE school_name LIKE '%$sp%' ORDER BY school_name ASC");
        $sql->bindValue(":school_name", $sp . '%');
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function getListClasses($series_id)
    {
        $array = array();

        $sql = $this->db->prepare("
            SELECT 
                students_classes.*,
                series.series_name AS series_name,
                schools.school_name AS school_name
            FROM 
                students_classes 
            LEFT JOIN
                series ON students_classes.series_id = series.id
            LEFT JOIN
                schools ON students_classes.school_id = schools.id
            WHERE 
                students_classes.series_id = :series_id 
            ORDER BY 
                students_classes.name_class_students ASC");
        $sql->bindValue(":series_id", $series_id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getListStudents($student_class_id)
    {
        $array = array();

        $sql = $this->db->prepare("
            SELECT
             students.*,
             schools.school_name AS school_name,
             students_classes.name_class_students AS students_class
            FROM 
                students 
            LEFT JOIN
                schools ON students.school_id = schools.id
            LEFT JOIN
                students_classes ON students.student_class_id = students_classes.id
            WHERE 
                students.student_class_id = :student_class_id 
            ORDER BY students.student_name ASC");
        $sql->bindValue(":student_class_id", $student_class_id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getReportClasses($student_class, $stage)
    {
        $array = array();

        $sql = $this->db->prepare("
            SELECT 
                students_answers.*,
                students.student_name AS name
            FROM 
                students_answers 
            LEFT JOIN
                students ON students_answers.student_id = students.id
            WHERE 
                students_answers.student_class = :student_class 
            AND 
            students_answers.stage = :stage");
        $sql->bindValue(":student_class", $student_class);
        $sql->bindValue(":stage", $stage);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getInfoClasses($student_class)
    {
        $array = array();

        $sql = $this->db->prepare("
        SELECT 
            students_classes.*,
            schools.school_name as school_name,
            series.series_name as series_name
        FROM 
            students_classes 
        LEFT JOIN
            schools ON students_classes.school_id = schools.id
        LEFT JOIN
            series ON students_classes.series_id = series.id
        WHERE 
            students_classes.id = '$student_class'");
        $sql->bindValue(":id", $student_class);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }

    public function getStudentsList($student_class_id)
    {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM students WHERE student_class_id = :student_class_id ORDER BY student_name");
        $sql->bindValue(":student_class_id", $student_class_id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getInfoStudent($id)
    {
        $array = array();

        $sql = $this->db->prepare("
            SELECT
                students.*,
                schools.school_name AS school_name,
                students_classes.name_class_students AS students_class
            FROM 
                students 
            LEFT JOIN
                schools ON students.school_id = schools.id
            LEFT JOIN
                students_classes ON students.student_class_id = students_classes.id
            WHERE 
                students.id = :id 
            ORDER BY students.student_name ASC");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }
    public function getStudentsAnswers($id, $stage)
    {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM students_answers WHERE student_id = '$id' AND stage = '$stage'");
        $sql->bindValue(":student_id", $id);
        $sql->bindValue(":stage", $stage);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;
    }

    public function getReportAnswersStudent($id, $stage)
    {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM students_answers WHERE student_id = '$id' AND stage = '$stage'");
        $sql->bindValue(':student_id', $id);
        $sql->bindValue(':stage', $stage);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $answers = $sql->fetch();
        }

        $answers = $answers['answers'];
        $array = explode(",", $answers);

        return $array;
    }

    public function getReportAnswersClasses($student_class, $stage)
    {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM students_answers WHERE student_class = '$student_class' AND stage = '$stage'");
        $sql->bindValue(':student_class', $student_class);
        $sql->bindValue(':stage', $stage);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getReportAnswersSchool($id, $stage)
    {
        $array = array();

        $sql = $this->db->prepare("SELECT * FROM students_answers WHERE school_id = '$id' AND stage = '$stage'");
        $sql->bindValue(':school_id', $id);
        $sql->bindValue(':stage', $stage);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }
}
