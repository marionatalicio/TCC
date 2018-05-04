<?php 
include 'cabecalho.html';
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        	<style type="text/css">
      		.parallax-container {
     	 		height: 600px;
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
  <nav class="blue-grey " role="navigation">
    <div class="nav-wrapper container ">
      <a id="logo-container" href="#" class="brand-logo center">CIA Joinville</a>
      <ul class="right hide-on-med-and-down">
        <li><a class="btn-floating btn-large waves-effect waves-light brown tooltipped pulse" data-tooltip="Menu"><i class="material-icons ">menu</i></a><!--<a href="#" class="waves-effect waves-light btn-floating"><i class="material-icons left">add</i></a></li>!-->
        <li><!--<a href="#" class="dropdown-button waves-effect waves-light btn-floating" data-activates="dropdown1"><i class="material-icons left">account_circle</i></a>!--></li>
      </ul>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Cadastrar-se</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
</div>
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <!--<div class="container">
        <br><br>
        <h1 class="header center teal-text text-accent-2">Site de Busca de Emprego</h1>
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>
        <br><br>

      </div>!-->
    </div>
    <div class="slider">
    <ul class="slides">
      <li>
        <img src="maquiagem.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Milton Cabeleireiros</h3>
          <h5 class="light grey-text text-lighten-3">Salão e Estética</h5>
        </div>
      </li>
      <li>
        <img src="equipe.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="cabeleireiro.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
</div>

  <footer class="page-footer teal blue-grey">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Compania OJP</h5>
          <p class="grey-text text-lighten-4">Nosso Ideal é Incurtar as distâncias entre Empregado e Empregador. Nosso compromisso é com Ambos. A participação é sua. O sucesso é Coletivo.</p>


        </div>
        <div class="fixed-action-btn horizontal">
        <a class="btn-floating btn-large teal accent-2">
          <i class="large material-icons">chat</i>
        </a>
        <ul>
          <li><a class="btn-floating yellow darken-3"><i class="material-icons">person_add</i></a></li>
          <li><a class="btn-floating green"><i class="material-icons">group_add</i></a></li>
          <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
        </ul>
    </div>
        <div class="col l3 s12">
          <h5 class="white-text"><i class="material-icons">chat</i> Redes Socias</h5>
          <ul>
            <li><a class="white-text" href="#!">facebook.com/OJPoficial</a></li>
            <li><a class="white-text" href="#!">twitter.com/OJPoficial</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text"><i class="material-icons">email</i> Contato</h5>
          <ul>
            <li><a class="white-text" href="#!">gmail.com/OJP</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
$(document).ready(function(){
      $('.slider').slider();
    });
  </script>
  </body>
</html>
