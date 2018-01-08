<!DOCTYPE html>
<html lang="pt-br">
<head>
<<<<<<< HEAD
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106826102-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-106826102-1');
</script>
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
  <!-- servicos -->
  <section class="container">
    <div class="row"></div>
    <div class="row center">
      <h1><i class="large material-icons">perm_phone_msg</i><br>Contato</h1>
    </div><!-- row center -->
    <div class="row">
      <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="nome" type="text" class="validate">
          <label for="nome">Nome</label>
        </div>
        <div class="input-field col s6">
          <input id="email" type="text" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="telefone" type="text" class="validate">
          <label for="telefone">Seu telefone</label>
        </div>
        <div class="input-field col s6">
          <input id="empresa" type="text" class="validate">
          <label for="empresa">Empresa</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="assunto" type="text" class="validate">
          <label for="assunto">Assunto</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="mensagem" class="materialize-textarea"></textarea>
          <label for="mensagem">Mensagem</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12 center">
          <input type="submit" value="Enviar" class="waves-effect btn blue-lpwd">
        </div>
      </div>
    </form>
    </div><!-- row -->
  </section><!-- container -->
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
