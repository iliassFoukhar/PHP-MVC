<?php 
    class Home extends Controller{
        protected $user;
        
        public function __construct(){
            $this->user = $this->model('User');
        }


        public function index($param, $param2 = ''){
            $user = $this->user;
            $user->name = $param;
            
            $this->View('Home/index', ['name' => $user->name]);
        }

        public function foo(){
            echo "Foo";
        }
    }
?>