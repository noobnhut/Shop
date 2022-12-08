<?php 
    include "../Util/Connect.php";
    class admin extends Connect
    {
       private $id;
       private $name;
       private $pass;


       function __construct ($id='',$name='',$pass='')
       {
             $id=$this->id;
             $name=$this->name;
             $pass=$this->pass;
       }

       function getId()
       {
          return $this->id;
       }

       function getName()
       {
          return $this->name;
       }

       function getPass()
       {
          return $this->pass;
       }

          //lay du lieu cua bang admin
       function getData()
       {
        return $this->getTable('admin');
       }
       
       //  chi tiet 1 dong -> dang array()
       function detail($cat_id)
       {
           $sql="select * from admin where id=? ";
           $arr= array($cat_id);
           $data= parent::selectQuery($sql, $arr);
           if (Count($data)>0)
               return $data[0];
           return 0;
       }
        

       function loginAdmin($username,$password)
       {
         $sql='select * from admin where username = ? and password = ?';
         return  $this->login($sql,$username,$password);
       }

    }
?>