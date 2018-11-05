  <?php 
  $id = $_SESSION['id_empregador'];
// var_dump($_SESSION);
// var_dump($empresa_banco);
    ?>
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
          <?php
   if (isset($_SESSION['alerta'])) : ?>
  <?php if (empty($_SESSION['nome'])) : ?> 
    <script>  alert("<?= $_SESSION['alerta']?>");
    </script>
  <?php else :?>      
    <script>  alert("<?= $_SESSION['nome'] . $_SESSION['alerta']?>");
    </script>
  <?php endif; endif;
  $_SESSION['nome'] = null;
  $_SESSION['alerta'] = null;
  ?>
  </head>
  <body>
  	<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
  	</ul>
  	<div class="navbar-fixed">
    <nav class="blue-grey nav-wrapper" role="navigation">
      <div class="nav-wrapper container ">
        <a href= "../visao/admin/listar_candidatos.php"><i class="material-icons prefix left">arrow_back</i>Voltar</a>
        <a id="logo-container" href="index.html" class="brand-logo center white-text">OJP</a>
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

        <a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons btn-black">menu</i></a>
          <div class="nav-wrapper">
        <!--<form>
          <div class="input-field inline">
            <input id="search" type="search" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
          </div>
        </form>!-->
      </div>
      </div>
    </nav>
  </div>
  <div class="row container">
    <div class="card">
      <div class="card-content">
        <div class="row">
          <div class="col s2">
            <img src="../visao/admin/img_empresa/<?= $_SESSION['imagem'];?>" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->

  </div>
      <div class="col s9">
        <h1><?= $_SESSION['nome_empresa'] ?></h1>
      </div>
      <div class="col s1">
      <form action="../controller/controlador_empresa.php?acao=editar_empresa&id=<?=$id?>" method="POST">
        <button class="btn-floating btn-large waves-effect waves-light red tooltipped" data-position="right" data-tooltip="Editar" type="submit"><i class="material-icons" >edit</i></button>
      </form>
      <br>
      <form action="../controller/controlador_empresa.php?acao=excluir_empresa&id=<?=$id?>" method="POST">
        <button class="btn-floating btn-large waves-effect waves-light red tooltipped" data-position="right" data-tooltip="Excluir" type="submit"><i class="material-icons" >delete</i></button>
      </form>
    </div>
  </div>
    <hr>
    <h3>Dados Empresariais</h3>
    <h5>Razão Social: <?= $_SESSION['razao_social'] ?></h5>
    <h5>E-mail: <?= $_SESSION['email_empresa'] ?></h5>
    <h5>Telefone: <?= $_SESSION['telefone'] ?></h5>
    <h5>Data de nascimento: <?=  $_SESSION['data'] ?></h5>
  </div>
  <!--<form action="../controller/controlador_empresa.php?acao=editar_empresa&id=<?=$id?>" method="POST">
    <input type="text" name="id">
    <input type="submit" name="">
  </form>!-->
  </div>
  </div>

  <?php include '../../assets/rodape.html'; ?>



    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../../assets/js/materialize.js"></script>
    <script src="../../assets/js/init.js"></script>
    <script type="text/javascript"></script>
    </body>
  </html>