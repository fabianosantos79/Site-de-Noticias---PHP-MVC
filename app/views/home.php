
<?php foreach ($data as $note): ?>
<h2><a href="notes/ver/<?php echo $note['id']; ?>"><?php echo $note['titulo']; ?></a></h2>
    <p><?php echo $note['texto']; ?></p>
<?php endforeach;?>

