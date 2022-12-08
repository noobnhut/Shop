<?php 

class Connect 
{
    private $servername ;
    private $username ;
    private $password ;
    private $dbname;
    
    private $conn=null;

    public function __construct()
    {
      $this->servername="localhost";
      $this->username="root";
      $this->password="";
      $this->dbname="hoc";
    }
    public function connected()
    {
        try {
          $this->conn = new PDO('mysql:host=' .$this->servername .';dbname=' . $this->dbname, $this->username, $this->password);
  // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->conn;
        
       } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
         }
    }

    function open()
    {
      $db = new Connect();
      $this->conn=$db->connected();
    }
    
    function getTable($tableName)
     {
       $this->open();
       $stm = $this->conn->prepare("select * from $tableName");
		   $stm->execute();
		   return $stm->fetchAll();
     }

    function selectQuery($sql, $arr=array())
	   {
      $this->open();
		  $stm = $this->conn->prepare($sql);
		  $stm->execute($arr);
		  return $stm->fetchAll(PDO::FETCH_ASSOC);
	   }

	  function updateQuery($sql, $arr=array())
	   {
      $this->open();
		  $stm = $this->conn->prepare($sql);
		  $stm->execute($arr);
		  return $stm->rowCount();
	  }


    function login($sql,$username,$password)
    {
      $this->open();
      $stm = $this->conn->prepare($sql);
      $stm->execute(array($username,$password));
      $row = $stm->rowCount();
      $data = $stm->fetch(PDO::FETCH_ASSOC);
      if($row>0)
      {
        $_SESSION['id']=$data['id'];
        return 1;
      }
      else
      {
        return false;
      }

    }



}


?>