<?php
session_start ();
?>
<!DOCTYPE html>
<html>
  <head>
    <title> 10 infos sur : Contactez-nous pour plus d'informations. </title>
     <!-- méta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contactez-nous et notre équipe vous répondra dans les plus brefs délais.">
     <!-- link -->
     <link href="../css/bootstrap.min.css" rel="stylesheet">
     <link href="../css/contact.min.css" rel="stylesheet">
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
          <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                  <p> Une question ? Contactez-moi j'ai surement la réponse ! </p>
                  <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                  <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                  <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                  <form action="mailto:10infossur@gmail.com" id="contactForm" novalidate>
                      <div class="row control-group">
                          <div class="form-group col-xs-12 floating-label-form-group controls">
                              <label> Nom</label>
                              <input type="text" class="form-control" placeholder="Votre nom*" id="name" required data-validation-required-message="Please enter your name.">
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="row control-group">
                          <div class="form-group col-xs-12 floating-label-form-group controls">
                              <label> Adresse e-mail</label>
                              <input type="email" class="form-control" placeholder="Votre mail*" id="email" required data-validation-required-message="Please enter your email address.">
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="row control-group">
                          <div class="form-group col-xs-12 floating-label-form-group controls">
                              <label> Numéro de téléphone </label>
                              <input type="tel" class="form-control" placeholder="votre numéro" id="phone">
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="row control-group">
                          <div class="form-group col-xs-12 floating-label-form-group controls">
                              <label> Message</label>
                              <textarea rows="5" class="form-control" placeholder="Votre message*" id="message" required data-validation-required-message="Please enter a message."></textarea>
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <br>
                      <div id="success"></div>
                      <div class="row">
                          <div class="form-group col-xs-12">
                              <button type="submit" class="btn btn-default"> Envoyez </button>
                          </div>
                      </div>
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
