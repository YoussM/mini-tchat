<?php $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');

$req= $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(:pseudo,:message)');

$req->execute(array(
  'pseudo'=>$_POST['pseudo'],
  'message'=>$_POST['message']
));

header('Location: mini-chat.php');



 ?>
