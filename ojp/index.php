<?php 
include __DIR__.'/app/controller/controlador_empresa.php';
$areas = buscaArea();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>OJP/home</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        	<style type="text/css">
      		.parallax-container {
     	 		height: 465px;
    		}
      #card{
          width: 50% ;
        }
      	</style>
</head>
<body>
	<ul id="dropdown1" class="dropdown-content">
  <li><a href="app/visao/candidato.php">candidato</a></li>
  <li class="divider"></li>
    <li><a href="app/visao/empresa.php">empregador</a></li>
	</ul>
	<div class="navbar-fixed">
    <nav class="blue-grey nav-wrapper" role="navigation">
      <div class="nav-wrapper  ">
        <a id="logo-container" href="app/visao/index.php" class="brand-logo  white-text"><img src="assets/image/favicon.ico"></a>
        <ul class="right hide-on-med-and-down">
        <li><a href="app/visao/login_candidato.php" class="white-text">Login</a></li>
        <li><a href="#sobrenos" class="white-text">Sobre Nós</a></li>
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-button white-text" href="app/visao/" data-activates="dropdown1">Cadastrar como<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
        <ul class="right hide-on-med-and-down">
  		<li><a href="app/visao/#"></a></li>
          
        </ul>
        
        <a href="app/visao/#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons btn-black">menu</i></a>
        
      </div>
    </nav>
  </div>
  <ul id="nav-mobile" class="side-nav">
    <li><a href="app/visao/candidato.php">Cadastrar-se</a></li>
    <li><a href="app/visao/login.php">Login</a></li>
  </ul>
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center text-accent-2">Plataforma Online de Emprego</h1>
        <div class="row center">
          <h5 class="header col s12 light">Busque novas oportunidades de emprego no campo abaixo</h5>
        </div>
        <div class="row center ">
          <div id="card" class="card col s3 offset-s3">      
            <div class="card-content">
              <div class="input-field ">
                <input id="icon_telephone" type="text" class="validate black-text autocomplete">
                <label for="icon_telephone"><i class="material-icons">search</i></label>
                <a href="app/visao/funcional.php" id="download-button" class="btn-large waves-effect blue-grey  ">Buscar </a>
              </div>
            </div>
          </div>
        </div>
        <br><br>
      </div>
    </div>
    <div class="parallax"><img src="assets/image/Fotojet.jpg" alt="Unsplashed background img 1"></div>
  </div>
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block ">
            <h2 class="center blue-grey-text"><i class="material-icons">looks_one</i></h2>
            <h5 class="center ">Você está precisando de um Emprego</h5>
            <p class="light">Se você está desempregado ou busca mais um emprego o OJP te ajuda a encontrar da maneira mais simples.</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-grey-text"><i class="material-icons">looks_two</i></h2>
            <h5 class="center">Cadastre-se no Site</h5>
            <p class="light">Cadastre-se seu perfil , desta maneira o Sistema irá te recomendar vagas para se inscrever, conforme seu perfil e especificações.</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center blue-grey-text"><i class="material-icons">looks_3</i></h2>
            <h5 class="center">Escolha uma Vaga</h5>
            <p class="light">Você poderá escolher entre as vagas que se adequam a sua busca de emprego. A partir deste ponto você pode entrar em contato com a empresa ou empregador.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h3 class="header col s12 light white-text">Um site perfeito tanto para o empregado quanto para o empregador.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="assets/image/Foto.png" alt="Unsplashed background img 2"></div>
  </div>
  <div class="container"><a name="sobrenos"></a>
    
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send cyan-text"></i></h3>
          <h4>Sobre Nós</h4>
          <p>A OJP é uma plataforma online gratuita com fim de aprimorar o relacionamento entre candidato e empregador através da obtenção de vagas para o candidato e de candidatos para as empresas.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="parallax-container valign-wrapper">
    <div class="parallax"><img src="assets/image/Fot.jpg" alt="Unsplashed background img 3"></div>
  </div>
<?php include 'assets/rodape.html'; ?>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="assets/js/materialize.js"></script>
  <script src="assets/js/init.js"></script>
  <script type="text/javascript">document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.autocomplete');
    var instances = M.Autocomplete.init(elems, options);
  });


  // Or with jQuery

  $(document).ready(function(){
    $('input.autocomplete').autocomplete({
      data: {
        <?php foreach ($areas as $area): ?>
        "<?=$area['area']?>": null,  
        <?php endforeach ?>
        "": null
      },
    });
  })</script>
  <script type="text/javascript">
    $( document ).ready(function)
  </script>
  </body>
</html>