<?php
session_start ();
if ( !isset ( $_SESSION['id'] ) )
{
  header('Location:connexion/connexion.php');
}

if ( !empty ( $_POST ) )
{
  extract ( $_POST );
  $erreur = [];

  require '../fonction/fonction.php';

  if ( empty ( $oldpassword ) )
  {
    $erreur['oldpassword'] = ' Ancien mot de passe manquant ';
  }
  elseif ( !password_ok () )
  {
    $erreur['oldpassword'] = ' Ancien mot de passe érronné ';
  }

  if ( empty ( $newpassword) )
  {
    $erreur['newpassword'] = ' Nouveau mot de passe manquant ';
  }
  elseif ( strlen ( $newpassword ) <8 )
  {
    $erreur['newpassword'] = ' Mot de passe trop court ';
  }

  if ( empty ( $confpassword ) )
  {
    $erreur['confpassword'] = ' Confirmation du mot de passe manquante ';
  }
  elseif ( $confpassword != $newpassword )
  {
    $erreur['confpassword'] = ' Votre mot de passe ne correspond pas ';
  }

  if ( !$erreur )
  {
    password_save ();
    $validation = ' Votre mot de passe a été envoyé ! ';
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title> 10 infos sur : Changer votre mot de passe. </title>
     <!-- méta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Indiquez votre ancien ainsi que votre nouveau mot de passe.">
     <!-- link -->
     <link href="../css/bootstrap.min.css" rel="stylesheet">
     <link href="../css/mdp.min.css" rel="stylesheet">
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
        <h1 class="text-xs-center"> Mot de passe </h1>
          <div class="row">
            <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
              <?php if ( isset( $erreur['oldpassword'] ) ) : ?>
                <div class="alert alert-danger"> <?php echo $erreur['oldpassword'] ?> </div>
              <?php endif; ?>
              <?php if ( isset( $erreur['newpassword'] ) ) : ?>
                <div class="alert alert-danger"> <?php echo $erreur['newpassword'] ?> </div>
              <?php endif; ?>
              <?php if ( isset( $erreur['confpassword'] ) ) : ?>
                <div class="alert alert-danger"> <?php echo $erreur['confpassword'] ?> </div>
              <?php endif; ?>
              <?php if ( isset( $validation ) ) : ?>
                <div class="alert alert-success"> <?php echo $validation ?> </div>
              <?php endif; ?>
              <form action="mdp.php" method="post" class="p-y-3 p-x-2" novalidate>
                <input type="password" name="oldpassword" class="form-control" placeholder="Entre votre ancien mot de passe">
                <input type="password" name="newpassword" class="form-control" placeholder="Entrez votre nouveaux mot de passe">
                <input type="password" name="confpassword" class="form-control" placeholder="Confirmez votre nouveaux mot de passe">
                <input type="submit" class="btn btn-success m-b-1" value=" Envoyer ">
              </form>
            </div>
          </div>
              <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <ul class="list-inline text-center">
                                <li>
                                    <a href="http://www.twitter.com/10infossur">
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.facebook.com/10infossur">
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UC7zxdnNFV5bVyn8kaNnbJqg">
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-youtube-play fa-stack-2x fa-inverse"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <p class="copyright text-muted">www.10infossur.fr </p>
                        </div>
                    </div>
                </div>
            </footer>

            <script src="https://use.fontawesome.com/b2740a2e17.js"></script>

    </body>
</html>
