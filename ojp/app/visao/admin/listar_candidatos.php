<?php 
if(!isset ($_SESSION['usuario_online']))
{
    header('location:index.php');
    }
?>
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
					<a id="logo-container" href="index.php" class="brand-logo center white-text">OJP</a>
					
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
		<a href="controlador_empresa.php?acao=listar_empresa&id=<?=$_SESSION['id_empregador']?>"><img class="circle" src="../../assets/image/apple-logo.png"></a>
		<a href="controlador_empresa.php?acao=listar_empresa&id=<?=$_SESSION['id_empregador']?>"><span class="white-text name"><?=$_SESSION['nome_empresa'] ?></span></a>
		<a href="controlador_empresa.php?acao=listar_empresa&id=<?=$_SESSION['id_empregador']?>"><span class="white-text email"><?=$_SESSION['email_empresa'] ?></span></a>
	</div></li>
	<li class="search">
          <!--<div class="search-wrapper card">
            <input id="search" placeholder="Busque sua vaga aqui"><i class="material-icons">search</i>
            <div class="search-results"></div>
        </div>-->
    </div>
    <div></li><a class="btn-floating btn-large waves-effect waves-light tooltipped red" data-tooltip="Cadastrar vaga" data-position="right" href="controlador_empresa.php?acao=pagina_cadastrarVaga"><i class="material-icons">add</i></a></div>
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
    		<li class="bold"><a href="perfil.php" class="waves-effect waves-teal">Pendentes</a></li>
    		<li class="bold"><a href="perfil.php" class="waves-effect waves-teal">Recomendações</a></li>
    		<li class="bold"><a href="perfil.php" class="waves-effect waves-teal">Notificações<span class="new badge"></span></a></li>
    	</ul>
    </header>
    <div class="row">
    	<div class="col s3"></div>
    	<div class="col s6 m6 ">
    		<h2 class="header">Candidatos Disponíveis</h2>
    		
    		<!-- REPETIR CANDIDATOS VEZES -->
    		<?php foreach ($listaCandidatos as $candidato): ?>
    		<div class="card">
    			<div class="card horizontal">
    				<div class="card-image">
    					<img src="../../assets/image/perfil.jpg">
    				</div>
    				<div class="card-stacked">
    					<div class="card-content">
    						<p><?= $candidato['nome'] ?></p>
    						<p><?= $candidato['tel_1'] ?></p>
                            <p><?= $candidato['tel_2'] ?></p>
                            <p><?= $candidato['email'] ?></p>
                            <p><?= $candidato['login'] ?></p>
    					</div>
    					<div class="card-action">
    						<a href="perfil.php">Conhecer mais sobre este candidato</a>
    					</div>
    				</div>
    			</div>
    		</div> <!-- fim do card --> 
    		<?php endforeach; ?>

    	</div>
    </div>


</div>
<?php include '../../assets/rodape.html'; ?>



<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../assets/js/materialize.js"></script>
<script src="../assets/js/init.js"></script>
<script type="text/javascript"></script>
</body>
</html>


