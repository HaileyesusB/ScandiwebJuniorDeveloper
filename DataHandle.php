
<?php
class DataHandle
{

    protected $server;
    protected $username;
    protected $password;
    protected $db;
    public $connection;


    public function  connect(){

            $this->server= "localhost";
            $this->username= "root";
            $this->password= "";
            $this->db="products";

            $connection = mysqli_connect($this->server, $this->username,$this->password,$this->db);
            //$this->connection->set_charset('utf8mb4');
            if($connection)
            {
                echo "DDDD";
                $result = "Connected";
            }else{
                $result= "Failed";
            }

            return $result;

    }
}
?>
