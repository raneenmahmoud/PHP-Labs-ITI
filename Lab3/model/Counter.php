<?php
class Counter{
    private $_count;
    public function __construct(){
        $this->_count = $this->getCount();
    }
    public function getCount(){
        if(file_exists(_counter_file_)){
            return intval(file_get_contents(_counter_file_));
        } else {
            return 0;
        }
        }
    public function increament(){
        if(isset($_SESSION[_session_key_counter_])){
            return false;
        }
        $this->_count++;
        $_SESSION[_session_key_counter_] = true;
        return $this->_count;
    }
    
    public function updateCounter(){
        $fp = fopen(_counter_file_, "w+");
        fwrite($fp, $this->_count);
        fclose($fp);
    }
    public function increamentAndUupdate(){
        if($this->increament() != false){
            $this->updateCounter();
        }
    }
}

