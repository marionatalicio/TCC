<?php 
  if(!isset ($_SESSION['usuario_online']))
{
    header('location:index.php');
    }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>OJP/home</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        	<style type="text/css">
      		.parallax-container {
     	 		height: 600px;
    		}
    		body {
				    background: gray; /* For browsers that do not support gradients */        
        background: -webkit-linear-gradient(90deg, gray, aqua); /* For Safari 5.1 to 6.0 */
        background: -o-linear-gradient(90deg, gray, aqua); /* For Opera 11.1 to 12.0 */
        background: -moz-linear-gradient(90deg, gray, aqua); /* For Firefox 3.6 to 15 */
        background: linear-gradient(90deg, gray, aqua); /* Standard syntax (must be last) */
				}
      	</style>
</head>
<body>
	<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
	</ul>
	<header>
	<div class="navbar-fixed">
  <nav class="blue-grey nav-wrapper" role="navigation">
    <div class="nav-wrapper container ">
      <a href="../visao/login_candidato.php"><i class="material-icons prefix left">arrow_back</i>Voltar</a>
      <a id="logo-container" href="../../index.php" class="brand-logo center white-text">OJP</a>
      <ul class="right hide-on-med-and-down">
		<li><a href="#"></a></li>
        <!--<li><a class="btn-floating btn-large waves-effect waves-light blue-grey tooltipped pulse" data-tooltip="Menu"><i class="material-icons " data-activates="nav-mobile">menu</i></a><a href="#" class="waves-effect waves-light btn-floating"><i class="material-icons left">add</i></a></li>!-->
        <li><!--<a href="#" class="dropdown-button waves-effect waves-light btn-floating" data-activates="dropdown1"><i class="material-icons left">account_circle</i></a>!--></li>
      </ul>
      <!--<div class="nav-wrapper">
      <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>	!-->

        <div class="nav-wrapper">
      <!--<form>
        <div class="input-field inline">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>!-->
          <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a></div>
    </div>
    </div>
  </nav>
</div>
      <ul id="nav-mobile" class="side-nav fixed">
        <li><div class="user-view">
            <div class="background">
        <img src="../../assets/image/esteto.jpg">
      </div>
      <a href="controlador_candidato.php?acao=listar_candidato&id=<?=$_SESSION['id_candidato']?>"><img class="circle" src="../../assets/image/perfil.jpg"></a>
      <!--<a href="perfil.php"><span class="white-text name"></span></a>-->
      <a href="controlador_candidato.php?acao=listar_candidato&id=<?=$_SESSION['id_candidato']?>"><span class="white-text email">mario.natalicio2@gmail.com</span></a>
    </div></li>
        <li class="search">
          <div class="search-wrapper card">
            <input id="search" placeholder="Busque sua vaga aqui"><label for="icon_telephone"><i class="material-icons">search</i></label>
            <div class="search-results"></div>
          </div>
        </div></li>
        <li class="bold"><a href="index.php" class="waves-effect waves-teal">Home</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header active waves-effect waves-teal">Vagas</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="funcional.php">Comercio</a></li>
                  <li class=""><a href="funcional.php">Tecnologias industriais</a></li>
                  <li><a href="funcional.php">Turismo e lazer</a></li>
                  <li><a href="funcional.php">Educação</a></li>
                  <li><a href="funcional.php">Restaurantes</a></li>
                  <li><a href="funcional.php">Hospitais</a></li>
                  <li><a href="funcional.php">Bancos e consultoria</a></li>
                  <li><a href="funcional.php">Transportes e serviços de entrega</a></li>
                  <li><a href="css-transitions.html">Consertos e manutenções.</a></li>
                  <li><a href="typography.html">Marketing e publicidade</a></li>
                  <li><a href="typography.html">Serviços administrativos jurídicos.</a>
                </li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Especificação</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="funcional.php">Vendas</a></li>
                  <li><a href="funcional.php">Mercado</a></li>
                  <li><a href="funcional.php">Lojas de Roupa e de Calçados</a></li>
                  <li><a href="funcional.php">Integrado</a></li>
                  <li><a href="funcional.php">Exterior</a></li>
                  <li><a href="funcional.php">Varegista</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Horário</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="funcional.php">Horário Comercial</a></li>
                  <li><a href="funcional.php">Turno Matutino</a></li>
                  <li><a href="funcional.php">Turno Vespertino</a></li>
                  <li><a href="funcional.php">Turno Noturno</a></li>
                  <li><a href="funcional.php">Turno de Madugada</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="bold"><a href="perfil.php" class="waves-effect waves-teal">Pendentes</a></li>
        <li class="bold"><a href="perfil.php" class="waves-effect waves-teal">Recomendações</a></li>
        <li class="bold"><a href="perfil.php" class="waves-effect waves-teal">Notificações<span class="new badge"></span></a></li>
      </ul>
      </header>
      <div class="row">
      	<div class="col s3"></div>
        <div class="col s6 m6 ">
          <h2 class="header"><?php //echo $_SESSION['estado']; ?></h2>
          <div class="row">
        <div class="col ">
          <div class="card medium">
            <div class="card-image">
              <img src="../../assets/image/equipe.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
          <ul class="collapsible" data-collapsible="accordion">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">filter_drama</i>
      First
      <span class="new badge">4</span></div>
    <div class="collapsible-body white"><p>Lorem ipsum dolor sit amet.</p></div>
  </li>
  <li>
    <div class="collapsible-header">
      <i class="material-icons">place</i>
      Second
      <span class="badge">1</span></div>
    <div class="collapsible-body white"><p>Lorem ipsum dolor sit amet.</p></div>
  </li>
</ul>
        </div>
      </div>
  <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="../../assets/image/ti.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">T.I.<i class="material-icons right">more_vert</i></span>
      <p><a href="#">Conhecer sobre vaga</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Analista<i class="material-icons right">close</i></span>
      <p>Analista de software, formado em ciências da computação ou sistema da informação, com experiência em planejamento de sistemas, se possuir certificados online é mehor para a vaga.</p>
      <a id="botao" class="btn btn-floating btn-large right cyan accent-2 tooltipped" href="funcional.php" data-tooltip="enviar"><i class="material-icons">send</i></a>
      
    </div>
  </div>
    </div>
        </div>
              <div class="row">
      	<div class="col s3"></div>
        <div class="col s6 m6 ">
  <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="../../assets/image/compras.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Comercio<i class="material-icons right">more_vert</i></span>
      <p><a href="#">Conhecer sobre vaga</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Vendedora<i class="material-icons right">close</i></span>
      <p>Vendedora de roupas e acessórios, com experiência de atendimento ao público de no mínimo dois anos e , se possível, carta de recomendação do antigo lugar que trabalhou.</p>
      <a id="botao" class="btn btn-floating btn-large right cyan accent-2 tooltipped" href="funcional.php" data-tooltip="enviar"><i class="material-icons">send</i></a>
    </div>
  </div>
    </div>
        </div>
              <div class="row">
      	<div class="col s3"></div>
        <div class="col s6 m6 ">
  <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="../../assets/image/esteto.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Saúde<i class="material-icons right">more_vert</i></span>
      <p><a href="#">Conhecer sobre vaga</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Cardiologista<i class="material-icons right">close</i></span>
      <p>Médico com especificação em coração, com três anos de experiência em operações cirúricas, se possuir recomendações traga consigo.</p>
    <a id="botao" class="btn btn-floating btn-large right cyan accent-2 tooltipped" href="funcional.php" data-tooltip="enviar"><i class="material-icons">send</i></a>
    </div>
  </div>
  <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="../../assets/image/engenheiro.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Construção<i class="material-icons right">more_vert</i></span>
      <p><a href="#">Conhecer sobre vaga</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Engenharia Civil<i class="material-icons right">close</i></span>
      <p>Contrata-se vaga para engenheiro civil, graduado em engeenharia civil, para trabalhar no planejamento, aprovações e fiscalizações de apartamentos da construtora Lorem sonhos.</p>
            
                  <span class="card-title grey-text text-darken-4">Requisitos</span>
                  <span class="card-title grey-text text-darken-4">Especificações</span>
                  <a id="botao" class="btn btn-floating btn-large right cyan accent-2 tooltipped" href="funcional.php" data-tooltip="enviar"><i class="material-icons">send</i></a>

    </div>
  </div>
    </div>
        </div>
      </div>
<?php include '../../assets/rodape.html';?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../../assets/js/materialize.js"></script>
  <script src="../../assets/js/init.js"></script>
  <script type="text/javascript"></script>
  </body>
</html>
