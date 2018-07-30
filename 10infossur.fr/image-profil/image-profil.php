<?php
session_start ();
  if ( !isset ( $_SESSION['id'] ) )
  {
    header ( 'Location:../connexion/connexion.php' );
  }

  require '../fonction/fonction.php';

  $membre = account_informations();

  if ( isset( $_FILES['avatar'] ) && $_FILES['avatar']['error'] == 0 )
  {
    if ( !in_array( $_FILES['avatar']['type'], ['image/png','image/jpeg','image/jpg'] ) )
    {
      $erreur = 'Format incorrect (PNG et JPG acceptés)';
    }
    elseif ( $_FILES['avatar']['size'] > 202400 )
    {
      $erreur = 'Image trop volumineuse (supérieure à 200ko)';
    }

    if ( !isset( $erreur ) )
    {
      $extension = str_replace( 'image/','',$_FILES['avatar']['type']);
      $name = bin2hex( random_bytes( 8 ) ) . '.' . $extension;

      if ( move_uploaded_file( $_FILES['avatar']['tmp_name'], '../stock-photos/' . $name ) )
      {
        bdd_update( 'UPDATE membre SET avatar = :avatar WHERE id = :id', [
          'avatar' => $name,
          'id' => $_SESSION['id']
          ] );

          if ( $membre['avatar'] != 'profil-defaut.jpg' )
          {
            unlink( '..stock-photos/' . $membre['avatar'] );
          }
        header('Location:image-profil.php');
      }
      else
      {
        $erreur = 'Erreur lors de l\'envoi du fichier';
      }
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title> 10 infos sur : Changer votre image de profil. </title>
     <!-- méta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Changez votre image de profil.">
     <!-- link -->
     <link href="../css/bootstrap.min.css" rel="stylesheet">
     <link href="../css/image-profil.min.css" rel="stylesheet">
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
        <h1 class="text-xs-center"> Changer de photo de profil </h1>
          <div class="row">
            <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
              <div class="div-center">
                <img src="../stock-photos/<?= $membre['avatar'] ?>" alt="avatar" class="img-circle img-fluid" width="200" height="auto">
              </div>
              <?php if ( isset( $erreur ) ) : ?>
                <div class="alert alert-danger"> <?php echo $erreur ?> </div>
              <?php endif; ?>
              <form action="image-profil.php" method="post" enctype="multipart/form-data" class="p-y-3 p-x-2">
                <input type="file" name="avatar" class="form-control-file">
                <input type="submit" class="btn btn-success" value="Changer d'avatar">
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
