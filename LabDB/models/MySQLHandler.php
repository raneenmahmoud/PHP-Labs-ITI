<?php
class MySQLHandler implements DbHandler{

    //members variables
    private $_table;
    private $_db_handler;

    public function __construct($table){
        $this->_table = $table;
        $this->connect();
    }

    //first step (handler on connection)
    public function connect(){
        try{
            $handler = mysqli_connect(_Host_, _User_, _Pass_, _DB_);
            if(!$handler){
                return false;
            }
            $this->_db_handler = $handler;
            return true;
        }catch(Exception $e){
            die('Something went wrong, Please comeback later');
        }
    }

    //second step sql queries
    public function getRecordsPaginated($fields = array(),  $start = 0){
        $table = $this->_table;
        if(empty($fields)){
            $sql = "select * from `$table`";
        }else{
            $sql = "select ";
            foreach($fields as $field){
                $sql .= " `$field`, ";
            }
            $sql .= " from `$table` ";
            $sql = str_replace(", from", "from", $sql);
        }
        $sql .= "limit $start," ._Recorde_per_page_;
        return $this->getResults($sql);
    }

    public function get_record_by_id($id,$primary_key="id"){
        $table = $this->_table;
        $sql = "select * from `$table` where `$primary_key` = $id";
        return $this->getResults($sql);
    }

    public function save($new_values)
    {
        if (is_array($new_values)) {

            $table = $this->_table;
            $id = (int)uniqid() . rand(10000, 99999);
            $sql1 = "insert into `$table` (`id`,";
            $sql2 = " values ($id ,";
            foreach ($new_values as $key => $value) {
                $sql1 .= "`$key` ,";
                if (is_numeric($value))
                    $sql2 .= " $value ,";
                else
                    $sql2 .= " '" . $value . "' ,";
            }
            $sql1 = $sql1 . ") ";
            $sql2 = $sql2 . ") ";
            $sql1 = str_replace(",)", ")", $sql1);
            $sql2 = str_replace(",)", ")", $sql2);
            $sql = $sql1 . $sql2;


            if (mysqli_query($this->_DB_handler, $sql)) {
                $this->disconnect();
                return true;
            } else {
                $this->disconnect();
                return false;
            }
        }
    }
    //third step (handler on results fetch results)
    public function getResults($sql){
        if(_Debug_Mode_ === 1){
            echo '<h4> Sent Query: </h4>' .$sql. "<br>";
        }
        $_result_handler = mysqli_query($this->_db_handler, $sql);//point to results
        $_results = [];

        if(!$_result_handler){
            return false;
        }
        //loop and fetch the record that fetched by handler
        while($record = mysqli_fetch_array($_result_handler, MYSQLI_ASSOC)){
            $_results[] = array_change_key_case($record);//store each row for ecach index
        }
        return $_results;
    }

    public function get_number_of_rows($table)
    {
        $_handler_results = mysqli_query($this->_db_handler, "select * from `$table`");
        $rows_number = mysqli_num_rows($_handler_results);
        return $rows_number;
    }
}