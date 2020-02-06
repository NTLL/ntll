<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>CONFIG E1</title>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css'/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../main.css">
</head>

<body>
<a href="../config.php">Retour config</a>

  <?php require "../../../connect_bdd.php";?>

  <?php include "../../../crud/google/select/select_content_cat.php" ?>
  <div class="corps">
    <div class="contenu">
      <div class="titre">

        <h1>GOOGLE</h1>
      </div>
      <div class="perso">
        <form action="../../../crud/google/update/update_cat.php" method="post">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Photo</span>
              <img width="20%" src="http://127.0.0.1/localhost/img/<?php echo $photo ?>" alt="">
            </div>
            <input type="text" required minlength="1" aria-label="Last name" name="google_photo"
              value="<?php echo $photo ?>" class="form-control">
            <select class="form-control" name="tf_google">
              <optgroup label="<?php echo $tf ?>">
                <option value="true">Afficher</option>
                <option value="false">Ne pas afficher</option>
                </opygroup>
            </select>
          </div>
          <input type="hidden" name="id_google" value='<?php echo $id ?>'>
          <br>
          <center><button type="submit" name="submit" class="btn btn-primary" data-toggle="button">
              Valider l'espace
            </button></center>
        </form>
      </div>

  <br>

<form action="../../../crud/google/insert/insert_button.php" method="post">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Nom et liens</span>
                    </div>
                    <input type="text" required minlength="1" name="button_name" aria-label="First name"
                      placeholder="button_name" class="form-control">
                    <input type="text" required minlength="1" aria-label="Last name" name="button_link"
                      placeholder="button_link" class="form-control">
                  </div>

                  <input type="hidden" name="button_hidden" value="true">

                  <br>
                  <center><button type="submit" name="submit" class="btn btn-primary" data-toggle="button">
                  Valider la création de bouton
                    </button></center>
                </form>

           <?php include "../../../crud/google/select/select_button.php";
      while ($donnees = $reponse->fetch()){
      ?>
      <div class="article">
      <hr>
      <div>
        <h3><?php echo $donnees['button_name']; ?></h3>
        <h5>
          Supprimer ce bouton : <a href='../../../crud/google/delete/delete_button.php?del=<?php echo $donnees['id_button']; ?>'><i class="fas fa-trash-alt"></i></a>
        </h5>
      </div>
      <hr>
      </div>
      <?php } ?>

      </div>
  </div>

</body>

</html>