<?php 
    class Home extends Controller{

        public function index($param, $param2 = ''){
            $user = $this->model('User');
            $user->name = $param;
            
            $this->View('Home/index', ['name' => $user->name]);
        }

        public function foo(){
            echo "Foo";
        }
    }
?>