<?php 
    if($data['mensagem']){
        foreach ($data['mensagem'] as $m) {
            echo $m.'<br>';
        }
    }
?>

<form action="" method="POST">
    Título: <input type="text" name="titulo" /><br><br>
    Mensagem: <textarea name="texto" id=""></textarea><br><br>
    <button name="btn-cadastrar">Cadastrar</button>
</form>
<br>
<button><a href="http://localhost:8080/">Voltar</a></button>