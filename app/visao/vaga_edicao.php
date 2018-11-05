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
              </ul>
              <a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons btn-black">menu</i></a>
                <div class="nav-wrapper">
            </div>
            </div>
          </nav>
        </div>
        <div class="row container">
          <div class="col s12">
            <div class="card N/A transparent">
              <form class="col s12" method="POST" action="../controller/controlador_vaga.php?acao=editar2_vaga&id=<?=$id_vaga?>">
                <h1 class="white-text"><i class="material-icons prefix large white-text">assignment</i>Vaga</h1>
                <h3 class="white-text">Preencha o formulário abaixo para  cadastrar a vaga</h3>
                <div class="input-field inline col s6">
                  <input  id="first_name" type="text" class="validate white-text" name="nome" value="<?=$lista_vaga['nome']?>">
                  <label for="first_name" class="white-text">Nome da vaga</label>
                </div>
                <div class="input-field col s6">
                  <select class="white-text"
             name="area">
                    <option value="" class="white-text"
             >Area da vaga</option>

                    <option value="a">Agropecuária</option> 
                    <option value="m">Mecânica</option> 
                    <option value="t">T.I</option> 
                    <option value="s">Serviços</option> 
                    <option value="i">Industrial</option>
                    <option value="i">Comercial</option>
                  </select>
                </div>
                <div class="input-field col s6">
                  <input  id="first_name" type="text" class="validate white-text" name="quantidade" value="<?=$lista_vaga['quantidade']?>">
                  <label for="first_name" class="white-text">Quantidade da vaga</label>
                </div>
                <div class="input-field col s3">
                  <input type="text" class="datepicker white-text" name="data_f_inscricao" value="<?=$lista_vaga['data_f_inscricao']?>">
                  <label for="last_name" class="white-text">Data Final para inscrição</label>
                </div>
                <div class="input-field col s3">
                  <input type="text" class="datepicker white-text" name="data_f_resposta" value="<?=$lista_vaga['data_f_resposta']?>">
                  <label for="first_name" class="white-text">Data Final para resposta</label>
                </div>
                <div class=" col s12 center">
                 <p class="white-text">Horários disponíveis:</p>
                 <p class="center">

            <input class="with-gap white-text" name="diurno"  type="radio" id="Diurno"  />
            <label for="Diurno" class="white-text">Diurno</label>

            <input class="with-gap white-text" name="matutino" name="" type="radio" id="Matutino"  />
            <label for="Matutino" class="white-text">Matutino</label>

            <input class="with-gap white-text" name="vespertino" name="vespertino" type="radio" id="Vespertino"  />
            <label for="Vespertino" class="white-text">Vespertino</label>

            <input class="with-gap white-text" name="group1" name="noturno" type="radio" id="Noturno"  />
            <label for="Noturno" class="white-text">Noturno</label>

              </p>

                </div>
            <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea white-text" name="desc_vaga" value="<?=$lista_vaga['descricao']?>"></textarea>
            <label for="textarea1" class="white-text">Descrição da vaga</label>
          </div>
          <div class="input-field col s6">
            <textarea id="textarea1" class="materialize-textarea white-text" name="desc_formacao" value="<?=$lista_vaga['desc_formacao']?>"></textarea>
            <label for="textarea1" class="white-text">Formação necessária</label>
          </div>
          <div class="input-field col s6">
            <textarea id="textarea1" class="materialize-textarea white-text" name="desc_experiencia" value="<?=$lista_vaga['desc_experiencia']?>"></textarea>
            <label for="textarea1" class="white-text">Experiência necessária</label>
          </div>
          <div class="input-field col s12">
            <h3 class="white-text">Contato para a vaga</h3>
          </div>
                <div class="input-field col s6">
                  <input  id="first_name" type="text" class="validate white-text" name="telefone" value="<?=$lista_vaga['tel_1']?>">
                  <label for="first_name" class="white-text">telefone</label>
                </div>
                  <div class="input-field col s6">
                  <input  id="first_name" type="email" class="validate white-text" name="email" value="<?=$lista_vaga['email']?>">
                  <label for="first_name" class="white-text">email</label>
                </div>
              
                <button class="btn waves-effect blue-grey" name="" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
                </button>
                
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