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
            $sql = "SELECT * FROM notes WHERE id = :id";
            $sql = Model::getConn()->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $return = $sql->fetch();
            }else{
                return [];
            }
        }

    }