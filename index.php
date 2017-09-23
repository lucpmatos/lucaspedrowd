<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Lucas Pedro Web Designer</title>
  <link rel="icon" href="img/icon_lp_webdesigner.png" type="image/x-icon" />
  <!-- ESTILO -->
  <link rel="stylesheet" type="text/less" href="css/main.less">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
  <!-- LESS -->
  <script type="text/javascript" src="less/dist/less.js"></script>
</head>
<body>
  <?php include_once "includes/nav.php" ?>
  <?php include_once "includes/banner.php" ?>

<section class="sobre">
  <div class="container">
    <div class="row">
      <div class="col-100">
        <h2>Sobre</h2>
      </div><!-- col -->
    </div><!-- row -->
    <div class="row">
      <div class="col-50">
        <img src="img/logo_lp_webdesigner.png" alt="Lucas Pedro Web Designer">
      </div><!-- col -->
      <div class="col-50">
        <p>Sou um Web Designer fascinado pelo mundo criativo tanto no Design Gráfico quanto na Web. Acreditando na integração entre esses dois mundos, dedico meus esforços para transformar a navegação na Web em um lugar mais bonito, intuitivo e de fácil entendimento, rompendo todas as barreiras da distância.</p>
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container -->
</section>

  <script language="JavaScript" type="text/javascript">
function navin(){
    classe = document.getElementById('btnabre').className;
    if(classe == 'menuactive'){
       document.getElementById('btnabre').className = 'menuactive';
   }else{
       document.getElementById('btnabre').className = 'menuactive';
   }
}//funcao navin
function navout(){
    classe = document.getElementById('btnabre').className;
    if(classe == 'menuactive'){
       document.getElementById('btnabre').className = 'menu';
   }else{
       document.getElementById('btnabre').className = 'menu';
   }
}//funcao navout
</script>
</body>
</html>
