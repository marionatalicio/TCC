<?php 

  ?>
      <style type="text/css">
        body {
            background-image: url("../../../assets/image/logo.png");
        }
      </style>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
          <div class="navbar-fixed">
  <nav class="blue-grey nav-wrapper" role="navigation">
    <div class="nav-wrapper container ">
      <a href="index.html"><i class="material-icons prefix left">arrow_back</i>Voltar</a>
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
    </div>  !-->

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
        <div class="col s12">
          <div class="card">
            <form class="col s12">
            	<h1><i class="material-icons prefix large">assignment</i>Vaga</h1>
              <h3>Preencha o formulário abaixo para  cadastrar a vaga</h3>
              <div class="input-field inline col s6">
                <input  id="first_name" type="text" class="validate">
                <label for="first_name">Nome da vaga</label>
              </div>
              <div class="input-field col s6">
                <select class="white-text"
           name="area">
                  <option value="" class="white-text"
           >Categoria da vaga</option>

                  <option value="a">Agropecuária</option> 
                  <option value="m">Mecânica</option> 
                  <option value="t">T.I</option> 
                  <option value="s">Serviços</option> 
                  <option value="i">Industrial</option>
                  <option value="i">Comercial</option>
                </select>
              </div>
              <div class="input-field col s6">
                <input  id="first_name" type="text" class="validate">
                <label for="first_name">Quantidade da vaga</label>
              </div>
              <div class="input-field col s3">
                <input type="text" class="datepicker">
                <label for="last_name">Data Final para inscrição</label>
              </div>
              <div class="input-field col s3">
                <input type="text" class="datepicker">
                <label for="first_name">Data Final para resposta</label>
              </div>
                              <div class=" col s12 center">
               <p class="">Horários disponíveis:</p>
               <p class="center">

          <input type="checkbox" id="test5"/>
          <label for="test5">Diurno</label>
          
          <input type="checkbox" id="test6" />
          <label for="test6">Matutino</label>
          
          <input type="checkbox" id="test7" />
          <label for="test7">Vespertino</label>
          
          <input type="checkbox" id="test8" />
          <label for="test8">Noturno</label>

          <input type="checkbox" id="test8" />
          <label for="test8">madrugada</label>

            </p>

              </div>
          <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Descrição da vaga</label>
        </div>
        <div class="input-field col s6">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Formação necessária</label>
        </div>
        <div class="input-field col s6">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Experiência necessária</label>
        </div>
        <div class="input-field col s6">
                <input  id="first_name" type="text" class="validate">
                <label for="first_name">Cidade</label>
              </div>
        <div class="input-field col s6">
          <select>
            <option value="" disabled selected>Selecione o Estado da vaga</option>

            <option value="ac">Acre</option> 
            <option value="al">Alagoas</option> 
            <option value="am">Amazonas</option> 
            <option value="ap">Amapá</option> 
            <option value="ba">Bahia</option> 
            <option value="ce">Ceará</option> 
            <option value="df">Distrito Federal</option> 
            <option value="es">Espírito Santo</option> 
            <option value="go">Goiás</option> 
            <option value="ma">Maranhão</option> 
            <option value="mt">Mato Grosso</option> 
            <option value="ms">Mato Grosso do Sul</option> 
            <option value="mg">Minas Gerais</option> 
            <option value="pa">Pará</option> 
            <option value="pb">Paraíba</option> 
            <option value="pr">Paraná</option> 
            <option value="pe">Pernambuco</option> 
            <option value="pi">Piauí</option> 
            <option value="rj">Rio de Janeiro</option> 
            <option value="rn">Rio Grande do Norte</option> 
            <option value="ro">Rondônia</option> 
            <option value="rs">Rio Grande do Sul</option> 
            <option value="rr">Roraima</option> 
            <option value="sc">Santa Catarina</option> 
            <option value="se">Sergipe</option> 
            <option value="sp">São Paulo</option> 
            <option value="to">Tocantins</option>
          </select>
          <label>Estado</label>
        </div>
        <div class="input-field col s12">
          <h3>Contato para a vaga</h3>
        </div>
              <div class="input-field col s3">
                <input  id="first_name" type="text" class="validate">
                <label for="first_name">telefone(1)</label>
              </div>
    	        <div class="input-field col s3">
                <input  id="first_name" type="text" class="validate">
                <label for="first_name">telefone(2)</label>
              </div>
               	<div class="input-field col s3">
                <input  id="first_name" type="email" class="validate">
                <label for="first_name">email</label>
              </div>
              <div class="input-field col s3"> </div>

 

            </form>
            <div class="card-content white-text">
              <span class="card-title">Card Title</span>
              
            </div>
            <div class="card-action">
                    <a id="botao" class="btn btn-floating btn-large cyan accent-2 pulse halfway-fab tooltipped" href="vaga.html" data-tooltip="enviar"><i class="material-icons">send</i></a>
            </div>
          </div>
        </div>
      </div>
      <script>$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
 $(document).ready(function() {
    $('select').material_select();
  });</script>
    </body>
  </html>