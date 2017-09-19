<?php $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');?>
<?php include 'webPage/header.php'; ?>

 <div class="container bg-dark  col-4 mt-4">
     <div class="row">
         <form class="col-4 mx-auto" method="post" action="mini-chat-post.php">
             <h2>Mini-Tchat</h2>
             <div class="form-group">
             <div class="input-field col s10">
          <input  id="first_name" name="pseudo" type="text" class="validate">
         <label for="message">Pseudo</label>

         <div class="form-group">
          <textarea id="message" name="message" class="form-control" required></textarea>

         <button class="btn waves-effect waves-light" type="submit" name="action">Envoi
        <i class="material-icons right">message</i>
      </button>
    </form>
      </div>
     </div>
    </div>
   </div>
  </div>


 <div class="container bg-dark  col-4 mt-4">
     <div class="row">
<?php
$reponse= $bdd->query('SELECT * FROM minichat ORDER BY id DESC LIMIT 0,10' );

  while ($dialogue=$reponse->fetch()) {
    echo $dialogue['pseudo']." : ". $dialogue['message'] . '<br/>';

  }
  $reponse->closeCursor();
 ?>
   </div>
</div>
