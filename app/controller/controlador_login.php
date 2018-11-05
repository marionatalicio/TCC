<?php 
	require_once __DIR__."/../../config.php";
	require_once "../modelos/candidato.php";
	require_once "../crud/crud_candidato.php";
	require_once "../modelos/empresa.php";
	require_once "../crud/crud_empresa.php";
	require_once "../modelos/vaga.php";
	require_once "../crud/crud_vaga.php";
	function verificar_candidato(){
		$crud_vaga = new crud_vaga();
		$listavagas = $crud_vaga->getAll();
		session_start();
		session_destroy();
		session_start();
		$login =  $_POST['login'];
		$senha =  $_POST['senha'];
		$crud = new crud_Candidato();
		$listaCandidatos = $crud->getAll();
		$_SESSION['candidato_existe'] = false;
		foreach ($listaCandidatos as $listaCandidato){
		        //colar aqui o if
		        if ($login == $listaCandidato['login'] AND $senha == $listaCandidato['senha'] ) {
		            $_SESSION = $listaCandidato;
		            $_SESSION['usuario_online'] = true;
		        	$_SESSION['candidato_existe'] = true;
		        }
	    }
	    // var_dump($_SESSION);
	    if ($_SESSION['candidato_existe'] == true) {
	    	include '../../assets/cabecalho.html'; 
	    	include'../visao/funcional.php';	
	    }
	    $_SESSION['usuario_existe'] = false;
	    $crud = new crud_Empresa();
		$lista_empresas = $crud->getAll();
		foreach ($lista_empresas as $lista_empresa){ 
	    if ($login == $lista_empresa['login'] AND $senha == $lista_empresa['senha']) {
	            $_SESSION = $lista_empresa;
	            $_SESSION['usuario_online'] = true;
	    		$_SESSION['usuario_existe'] = true;
	    	}
	    }
	    if ($_SESSION['usuario_existe'] == true) {
	    	include '../../assets/cabecalho.html'; 
	    	include __DIR__.'/../visao/admin/listar_candidatos.php';	
	    }
	    elseif ($_SESSION['candidato_existe'] == false AND $_SESSION['usuario_existe'] == false){
		$_SESSION['alerta'] = 'Login ou Senha incorretos';
		include '../../assets/cabecalho.html';
		include '../visao/login_candidato.php';
	    }
	}
	if (isset($_GET['acao'])){
		$acao = $_GET['acao'];
	} else{
		header('Location: ../../index.php');
}
	
	function login(){
		session_start();
		include '../../assets/cabecalho.html';
		include '../visao/login_candidato.php';
	}
	function logout(){
	session_start();
	session_destroy();
	header('Location: ../../index.php');
	}
switch ($acao) {
	case 'login':
		login();
	break;
	case 'verificar_candidato':
		verificar_candidato();		
	break;
	default:
	case 'logout':
		logout();		
	break;
			
	break;
}