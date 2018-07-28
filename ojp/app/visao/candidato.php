      <style type="text/css">
      	body {
				    background-image: url("../../assets/image/cadastro.jpg");
              
				}
      </style>
    </head>
          
    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../../assets/js/materialize.min.js"></script>
          <div class="navbar-fixed">
  <nav class="blue-grey nav-wrapper" role="navigation">
    <div class="nav-wrapper container ">
    	<a href="../../index.php"><i class="material-icons prefix left">arrow_back</i>Voltar</a>
      <a id="logo-container" href="index.php" class="brand-logo center white-text">OJP</a>
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
        <div class="col s12">
          <div class="card N/A transparent">
            <form class="col s12" method="POST" action="../controller/controlador_candidato.php?acao=cadastrar_candidato">
            	<h1 class="white-text bold"><i class="material-icons prefix large white-text">account_circle</i>Candidato</h1>
            <h3 class="white-text">Preencha o formulário abaixo para se cadastrar</h3>
              <div class="input-field inline col s6">
                <input  id="first_name" name="nome"  type="text" class="validate white-text">
                <label for="first_name" class="white-text">Nome</label>
              </div>
              <div class="input-field col s6">
                <input name="data" type="text" class="datepicker white-text">
                <label for="last_name" class="white-text">Data de Nascimento</label>
              </div>
              <div class="input-field col s6">
                <input  id="first_name" name="RG" type="text" class="validate white-text">
                <label for="first_name" class="white-text">RG</label>
              </div>
              <div class="input-field col s6">
                <input  id="first_name" name="CPF" type="text" class="validate white-text">
                <label for="first_name" class="white-text">CPF</label>
              </div>
              <div class="input-field col s6">
                <input  id="first_name" name="carteira" type="text" class="validate white-text">
                <label for="first_name" class="white-text">Carteira de Trabalho</label>
              </div>  
              <div class="input-field col s6">
                <input  id="first_name" name="telefone_1" type="text" class="validate white-text">
                <label for="first_name" class="white-text">Celular</label>
              </div>
    	        <div class="input-field col s6">
                <input  id="first_name" name="telefone_2" type="text" class="validate white-text">
                <label for="first_name" class="white-text">Telefone</label>
              </div>
              <!--<div class="input-field col s6">
                <input  id="first_name" name="cidade" type="text" class="validate white-text">
                <label for="first_name" class="white-text">Cidade</label>
              </div>-->
			  <div class="input-field col s6">
			    <select class="white-text"
           name="cidades">
			      <option value=""  class="white-text">Selecione a cidade em que você busca emprego</option>

				    <option value="Araquari">Araquari</option> 
            <option value="Joinville">Joinville</option> 
				    <option value="São Francisco do Sul">São Francisco do Sul</option>
            <option value="Barra do Sul">Barra do Sul</option>
            <option value="Barra Velha">Barra Velha</option>
			    </select>
			    <label>Cidades</label>
			  </div>
              <div class="input-field col s6">
                <input  id="first_name" name="bairro" type="text" class="validate white-text">
                <label for="first_name" class="white-text">Bairro</label>
              </div>
              <div class="input-field col s6">
                <input  id="first_name" name="rua" type="text" class="validate white-text">
                <label for="first_name" class="white-text">Rua</label>
              </div>
              <div class="input-field col s6">
                <input  id="first_name" name="numero" type="text" class="validate white-text">
                <label for="first_name" class="white-text">Número</label>
              </div>
			  <div class="input-field col s6">
                <input  id="first_name" name="cep" type="text" class="validate white-text">
                <label for="first_name" class="white-text">CEP</label>
              </div>
              <div class="file-field input-field col s6">
			      <div class="btn blue-grey">
			        <span>Imagem de Perfil</span>
			        <input name="bt_imagem" type="file">
			      </div>
			      <div class="file-path-wrapper">
			        <input class="file-path validate white-text" name="imagem" type="text">
			      </div>
			    </div>
          <div class="file-field input-field col s6">
          <div class="btn blue-grey">
              <span>Anexo do Currículo</span>
              <input name="bt_anexo" type="file">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate white-text" name="anexo" type="text">
            </div>
          </div>
              <div class="input-field col s6">
                <input  id="first_name" name="email" type="email" class="validate white-text">
                <label for="first_name" class="white-text">E-mail</label>
              </div>
              <div class="input-field col s6">
                <input  id="first_name" name="login" type="text" class="validate white-text">
                <label for="first_name" class="white-text">Login do usuário</label>
              </div>
              <div class="input-field col s6">
                <input  id="first_name" name="senha-1" type="password" class="validate white-text">
                <label for="first_name" class="white-text">Senha</label>
              </div>
              <div class="input-field col s6">
                <input  id="first_name" name="senha-2" type="password" class="validate white-text">
                <label for="first_name" class="white-text">Confirme a senha</label>
              </div>
 
                <div class=" col s12 center">
               <p class="white-text">Horários disponíveis:</p>
               <p class="center">

          <input class="with-gap" name="diurno"  type="radio" id="Diurno"  />
          <label for="Diurno" class="white-text">Diurno</label>

          <input class="with-gap" name="matutino" name="" type="radio" id="Matutino"  />
          <label for="Matutino" class="white-text">Matutino</label>

          <input class="with-gap" name="vespertino" name="vespertino" type="radio" id="Vespertino"  />
          <label for="Vespertino" class="white-text">Vespertino</label>

          <input class="with-gap" name="group1" name="noturno" type="radio" id="Noturno"  />
          <label for="Noturno" class="white-text">Noturno</label>


    				</p>

              </div>
              <div class="card-content white-text">
              <span class="card-title">Termos de Uso</span>
              <p class="white-text-text">Para continuar você precisa aceitar os termos de uso  do aplicativo mesmo nâo tendo cosciência.</p>
              <input name="" type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
              <label for="filled-in-box">Concordo com os termos de uso</label>
            </div>
            <div class="card-action">
              <a href="empresa.php"><p>Sou Empresa</p></a>
              <button class="btn waves-effect blue-grey" name="" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
              </button>
                    <!--<a id="botao" class="btn btn-floating btn-large cyan accent-2 pulse halfway-fab tooltipped" href="funcional.php" data-tooltip="enviar"><i class="material-icons">send</i></a>-->
            </div>
            </form>
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