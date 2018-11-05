  <style type="text/css">
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
  <div class="row container">
      <div class="col s12 ">
        <?php foreach ($listavagas as $vaga): ?>
        <div class="card">
          <div class="card-content">
            <span class="card-title"><?= $vaga['nome']?></span>
            <p><?= $vaga['descricao']?></p>
          </div>
          <div class="card-action">
            <a href="controlador_vaga.php?acao=perfil_vaga&id=<?=$vaga['id_vaga']?>">Ver mais sobre vaga</a>
            <a href="#">Ver candidatos</a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>