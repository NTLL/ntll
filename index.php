<!DOCTYPE html>
<html lang="fr">
<!-- 
LLLLLLLLLLL                                                 iiii  
L:::::::::L                                                i::::i 
L:::::::::L                                                 iiii  
LL:::::::LL                                                       
  L:::::L               uuuuuu    uuuuuunnnn  nnnnnnnn    iiiiiii 
  L:::::L               u::::u    u::::un:::nn::::::::nn  i:::::i 
  L:::::L               u::::u    u::::un::::::::::::::nn  i::::i 
  L:::::L               u::::u    u::::unn:::::::::::::::n i::::i 
  L:::::L               u::::u    u::::u  n:::::nnnn:::::n i::::i 
  L:::::L               u::::u    u::::u  n::::n    n::::n i::::i 
  L:::::L               u::::u    u::::u  n::::n    n::::n i::::i 
  L:::::L         LLLLLLu:::::uuuu:::::u  n::::n    n::::n i::::i 
LL:::::::LLLLLLLLL:::::Lu:::::::::::::::uun::::n    n::::ni::::::i
L::::::::::::::::::::::L u:::::::::::::::un::::n    n::::ni::::::i
L::::::::::::::::::::::L  uu::::::::uu:::un::::n    n::::ni::::::i
LLLLLLLLLLLLLLLLLLLLLLLL    uuuuuuuu  uuuunnnnnn    nnnnnniiiiiiii 
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Pour le parallax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <!-- Fin des liens pour parallax -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>HOME</title>
</head>

<?php include "connect_bdd.php" ?>

<body>

<?php include './crud/base/select/select_base.php';
              while ($donnees = $reponse->fetch()){  
                ?>

    <nav class="header navbar navbar-expand-lg <?php echo $donnees['nav_dk']; ?>">
        <a class="navbar-brand"><?php echo $donnees['name_app']; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                    <a class="title-white" href="./view/config/config.php">
                    Config
                    <i class="fas fa-sign-in-alt"></i></a>
                </li>
            </ul>
            <span class="title-white">
                WORKSPACE BY CITRUS WEB
            </span>
        </div>
    </nav>

    <?php 
        }
    ?>

    <!-- Back to top button -->
    <a id="button" style="background-color: black"></a>
    <!-- Fin du back to top button -->

    <?php include './crud/google/select/select_categorie.php';
              while ($donnees = $reponse->fetch()){ 
                if ($donnees['tf_google'] == 'true'){?>

    <div class="parallax-element" data-parallax="scroll" 
    data-image-src="http://127.0.0.1/localhost/img/<?php echo $donnees['google_photo']; ?>"
        alt="" id="">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">
                <h1><img src="http://127.0.0.1/localhost/img/google-logo.png" width="200px;" alt=""></h1>

                <form action="https://www.google.com/search" method="GET">
                    <input class="searchbar" type="text" name="q"
                        placeholder="Effectuez une recherche sur Google ou saisissez une URL">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-1x fa-search"></i></button>
                </form>

                <h2 class="card-title h2 my-4 py-2">

                    <p class="mb-4 pb-2 px-md-5 mx-md-5">
                    </p>
                    <?php include './crud/google/select/select_button.php';
              while ($donnees = $reponse->fetch()){ ?>
                    <a class="btn btn-light peach-gradient" href="<?php echo $donnees['button_link']; ?>">
                    <?php echo $donnees['button_name']; ?></a>
                    <?php } ?>
                        <br><br>
            </div>
        </div>
    </div>

    <?php 
              }
            } ?>

    <?php include './crud/espace_1/select/select_categorie.php';
              while ($donnees = $reponse->fetch()){ 
                  
    if ($donnees['tf_cat'] == 'true'){?>

<div class="parallax-element" id="<?php echo $donnees['cat_name']; ?>" data-parallax="scroll"
        data-image-src="http://127.0.0.1/localhost/img/<?php echo $donnees['photo_cat']; ?>" alt="" id="">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">
                <h2 class="card-title h2 my-4 py-2">Bienvenue sur ton espace "<?php echo $donnees['cat_name']; ?>" !
                    <p class="mb-4 pb-2 px-md-5 mx-md-5">
                    </p>
                    <?php include './crud/espace_1/select/select_button.php';
              while ($donnees = $reponse->fetch()){ ?>
                    <a class="btn btn-light peach-gradient" href="<?php echo $donnees['button_link']; ?>">
                    <?php echo $donnees['button_name']; ?></a>
                    <?php } ?>
            </div>
        </div>
    </div>

              <?php 
              }
            } ?>

<?php include './crud/espace_2/select/select_categorie.php';
              while ($donnees = $reponse->fetch()){ 
                  
    if ($donnees['tf_cat'] == 'true'){?>

<div class="parallax-element" id="<?php echo $donnees['cat_name']; ?>" data-parallax="scroll"
        data-image-src="http://127.0.0.1/localhost/img/<?php echo $donnees['photo_cat']; ?>" alt="" id="">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">
                <h2 class="card-title h2 my-4 py-2">Bienvenue sur ton espace "<?php echo $donnees['cat_name']; ?>" !
                    <p class="mb-4 pb-2 px-md-5 mx-md-5">
                    </p>
                    <?php include './crud/espace_2/select/select_button.php';
              while ($donnees = $reponse->fetch()){ ?>
                    <a class="btn btn-light peach-gradient" href="<?php echo $donnees['button_link']; ?>">
                    <?php echo $donnees['button_name']; ?></a>
                    <?php } ?>
            </div>
        </div>
    </div>

              <?php 
              }
            } ?>

<?php include './crud/espace_3/select/select_categorie.php';
              while ($donnees = $reponse->fetch()){ 
                  
    if ($donnees['tf_cat'] == 'true'){?>

<div class="parallax-element" id="<?php echo $donnees['cat_name']; ?>" data-parallax="scroll"
        data-image-src="http://127.0.0.1/localhost/img/<?php echo $donnees['photo_cat']; ?>" alt="" id="">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">
                <h2 class="card-title h2 my-4 py-2">Bienvenue sur ton espace "<?php echo $donnees['cat_name']; ?>" !
                    <p class="mb-4 pb-2 px-md-5 mx-md-5">
                    </p>
                    <?php include './crud/espace_3/select/select_button.php';
              while ($donnees = $reponse->fetch()){ ?>
                    <a class="btn btn-light peach-gradient" href="<?php echo $donnees['button_link']; ?>">
                    <?php echo $donnees['button_name']; ?></a>
                    <?php } ?>
            </div>
        </div>
    </div>

              <?php 
              }
            } ?>

<?php include './crud/espace_4/select/select_categorie.php';
              while ($donnees = $reponse->fetch()){ 
                  
    if ($donnees['tf_cat'] == 'true'){?>

<div class="parallax-element" id="<?php echo $donnees['cat_name']; ?>" data-parallax="scroll"
        data-image-src="http://127.0.0.1/localhost/img/<?php echo $donnees['photo_cat']; ?>" alt="" id="">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">
                <h2 class="card-title h2 my-4 py-2">Bienvenue sur ton espace "<?php echo $donnees['cat_name']; ?>" !
                    <p class="mb-4 pb-2 px-md-5 mx-md-5">
                    </p>
                    <?php include './crud/espace_4/select/select_button.php';
              while ($donnees = $reponse->fetch()){ ?>
                    <a class="btn btn-light peach-gradient" href="<?php echo $donnees['button_link']; ?>">
                    <?php echo $donnees['button_name']; ?></a>
                    <?php } ?>
            </div>
        </div>
    </div>

              <?php 
              }
            } ?>


<?php include './crud/espace_5/select/select_categorie.php';
              while ($donnees = $reponse->fetch()){ 
                  
    if ($donnees['tf_cat'] == 'true'){?>

<div class="parallax-element" id="<?php echo $donnees['cat_name']; ?>" data-parallax="scroll"
        data-image-src="http://127.0.0.1/localhost/img/<?php echo $donnees['photo_cat']; ?>" alt="" id="">
        <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">
                <h2 class="card-title h2 my-4 py-2">Bienvenue sur ton espace "<?php echo $donnees['cat_name']; ?>" !
                    <p class="mb-4 pb-2 px-md-5 mx-md-5">
                    </p>
                    <?php include './crud/espace_5/select/select_button.php';
              while ($donnees = $reponse->fetch()){ ?>
                    <a class="btn btn-light peach-gradient" href="<?php echo $donnees['button_link']; ?>">
                    <?php echo $donnees['button_name']; ?></a>
                    <?php } ?>
            </div>
        </div>
    </div>

              <?php 
              }
            } ?>

    <!-- LE JS -->
    <script src="./script.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- FIN DU JS -->

</body>

</html>