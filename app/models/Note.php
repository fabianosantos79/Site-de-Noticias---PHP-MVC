<?php
    use app\core\Model;

    class Note extends Model{

        public $titulo;
        public $texto;

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
            $stmt = Model::getConn()->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $return = $stmt->fetch(PDO::FETCH_ASSOC);
                return $return;
            }else{
                return [];
            }
        }



        public function save(){
            $sql = "INSERT INTO notes (titulo, texto) VALUES (:titulo, :texto) ";
            $stmt = Model::getConn()->prepare($sql);
            $stmt->bindValue(':titulo', $this->titulo);
            $stmt->bindValue(':texto', $this->texto);
            
            if($stmt->execute()){
                return "Cadastrado com sucesso";
            }else{
                return "Erro ao cadastrar";
            }
            
            
        }

        
    }