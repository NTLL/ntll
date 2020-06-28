<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>BASE</title>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css'/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../main.css">
</head>

<body>
<a href="../config.php">Retour config</a>

  <?php require "../../../connect_bdd.php";?>

  <?php include "../../../crud/base/select/select_content_base.php" ?>
  <div class="corps">
    <div class="contenu">
      <div class="titre">

        <h1>BASE</h1>
      </div>
      <div class="perso">
        <form action="../../../crud/base/update/update_base.php" method="post">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Nom de l'application</span>
            </div>
            <input type="text" required minlength="1" name="name_app" value="<?php echo $name ?>"
              aria-label="First name" class="form-control">
            <!-- <input type="text" required minlength="1" aria-label="Last name" name="main_color"
              value="<?php echo $color ?>" class="form-control"> 
              <select class="form-control" name="nav_dk">
              <optgroup label="<?php echo $dk ?>">
                <option value="navbar-light">Police noire</option>
                <option value="navbar-dark">Police blanche</option>
                </opygroup>
            </select> -->
          </div>
          <input type="hidden" name="id" value='<?php echo $id ?>'>
          <input type="hidden" name="nav_dk" value='<?php echo $dk ?>'>
          <br>
          <center><button type="submit" name="submit" class="btn btn-primary" data-toggle="button">
              Valider la config
            </button></center>
        </form>
      </div>
    </div>
  </div>
  
</body>

</html>