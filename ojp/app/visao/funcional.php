    <?php
    // var_dump($_SESSION); 
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
              background-image: url("../../assets/image/fundo3.jpg");
              background-attachment: fixed;
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
      <div class="nav-wrapper container "><a href= "../controller/controlador_candidato.php?acao=listar_vagas" class="blue-grey-text"><i class="material-icons prefix left">arrow_back</i>Voltar</a>
        <a id="logo-container" href="../../index.php" class="brand-logo center white-text">OJP</a>
        
        <ul class="right hide-on-med-and-down">
      <li><a href="controlador_login.php?acao=logout" class="white-text">Logout</a></li>
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
        <a href="controlador_candidato.php?acao=listar_candidato&id=<?=$_SESSION['id_candidato']?>"><img class="circle" src="../visao/img_candidato/<?= $_SESSION['img'];?>"></a>
        <!--<a href="perfil.php"><span class="white-text name"></span></a>-->
        <a href="controlador_candidato.php?acao=listar_candidato&id=<?=$_SESSION['id_candidato']?>"><span class="white-text email"><?= $_SESSION['login'];?></span></a>
      </div></li>
          <li class="search">
            <div class="search-wrapper card">
              <input id="search" placeholder="Busque sua vaga aqui"><label for="icon_telephone"><i class="material-icons">search</i></label>
              <div class="search-results"></div>
            </div>
          </div></li>
          <li class="bold"><a href="controlador_candidato.php?acao=listar_candidato&id=<?=$_SESSION['id_candidato']?>" class="waves-effect waves-teal">Meu Perfil</a></li>
          <li class="no-padding">
            <!--<ul class="collapsible collapsible-accordion">
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
            </ul>-->
          </li>
          <li class="bold"><a href="perfil.php" class="waves-effect waves-teal">Minhas Vagas</a></li>
          <li class="bold"><a href="controlador_candidato.php?acao=logout" class="waves-effect waves-teal">Sair</a></li>
        </ul>
        </header>
        <?php foreach ($listavagas as $vaga): ?>
        <div class="row">
        	<div class="col s3"></div>
          <div class="col s6 m6 ">
            <div class="card">
          <div class="card-content">
            <span class="card-title"><?= $vaga['nome']?></span>
            <p><?= $vaga['descricao']?></p> 
            <a class="waves-effect waves-light btn">Cadastrar-se</a>

          </div>
          <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header">
        <i class="material-icons">arrow_downward
  </i>
        <a href="#" class="black-text">Ver mais sobre vaga</a>
        <span class="badge"></span></div>

      <div class="collapsible-body white"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
    </li>
  </ul>
        </div>

          </div>
        </div>
        <?php endforeach; ?>
  <?php include '../../assets/rodape.html';?>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../../assets/js/materialize.js"></script>
    <script src="../../assets/js/init.js"></script>
    <script type="text/javascript"></script>
    </body>
  </html>
