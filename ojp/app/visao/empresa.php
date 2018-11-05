        <style type="text/css">
          body {
              background-image: url("../../assets/image/cadastro.jpg");
                
          }
          input {
            color: white;
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
        <a id="logo-container" href="index.html" class="brand-logo center white-text">OJP</a>
        <ul class="right hide-on-med-and-down">
      <li><a href="#"></a></li>
          <!--<li><a class="btn-floating btn-large waves-effect waves-light blue-grey tooltipped pulse" data-tooltip="Menu"><i class="material-icons " data-activates="nav-mobile">menu</i></a><a href="#" class="waves-effect waves-light btn-floating"><i class="material-icons left">add</i></a></li>!-->
          <li><!--<a href="#" class="dropdown-button waves-effect waves-light btn-floating" data-activates="dropdown1"><i class="material-icons left">account_circle</i></a>!--></li>
        </ul>
        <!--<div class="nav-wrapper">
        <form>
          <div class="input-field">
            <input id="search" name="" type="search" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
          </div>
        </form>
      </div>  !-->

        <a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons btn-black">menu</i></a>
          <div class="nav-wrapper">
        <!--<form>
          <div class="input-field inline">
            <input id="search" name="" type="search" required>
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
            <div class="card transparent">
              <form class="col s12" method="POST" action="../controller/controlador_empresa.php?acao=cadastrar_empresa" enctype="multipart/form-data">
              	<h1 class="white-text"><i class="material-icons prefix large white-text">account_circle</i>Empresa</h1>
              <h3 class="white-text">Preencha o formulário abaixo para se  cadastrar</h3>
              <h5 class="white-text">Prencha com os dados do proprietário empresarial</h5>

                <div class="input-field inline col s3">
                  <input  id="first_name" name="nome" name="" type="text" class="validate" required>
                  <label for="first_name" class="white-text">Nome</label>
                </div>
                <div class="input-field col s3">
                  <input type="text" name="data" class="dataIniFim" required>
                  <label for="last_name" class="white-text">Data de Nascimento</label>
                </div>
                
                <div class="input-field col s3">
                  <input  id="first_name" name="RG" type="text" class="validate" required>
                  <label for="first_name" class="white-text">RG</label>
                </div>
                <div class="input-field col s3">
                  <input  id="first_name" name="CPF" type="text" class="validate" required>
                  <label for="first_name" class="white-text">CPF</label>
                </div>
                
                <div class="input-field col s3">
                  <input  id="first_name" name="tel_1" type="text" class="validate" required>
                  <label for="first_name" class="white-text">Telefone</label>
                </div>
                  <div class="input-field col s3">
                  <input  id="first_name" name="email" type="text" class="validate" required>
                  <label for="first_name" class="white-text">E-mail</label>
                </div>
                <div class="col s12">
                <h4 class="white-text">Dados da empresas</h4>
                </div>
                <div class="input-field col s3">
                  <input  id="first_name" name="nome_empresa" type="text" class="validate" required>
                  <label for="first_name" class="white-text">Nome da empresa</label>
                </div>
                <div class="input-field col s3">
                  <input  id="first_name" name="cnpj" type="text" class="validate" required>
                  <label for="first_name"  class="white-text">CNPJ</label>
                </div>
                <div class="input-field col s3">
                  <input  id="first_name" name="razao_social" type="text" class="validate" required>
                  <label for="first_name" class="white-text">Razão social</label>
                </div>
                <div class="input-field col s3">
                  <select class="white-text"
             name="area">
                    <option value="" >Selecione a Área *</option>

                    <option value="2">Agropecuária</option>  
                    <option value="1">Informática</option> 
                    <option value="3">Química</option>
                  </select>
                </div>
                <div class="input-field col s3">
                  <select class="white-text"
             name="cidade">
                    <option value="" >Selecione sua Cidade *</option>

                    <option value="2">Araquari</option> 
                    
                    <option value="0">Joinville</option> 
                    
                    <option value="3">São Francisco do Sul</option>

                  </select>
                </div>
                
  			        <div class="input-field col s3">
                  <input  id="first_name" name="bairro" type="text" class="validate" required>
                  <label for="first_name" class="white-text">Bairro</label>
                </div>
                <div class="input-field col s3">
                  <input  id="first_name" name="rua" type="text" class="validate" required>
                  <label for="first_name" class="white-text">Rua</label>
                </div>
                <div class="input-field col s3">
                  <input  id="first_name" name="numero" type="text" class="validate" required>
                  <label for="first_name" class="white-text">Número</label>
                </div>
  			  <div class="input-field col s3">
                  <input  id="first_name" name="cep" type="text" class="validate" required>
                  <label for="first_name" class="white-text">CEP</label>
                </div>
                <div class="input-field col s3">
                  <input  id="first_name" name="email_empresa" type="text" class="validate" required>
                  <label for="first_name" class="white-text">E-mail</label>
                </div>
                <div class="file-field input-field col s6">
  			      <div class="btn blue-grey">
  			        <span class="white-text">Imagem do Perfil</span>
  			        <input type="file" name="bt_imagem" required> 
  			      </div>
  			      <div class="file-path-wrapper">
  			        <input class="file-path  validate" name="imagem" type="text">
  			      </div>
  			    </div>
                <div class="input-field col s3">
                  <input  id="first_name" name="login" type="text" class="validate" required>
                  <label for="first_name" class="white-text">Login do usuário</label>
                </div>
                <div class="input-field col s3">
                  <input  id="first_name" name="senha" type="password" class="validate" required>
                  <label for="first_name" class="white-text">Senha</label>
                </div>
                <div class="input-field col s3">
                  <input  id="first_name" name="" type="password" class="validate" required>
                  <label for="first_name" class="white-text">Confirme a senha</label>
                </div>
                <div class="card-content white-text col s12">
                <p class="white-text">Campos com * são obrigatórios</p>
                <span class="card-title">Termos de Uso</span>

                <p class="white-text">Para continuar você precisa aceitar os termos de uso  do aplicativo.</p>
                <input type="checkbox" name="" class="filled-in" id="filled-in-box" checked="checked" />

                <label for="test5" class="white-text">Concordo com os termos de uso do OJP</label>
              </div>
              <div class="card-action col s6">
                <button class="btn waves-effect blue-grey" name="" type="submit" name="action">Enviar
                <i class="material-icons right">send</i>
                </button>
              </div>
              </form>
            </div>
          </div>
        </div>
        <script>$('.dataIniFim').pickadate({
  selectMonths: true,
  selectYears: 15,
  // Título dos botões de navegação
  labelMonthNext: 'Próximo Mês',
  labelMonthPrev: 'Mês Anterior',
  // Título dos seletores de mês e ano
  labelMonthSelect: 'Selecione o Mês',
  labelYearSelect: 'Selecione o Ano',
  // Meses e dias da semana
  monthsFull: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
  monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
  weekdaysFull: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
  weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
  // Letras da semana
  weekdaysLetter: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
  //Botões
  today: 'Hoje',
  clear: 'Limpar',
  close: 'Ok',
  // Formato da data que aparece no input
  format: 'dd/mm/yyyy',
  onClose: function() {
    $(document.activeElement).blur()
  }
});
       $(document).ready(function() {
      $('select').material_select();
    });</script>
      </body>
    </html>