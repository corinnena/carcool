<!DOCTYPE html>
<html lang="fr">                
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
<!-------------------------------------------------Template par défaut ------------------------------------>

<nav class="navbar">
    <div class="container-fluid text-bg-success ">  
   <p class="mx-auto" >Se connecter</p>
    </div>
  </nav>



  <h1 class="text-center">Espace membre</h1>
  <h3 class="text-center">Bonjour <span class="fst-italic">lelogin</span> vous êtes maintenant connecté</h3>
   
  <div class=" d-flex justify-content-evenly">
    <div class="p-2"><button type="button" class="btn btn-secondary"><a href="proposerUnTrajet.php" class="text-decoration-none text-white">PROPOSER UN TRAJET</a></button></div>
    <div class="p-2"><button type="button" class="btn btn-secondary"><a href="ModifierVosTrajets.php" class="text-decoration-none text-white">MODIFIER VOS TRAJETS</a></button></div>
    <div class="p-2"><button type="button" class="btn btn-secondary"><a class="text-decoration-none text-white" href="vousInscrireTrajet.php">VOUS INSCRIRE A UN TRAJET</a></button></div>
    <div class="p-2"><button type="button" class="btn btn-secondary"><a class="text-decoration-none text-white" href="vosInformations.php">VOS INFORMATIONS</a></button></div>
  </div>



  <div class="container">
        <?= $content ?>
    <div>


  <nav class="navbar fixed-bottom bg-light">
        <div class="container-fluid text-bg-success p-3">
          <p class="mx-auto" >SAS CarCool<br>Copyright 2020 <a href="#" class="text-decoration-none">Contact</a><a href="#" class="text-decoration-none"> Mentions légales</a></p>
        </div>
      </nav>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>



    <!--div class="container">
        <!-?= $content ?-->
    <!--div-->

    </html>