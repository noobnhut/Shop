<?php 
   
 include "../Model/user.php";
 include "../function.php";
  class user_controller
  {
        public $model,$action;

        function __construct()
        {
            $this->model = new user();
            $action = getIndex('action','index');

            if(method_exists($this,$action))
            {
                $this->$action();
            }else
            {
                echo "loi";
                exit;
            }
        }

    function show()
    {
        $data= $this->model->getData();
    }

    //function them xoa sua
  }  
?>