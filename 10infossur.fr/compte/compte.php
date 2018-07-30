<?php
session_start ();
  if ( !isset ( $_SESSION['id'] ) )
  {
    header ( 'Location:../connexion/connexion.php' );
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title> 10 infos sur : Accédez à vos comptes. </title>
     <!-- méta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Changez votre photo de profil, déconnectez-vous, changez votre mot de passe">
     <!-- link -->
     <link href="../css/bootstrap.min.css" rel="stylesheet">
     <link href="../css/compte.min.css" rel="stylesheet">
     <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
     <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
     <link rel="icon" type="image/png" href="../img/ampoule.png"/>
      <!-- Hotjar Tracking Code for http://www.10infossur.fr -->
      <script>
        (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:315852,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
        })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
      </script>
      <!-- fin plugin hotjar -->
  </head>
  <body>
<!-- google analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-74894762-5', 'auto');
ga('send', 'pageview');
</script>
<!-- fin google analytics -->

  <?php include'../php/nav.php'; ?>

      <div class="container">
        <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
          <div id="up">
            <h1> Mon compte </h1>
            <img src="" alt="photo de profil" width="200" height="auto" class="img-circle img-fluid">
          </div>
          <div id="down">
            <a href="http://www.10infossur.fr/deconnexion/deconnexion.php"> Déconnectez-vous </a>
            <a href="http://www.10infossur.fr/mdp/mdp.php"> Changer de mot de passe </a>
            <a href="http://www.10infossur.fr/image-profil/image-profil.php"> Changer votre image de profil </a>
          </div>
        </div>
      </div>
  </body>
</html>
