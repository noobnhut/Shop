<?php 
 include "../Util/Connect.php";

 class user extends Connect
 {
    private $id;
    private $username;
    private $password;


    function __construct($id='',$username='',$password='')
    {
        $id=$this->id;
        $namename=$this->username;
        $password=$this->password;
    }

    function getId()
    {
        return $this->id;
    }

    function getusername()
    {
        return $this->username;
    }

    function getPassword()
    {
        return $this->password;
    }

  //lay du lieu cua bang admin
    function getData()
   {
           return $this->getTable('user');
   }
          
   //  chi tiet 1 dong -> dang array()
    function detail($id)
    {
              $sql="select * from user where id=?";
              $arr= array($id);
              $data= parent::selectQuery($sql, $arr);
              if (Count($data)>0)
                  return $data[0];
              return 0;
    }
           
   
    function loginUser($username,$password)
   {
            $sql='select id from user';
            return  $this->login($sql,$username,$password);
   }
   
	function deleteUser($id)
	{
		$row = $this->detail($id);
		$sql="delete from user where id= ?";
		$this->updateQuery($sql, array($id));
        //
		header('location:home.php');
	}

    function insertUser($arr=array())
    {
        $arr = [
            'username'=>$this->username,
            'password'=>$this->password
        ];
        
          $sql = 'insert into user(id,username,password) values (null,:$arr["username"],:$arr["password")';
    }
 }

?>