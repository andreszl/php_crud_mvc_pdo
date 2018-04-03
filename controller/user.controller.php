<?php
      require_once 'model/user.model.php';

    class UserController{
        private $model;

        public function __CONSTRUCT(){
          $this->model = new UserModel();
        }

        public function index(){
            $title = "Usuarios";
            $users = $this->model->read();

            require_once 'views/include/header.php';
            require_once 'views/modules/user/index.php';
            require_once 'views/include/footer.php';

        }
        public function create(){
            $data = $_POST["data"];
            $result = $this->model->create($data);
            header("Location: inicio");
        }

        public function update(){
            $data = $_POST["data"];
            $result = $this->model->update($data);
            header("Location: inicio");
        }

        public function delete(){
            $data = $_GET['data'];
            $result = $this->model->delete($data);
            header("Location: inicio");
        }

        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }

?>