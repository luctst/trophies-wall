<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- regroupé pour une meilleure visibilité sur mobile -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
            </button>
            <a class="navbar-brand" href="http://www.10infossur.fr"> <strong> 10 infos sur </strong> </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                  <?php if ( isset ( $_SESSION['id'] ) ) : ?>
                <li>
                    <a href="http://www.10infossur.fr/compte/compte.php"> Compte </a>
                </li>
                  <?php else :  ?>
                <li>
                    <a href="http://www.10infossur.fr/connexion/connexion.php"> Connexion </a>
                </li>
                  <?php endif; ?>
                <li>
                    <a href="http://www.10infossur.fr/about/about.php"> À propos </a>
                </li>
                <li>
                    <a href="http://www.10infossur.fr/contact/contact.php"> Contact </a>
                </li>
            </ul>
        </div>
    </div>
  </nav>
