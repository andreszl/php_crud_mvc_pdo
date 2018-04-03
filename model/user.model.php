<?php

  class UserModel{
        private $pdo;

        public function __CONSTRUCT(){
            try{
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }catch(Exception $e) {
                die($e->getMessage());
            }
            }
        public function create($data){
            try {
                $sql ="INSERT INTO users values('',?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1]));
                $msn = "Guardado Correctamente!";
              } catch (Exception $e) {
                die($e->getMessage());
              }
              return $msn;
        }

        public function read(){
            try{
                $sql = "SELECT * FROM users";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            }catch (PDOException $e){
                die($e->getMessage());
            }
            return $result;
        }
            
        public function update($data){
            try {
              $sql = "UPDATE users SET user_name = ?, user_email =? WHERE user_id = ?";
              $query = $this->pdo->prepare($sql);
              $query->execute(array($data[1],$data[2],$data[0]));
              $msn = "Actualizado con exito";
            } catch (PDOException $e) {
              die($e->getMessage());
            }
              return $msn;
        }
        public function delete($code){
            try {
              $sql = "DELETE FROM users WHERE user_id = ?";
              $query = $this->pdo->prepare($sql);
              $query->execute(array($code));
              $msn = "Usuario eliminado correctamente";
            } catch (PDOException $e) {
              die($e->getMessage());
            }
            return $msn;
          }
  
    }
?>