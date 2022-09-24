<?php

    use app\core\Controller;
    
    class Note extends Controller{

        public function ver($id = '')
        {
            $note = $this->model('Note');
            $dados = $note->findId($id);

            $this->view('note', $dados);
        }

    }
