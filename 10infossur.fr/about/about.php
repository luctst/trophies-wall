<?php
session_start ();
?>
<!DOCTYPE html>
<html>
  <head>
    <title> 10 infos sur c'est quoi ? </title>
     <!-- méta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="decription" content="Retrouve tout sur le site web 10 infos sur,
    viens te divertir tu verras c'est cool.">
     <!-- link -->
     <link href="../css/bootstrap.min.css" rel="stylesheet">
     <link href="../css/about.min.css" rel="stylesheet">
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

      <header class="intro-header" style="background-image: url('about.jpg')">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                      <div class="site-heading">
                          <h1> À propos </h1>
                          <hr>
                          <p> <em> Découvrez tout à propos de nous </em> </p>
                      </div>
                  </div>
              </div>
          </div>
      </header>
      <section>
        <div class="container">
          <p> 10 infos sur c'est quoi ?? C'est un site web qui traite de façon humouristique des informations insolites
              sur tout et n'importe quoi, tu peux retrouver par exemple 10 infos sur google, coca, mcdonald's etc..
          </p>
          <br>
          <p> Tu n'est pas du genre lecture ?? On te comprend, mais pas de probléme on a aussi une chaine YouTube
              avec ça plus aucune excuse pour rater les nouveautés.. Clique en bas pour plus d'informations.
          </p>
          <br>
        </div>
      </section>
      <hr>
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
