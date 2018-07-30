<?php
session_start ();
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- code adsence -->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5506801313599691",
    enable_page_level_ads: true
    });
    </script>
    <!-- fin code adsence -->
    <title> 10 infos sur : Informations Insolites, Vidéos, Buzz..</title>
     <!-- méta -->
    <meta charset="utf-8">
    <meta name="google-site-verification" content="A1LG2KBEUUMJR88V_xdDPDmgIO0-gD6CUPzW0XIsqN4"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="10 infos sur c'est une site web d'informations insolites,
    divertissement, humour, insolites c'est ce que nous vous promettons">
     <!-- meta og:facebook -->
     <meta property="og:title" content="10 infos sur : Site web d'informations insolites, vidéos, buzz..">
     <meta property="og:type" content="website">
     <meta property="og:url" content="http://www.10infossur.fr">
     <meta property="og:image" content="http://www.10infossur.fr/img/ampoule.png">
     <!-- link -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/style.min.css" rel="stylesheet">
     <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
     <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
     <link rel="icon" type="image/png" href="img/ampoule.png"/>
     <link rel="canonical" href="http://www.10infossur.fr">
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

<!-- SDK page fb -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8&appId=1696401884008282";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- fin sdk -->

    <?php include'php/nav.php'; ?>

      <header class="intro-header" style="background-image: url('img/back.jpg');">
          <div class="container">
              <div class="row">
                      <div class="site-heading">
                          <h1> Informations insolites, vidéos, buzz sur tout et rien.. Passionant non ?</h1>
                          <h2 class="small"> <strong>10 infos sur</strong> c'est quoi ? c'est un site web ou tu vas trouver des articles
                              sur tout et rien.. Le but est avant tout de vous divertir en vous proposant des billets
                              sur une entreprise, une personnalité publique, un sport etc.. Et de vous écrire <strong>10 informations insolites</strong>
                              sur le sujet en question que personne ou peu de gens connaissent, pas mal comme principe non ?
                          </h2>
                      </div>
                  </div>
              </div>
      </header>


      <div class="container" id="corps">

        <?php include'php/float-right.php'; ?>

        <div class="float-left">

          <?php include'php/info-day.php'; ?>

          <?php include'php/article.php'; ?>

          <?php include'php/best-video.php'; ?>

      <?php include'php/best-seller.php'; ?>


      <?php include'php/sentence-day.php'; ?>


      <?php include'php/top-week.php'; ?>

      <?php include'php/section.php'; ?>

    </div>

    <script src="https://use.fontawesome.com/b2740a2e17.js"></script>

  </body>
</html>
