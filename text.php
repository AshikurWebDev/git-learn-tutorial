<?php 

class hello{
    public function __construct()
    {
        echo "Hello this is ashikur Rahman";

    }

    //This function for backend called
    public function select($table,$where= null){
        $sql = "SELECT * FROM $table";

        if($where != null){
            $sql .= "WHERE $where";
        }
    }
}



?>