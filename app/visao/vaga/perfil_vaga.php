   <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
          	<style type="text/css">
        		.parallax-container {
       	 		height: 600px;
      		}
          body {
              background-image: url("../../assets/image/fundo3.jpg");
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
  	<div class="navbar-fixed">
    <nav class="blue-grey nav-wrapper" role="navigation">
      <div class="nav-wrapper container ">
        <a href= "../controller/controlador_candidato.php?acao=listar_vagas"><i class="material-icons prefix left">arrow_back</i>Voltar</a>
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
          
  <div class="col s11">

  <h1><?= $lista_vaga['nome'] ?></h1>
    </div>
    <div class="col s1">
      <form action="../controller/controlador_vaga.php?acao=editar_vaga&id=<?=$id_vaga?>" method="POST">
        <button class="btn-floating btn-large waves-effect waves-light red tooltipped" data-position="right" data-tooltip="Editar" type="submit"><i class="material-icons" >edit</i></button>
      </form>
      <br>
      <form action="../controller/controlador_vaga.php?acao=excluir_vaga&id=<?=$id_vaga?>" method="POST">
        <button class="btn-floating btn-large waves-effect waves-light red tooltipped" data-position="right" data-tooltip="Excluir" type="submit"><i class="material-icons" >delete</i></button>
      </form>
    </div>
  </div>
    <hr>
    <h3>Sobre a Vaga</h3>
    
    <h5>Descrição: <?= $lista_vaga['descricao'] ?></h5>

  </div>
  <!--<form action="../controller/controlador_candidato.php?acao=editar_candidato&id=<?=$id?>" method="POST">
    <input type="text" name="id">
    <input type="submit" name="">
  </form>!-->
  </div>
    <ul class="collapsible white" data-collapsible="accordion">
    <li>
      <div class="collapsible-header">
        Formação Necessária
        <span class="badge"></span></div>
      <div class="collapsible-body"><p><?=$lista_vaga['desc_formacao'] ?>
  </p>
  </div>
    </li>
    <li>
      <div class="collapsible-header">
        Contato
        <span class="badge"></span></div>
      <div class="collapsible-body"><p><?=$lista_vaga['tel_1'] ?>
  </p> <p><?=$lista_vaga['email'] ?>
  </p></div>
    </li>
  </ul>
  </div>

  <?php include '../../assets/rodape.html'; ?>



    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../../assets/js/materialize.js"></script>
    <script src="../../assets/js/init.js"></script>
    <script type="text/javascript">
    
      document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.tooltipped');
      var instances = M.Tooltip.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function(){
      $('.tooltipped').tooltip();
    });
    </script>
    </body>
  </html>