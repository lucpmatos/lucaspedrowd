<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Lucas Pedro Web Designer</title>
  <link rel="icon" href="img/icon_lp_webdesigner.png" type="image/x-icon" />
  <!-- ESTILO -->
  <link rel="stylesheet" type="text/css" href="css/css/mixins.css">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
  <!-- JQUERY -->
  <script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
  <!-- MATERIALIZE -->
  <link rel="stylesheet" href="materialize/css/materialize.min.css">
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
  <!-- MATERIAL ICONS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <?php include_once "includes/nav.php" ?>
  <?php include_once "includes/banner-portfolio.php" ?>
  <!-- portfolio -->
  <section class="container">
    <div class="row"></div>
    <div class="row"></div>
    <div class="row">
      <div class="col l12">
        <div class="card">
          <div class="card-content">
            <h4>Meus principais trabalhos</h4>
          </div>
          <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
              <li class="tab"><a class="active blue-lpwd-text bold" href="#test4">Identidade Visual</a></li>
              <li class="tab"><a class="blue-lpwd-text bold" href="#test5">Web</a></li>
              <li class="tab"><a class="blue-lpwd-text bold" href="#test6">Outros</a></li>
            </ul>
          </div>
          <div class="card-content grey lighten-4">
            <div id="test4">
              <div class="row">
                <div class="col l6">
                  <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="img/portfolio1.0.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">André Lubasi Fotografia<i class="material-icons right">view_module</i></span>
                      <p><a href="#" target="_blank">Visite o site</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">André Lubasi Fotografia<i class="material-icons right">close</i></span>
                      <p>Jobs realizados:</p>
                      <div class="row"></div>
                      <div class="row">
                        <div class="col s4">
                          <img class="responsive-img materialboxed" src="img/portfolio1.0.jpg" alt="">
                        </div>
                        <div class="col s4"><img class="responsive-img materialboxed" src="img/portfolio1.1.jpg" alt=""></div>
                        <div class="col s4"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col l6">
                  <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="img/portfolio2.0.png">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">BeSafe Corretora<i class="material-icons right">view_module</i></span>
                      <p><a href="#" target="_blank">Visite o site</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">BeSafe Corretora<i class="material-icons right">close</i></span>
                      <p>Jobs realizados:</p>
                      <div class="row"></div>
                      <div class="row">
                        <div class="col s4">
                          <img class="responsive-img materialboxed" src="img/portfolio2.0.png" alt="">
                        </div>
                        <div class="col s4"><img class="responsive-img materialboxed" src="img/portfolio2.1.jpg" alt=""></div>
                        <div class="col s4"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="test5">Web</div>
            <div id="test6">Test 3</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include_once "includes/footer.php" ?>
  <!-- SCRIPTS -->
  <!-- inicialização do sidenav -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('.sidenav').sidenav();
    });
  </script>
  <!-- inicialização do carousel -->
  <script type="text/javascript">
    $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      indicators: true
    });
  </script>
  <!-- inicialização das abas -->
  <script type="text/javascript">
  $(document).ready(function(){
    $('ul.tabs').tabs();
  });
  </script>
  <!-- inicialização dos dialogs -->
  <script type="text/javascript">
    $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
  </script>
  <!-- inicialização media -->
  <script type="text/javascript">
  $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
  </script>
</body>
</html>
