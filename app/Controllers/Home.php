<?php 
    class Home extends Controller{

        public function index($param, $param2 = ''){
            echo "Home Index OK!!";
            $user = $this->model('User');
            $user->name = $param;
            echo $user->name;
            
        }

        public function foo(){
            echo "Foo";
        }
    }
?>