<?php

    use app\core\Controller;
    
    class Notes extends Controller{

        
        public function ver($id)
        {
            $note = $this->model('Note');
            $dados = $note->findId($id);

            $this->view('ver', $dados = []);
        }



        public function cadastrar()
        {
            $mensagem = [];

            if(isset($_POST['btn-cadastrar'])){
                $note = $this->model('Note');
                $note->titulo = $_POST['titulo'];
                $note->texto = $_POST['texto'];

                $mensagem[] = $note->save();
            }

            $this->view('cadastrar', $dados = ['mensagem'=> $mensagem]);
        }

    }
