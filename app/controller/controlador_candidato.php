<?php 
	require_once __DIR__."/../../config.php";
	require_once __DIR__."/../modelos/candidato.php";
	require_once __DIR__."/../crud/crud_candidato.php";
	require_once __DIR__."/../modelos/empresa.php";
	require_once __DIR__."/../crud/crud_empresa.php";
	require_once __DIR__."/../modelos/vaga.php";
	require_once __DIR__."/../crud/crud_vaga.php";

	function cadastrar_candidato(){
		session_start();
		$periodo = "";
		
		if (isset($_POST['integral'])){
			$periodo = 'integral';
		}

		if(isset($_POST['matutino'])){
			$periodo = $periodo.' matutino';
		}
		
		if(isset($_POST['vespertino'])){
			$periodo = $periodo.' vespertino';
		}
	
		if(isset($_POST['noturno'])){
			$periodo = $periodo.' noturno';

		}
		
		$arquivo = $_FILES["bt_imagem"];
		$arquivo_2 = $_FILES["bt_anexo"];
        $pasta_dir = "../visao/img_candidato/";
        $arquivo_nome = $pasta_dir . $_FILES["bt_imagem"]['name'];
        $arquivo_nome_2 = $pasta_dir.$_FILES["bt_anexo"]['name'];
        $imageFileType = strtolower(pathinfo($arquivo_nome, PATHINFO_EXTENSION));
        $imageFileType_2 = strtolower(pathinfo($arquivo_nome_2, PATHINFO_EXTENSION));

        move_uploaded_file($_FILES["bt_imagem"]["tmp_name"], $arquivo_nome);
        
        move_uploaded_file($_FILES["bt_anexo"]["tmp_name"], $arquivo_nome_2);
		
		// unlink($pasta_dir . 'foto-' . $_POST['login'] . '.' . $imageFileType);
        rename($arquivo_nome, $pasta_dir . 'imagem-' . $_POST['login'] . '.' . $imageFileType);

		// unlink($pasta_dir . 'foto-' . $_POST['login'] . '.' . $imageFileType);
	    rename($arquivo_nome_2, $pasta_dir . 'anexo-' . $_POST['login'] . '.' . $imageFileType_2);

		$arquivo_nome = 'imagem-' . $_POST['login'] . '.' . $imageFileType;
        $arquivo_nome_2 = 'anexo-' . $_POST['login'] . '.' . $imageFileType_2;
		
		$candidato = new Candidato($_POST['nome'], $_POST['data'],$_POST['RG'],$_POST['CPF'],$_POST['telefone_1'],$_POST['telefone_2'],$_POST['cidades'],$_POST['bairro'],$_POST['rua'],$_POST['numero'],$_POST['cep'],$_POST['email'],$_POST['login'],$_POST['senha-1'],$periodo, $_POST['carteira']);

		$candidato->img = $arquivo_nome;
		$candidato->anexo = $arquivo_nome_2;

		$crudc_c = new crud_Candidato();
		$crudc_c->criar($candidato);
		$_SESSION['alerta'] = ' Cadastrado com Sucesso';
		$_SESSION['nome'] = $_POST['nome'];
		header('location: controlador_login.php?acao=login');
	}

	function listar_candidatos() {

		$crud = new crud_Candidato();
		$listaCandidatos = $crud->getAll();
		include '../../assets/cabecalho.html'; 
		require_once __DIR__."/../visao/admin/listar_candidatos.php";
	}

	function listar_candidato($id){
		$crud = new crud_Candidato();
		$listaCandidato = $crud->get($id);
		session_start();
		$_SESSION = $listaCandidato;
		include '../../assets/cabecalho.html'; 
		include '../visao/perfil.php';
	}

	function excluir_candidato($id){
		$crud = new crud_Candidato();
		$listaCandidato = $crud->deletar($id);
		$_SESSION['alerta'] = 'Usuario Excluído com Sucesso';
		header('Location: ../../index.php');
	}

	function editar_candidato($id){
		$crud = new crud_Candidato();
		$listaCandidato = $crud->get($id);
		include '../../assets/cabecalho.html'; 
		include '../visao/candidato_edicao.php';
	}

	function editar2_candidato(){

		$periodo = "";
		if (isset($_POST['diurno'])){
			$periodo= 'diurno';
		}

		if(isset($_POST['matutino'])){
			$periodo=$periodo.',matutino';
		}
		
		if(isset($_POST['vespertino'])){
			$periodo= $periodo.',vespertino';
		}
		
		if(isset($_POST['noturno'])){
			$periodo= $periodo.',noturno';
		}


		$candidato = new Candidato($_POST['nome'], $_POST['data'],$_POST['RG'],$_POST['CPF'],$_POST['telefone_1'],$_POST['telefone_2'],$_POST['cidades'],$_POST['bairro'],$_POST['rua'],$_POST['numero'],$_POST['cep'],$_POST['email'],$_POST['login'],$_POST['senha-1'],$periodo,$_POST['carteira'],$_GET['id']);


	    $pasta_dir = "../visao/img_candidato/";

		$arquivo = $_FILES["bt_imagem"];
		$arquivo_2 = $_FILES["bt_anexo"];
		$arquivo_nome = "";
		$crud = new crud_Candidato();
		$candidato_banco = $crud->get($_GET['id']);
		// $candidato_banco = listar_candidato($_GET['id']);
		//se size for menor que um, isso significa que a foto nao foi atualizada
		if ($arquivo['size'] > 0) {
			unlink($pasta_dir . $candidato_banco['img']);

			$arquivo_nome = $pasta_dir.$_FILES["bt_imagem"]['name'];
			$imageFileType = strtolower(pathinfo($arquivo_nome, PATHINFO_EXTENSION));
			move_uploaded_file($_FILES["bt_imagem"]["tmp_name"], $arquivo_nome);
			rename($arquivo_nome, $pasta_dir . 'imagem-' . $_POST['login'] . '.' . $imageFileType);
			$arquivo_nome = 'imagem-' . $_POST['login'] . '.' . $imageFileType;
			$candidato->img = $arquivo_nome;

		} else {

			///$candidato->img = //caminho do banco;
			$candidato->img = $candidato_banco['img'];			
		}

		// $arquivo_2 = $_FILES["bt_anexo"];
	 	//            $arquivo_nome = $pasta_dir.$_FILES["bt_anexo"]['name'];
	 	//            $imageFileType = strtolower(pathinfo($arquivo_nome, PATHINFO_EXTENSION));
		// 		unlink($pasta_dir . 'foto-' . $_POST['login'] . '.' . $imageFileType);
	 	//            rename($arquivo_nome, $pasta_dir . 'foto-' . $_POST['login'] . '.' . $imageFileType);



		if ($arquivo_2['size'] > 0) {
			unlink($pasta_dir . $candidato_banco['anexo_curricular']);

			$arquivo_nome_2 = $pasta_dir.$_FILES["bt_anexo"]['name'];
			$imageFileType_2 = strtolower(pathinfo($arquivo_nome_2, PATHINFO_EXTENSION));
			move_uploaded_file($_FILES["bt_anexo"]["tmp_name"], $arquivo_nome_2);
			rename($arquivo_nome_2, $pasta_dir . 'anexo-' . $_POST['login'] . '.' . $imageFileType_2);
			$arquivo_nome_2 = 'anexo-' . $_POST['login'] . '.' . $imageFileType_2;
			$candidato->anexo = $arquivo_nome_2;
		}
 		else {

			///$candidato->img = //caminho do banco;
			$candidato->anexo = $candidato_banco['anexo_curricular'];			
		}


		$crud = new crud_Candidato();
		$listaCandidato = $crud->editar($candidato);
		session_start();
		$listaCandidato = $crud->get($_GET['id']);
		$_SESSION = $listaCandidato;
		$_SESSION['alerta'] = ' Editado com Sucesso';
		$_SESSION['nome'] = $_POST['nome'];
		// var_dump($candidato_banco);
		include '../../assets/cabecalho.html'; 
		include '../visao/perfil.php';
	}

	function pagina_cadastrar_candidato(){
		include '../../assets/cabecalho.html'; 
		include '../visao/candidato.php';
	}

	function listar_vagas(){
		$crud_vaga = new crud_vaga();
		$listavagas = $crud_vaga->getAll();
		include '../../assets/cabecalho.html'; 
		include '../visao/funcional.php';
	}

	function logout(){
		session_start();
		session_destroy();
		header('Location: ../../index.php');
	}

	function verificar_candidato(){
		session_start();
		session_destroy();
		session_start();
		$login =  $_POST['login'];
		$senha =  $_POST['senha'];
		$crud = new crud_Candidato();
		$listaCandidatos = $crud->getAll();
		$usuario_existe = false;
		foreach ($listaCandidatos as $listaCandidato){

	        //colar aqui o if
	        if ($login == $listaCandidato['login'] AND $senha == $listaCandidato['senha'] ) {
	            $usuario_existe = true;
	            $_SESSION = $listaCandidato;
	            $_SESSION['usuario_online'] = true;
	        }
	    }
	    if ($usuario_existe == true) {
	    	include '../../assets/cabecalho.html'; 
	    	include'../visao/funcional.php';	
	    }
	    $usuario_existe = false;
	    $crud = new crud_Empresa();
		$lista_empresas = $crud->getAll();
		foreach ($lista_empresas as $lista_empresa){ 
	    if ($login == $lista_empresa['login'] AND $senha == $lista_empresa['senha']) {
	    		$usuario_existe = true;
	            $_SESSION = $lista_empresa;
	            $_SESSION['usuario_online'] = true;
	    	}
	    }
	    if ($usuario_existe == true) {
	    	include '../../assets/cabecalho.html'; 
	    	include __DIR__.'/../visao/admin/listar_candidatos.php';	
	    }
	    else {
	    	header('Location: ../../index.php');
	    }
	}

	if (isset($_GET['acao'])){
		$acao = $_GET['acao'];
	} else{
		header('Location: ../../index.php');
	}

	//casos
	switch ($acao) {
		case 'cadastrar_candidato':
			cadastrar_candidato();
		break;
		case 'listar_candidatos':
			listar_candidatos();
		break;
		case 'listar_candidato':
			 listar_candidato($_GET['id']);
		break;
		case 'excluir_candidato':
			excluir_candidato($_GET['id']);
		break;
		case 'verificar_candidato':
			verificar_candidato();		
		break;
		case 'editar_candidato':
			editar_candidato($_GET['id']);		
		break;
		case 'editar2_candidato':
			editar2_candidato();		
		break;
		case 'pagina_cadastrar_candidato':
			pagina_cadastrar_candidato();		
		break;
		case 'listar_vagas':
			listar_vagas();		
		break;
		case 'logout':
			logout();		
		break;
		default:
				
		break;
	}
?>	