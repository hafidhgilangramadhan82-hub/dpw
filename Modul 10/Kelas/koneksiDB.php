<?php
class Koneksi_db
{
    private $db_host = "localhost";
    private $db_user = "user";
    private $db_pass = "password";
    private $db_name = "database";
    private $con = false;
    private $hasil = array();
    public function connect(){
        if(!$this->con){
            $myconn = @mysqli_connect($this->db_host, $this->db_user, $this->db_pass);
            @mysqli_set_charset($myconn, 'utf8');
            
            if($myconn){
                $seldb = @mysqli_select_db($myconn, $this->db_name);
                    if($seldb){
                        $this->con = true;
                        return true;
                    }else{
                        // mysqli_error returns the last error for the given connection
                        array_push($this->hasil, mysqli_error($myconn));
                        return false;
                    }
            }else{
                    // mysqli_connect_error returns the last connect error
                    array_push($this->hasil, mysqli_connect_error());
                return false;
            }
        }else{
            return true;
        }
    }
}
?>