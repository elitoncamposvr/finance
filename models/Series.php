<?php
class Series extends model
{
    public function getList($school_id)
    {
        $array = array();

        $sql = $this->db->prepare("
            SELECT 
                series.* ,
                schools.school_name as school_name
            FROM 
                series 
            LEFT JOIN
                schools ON series.school_id = schools.id
            WHERE 
                series.school_id = :school_id 
            ORDER BY 
                series.series_name ");
        $sql->bindValue(':school_id', $school_id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }
}
