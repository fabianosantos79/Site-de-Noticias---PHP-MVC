<?php
    use app\core\Model;

    class Note extends Model{

        public function getAll()
        {
            $sql = "SELECT * FROM notes";
            $sql = Model::getConn()->prepare($sql);
            $sql->execute();

            if($sql->rowCount() > 0){
                $result = $sql->fetchAll();
                return $result;
            }
            else{
                return [];
            }
        }



        public function findId($id){
            $sql = "SELECT * FROM notes WHERE id = ?";
            $stmt = Model::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $return = $stmt->fetch(PDO::FETCH_ASSOC);
            }else{
                return [];
            }
        }

        
    }