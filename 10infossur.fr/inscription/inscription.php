<?php
session_start ();
require_once '../fonction/fonction.php';

if ( !empty( $_POST ) ) // on vérifie que la variable post donc le formulaire n'est pas vide.
{
  extract( $_POST ); // on extrait les informations de la variable.
  $erreur = []; // on crée une variable erreur qui va pouvoir renvoyer une erreur lorsqu'un champ du formulaire ne correspond pas.

  if ( empty( $email ) ) // on crée une condtition qui va renvoyer la variable erreur lorsque le champ email n'est pas correct.
  {
    $erreur['email'] = 'Votre adresse nest pas correcte. '; // variable qui renvoie le message d'erreur.
  }
  elseif ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) // Si le champ est remplie mais que ce n'est pas une adresse mail renvoie ca.
  {
    $erreur ['email'] = 'Votre adresse email nest pas valide. '; // renvoie cette nouvelle variable lorsque ce n'est pas une adresse email.
  }
  elseif ( !mail_free() )
  {
    $erreur['email'] = ' Adresse e-mail déja prise !';
  }

  if ( empty( $password ) )
  {
    $erreur['password'] = ' Mot de passe manquant. '; // variable qui renvoie un message quand il n'y a pas de mdp.
  }
  elseif ( strlen( $password ) <8 ) // fonction qui permet de vérifier le nombre de caractéres si <8 alors renvoie le message.
  {
    $erreur ['password'] = ' Votre mot de passe est trop court. '; // Si le mt de passe est inférieur à 8 cractéres alors renvoie cette variable.
  }

  if ( empty( $passwordconf ) )
  {
    $erreur['passwordconf'] = 'Vous navez pas remit votre mdp. '; // variable qui renvoie un message quand il n'y a pas de mdp.
  }
  elseif ( $passwordconf != $password )
  {
    $erreur['passwordconf'] = ' Vos mot de passe ne correspondent pas. ';
  }

  if ( !$erreur )
  {
      bdd_insert( 'INSERT INTO membre (mail, password) VALUES (:mail, :password)',[
      'mail' => $email,
      'password' => password_hash( $password, PASSWORD_DEFAULT )
      ] );

    unset( $email );
    $validation = 'Inscription réussie !';
    header('Location:../connexion/connexion.php');
    exit();
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title> 10 infos sur : Inscrivez-vous et ne rater aucun exclusivité. </title>
     <!-- méta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Inscrivez au site 10infossur.fr pour ne rater aucune exclusivité.">
     <!-- link -->
     <link href="../css/bootstrap.min.css" rel="stylesheet">
     <link href="../css/inscription.min.css" rel="stylesheet">
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
      <h1 class="text-xs-center"> Inscription </h1>
      <div class="row">
        <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
            <?php if ( isset( $erreur['email'] ) ) : ?>
              <div class="alert alert-danger"> <?php echo $erreur['email'] ?> </div>
            <?php endif; ?>

            <?php if ( isset( $erreur['password'] ) ) : ?>
              <div class="alert alert-danger"> <?php echo $erreur['password'] ?> </div>
            <?php endif; ?>

            <?php if ( isset( $erreur['passwordconf'] ) ) : ?>
              <div class="alert alert-danger"> <?php echo $erreur['passwordconf'] ?> </div>
            <?php endif; ?>

            <?php if ( isset( $validation ) ) : ?>
              <div class="alert alert-success"> <?php echo $validation ?> </div>
            <?php endif; ?>
          <form action="inscription.php" method="post" class="p-y-3 p-x-2" novalidate>
            <input type="email" name="email" class="form-control" placeholder="Adresse e-mail" value="<?php if ( isset ( $email ) ) echo $email; ?>">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe">
            <input type="password" name="passwordconf" class="form-control" placeholder="Confirmez le mot de passe">
            <input type="submit" class="btn btn-success" value="Inscription">
          </form>
        </div>
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
