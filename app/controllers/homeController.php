<?php

    use app\core\Controller;

    class Home extends Controller{

        public function index($nome ='', $email ='')
        {
            $note = $this->model('Note');
            $dados = $note->getAll();

            $this->view('home', $dados);
        }

    }