Thứ cần :
Controller -> nơi thực thi code : get đối tượng : chạy code
Model -> class của object 
Util -> default connect của dpo MVC3:
Util_file
<?php 

class Connect 
{
    private $servername ;
    private $username ;
    private $password ;
    private $dbname;

    public function __construct()
    {
      $this->servername="localhost";
      $this->username="root";
      $this->password="";
      $this->dbname="users";
    }
    public function connected()
    {
        try {
          $conn = new PDO('mysql:host=' .$this->servername .';dbname=' . $this->dbname, $this->username, $this->password);
  // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        return $conn;
        
       } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
         }
    }
}
?>