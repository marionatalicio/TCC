<?php 
	require_once __DIR__."/../../config.php";
	require_once "../modelos/candidato.php";
	require_once "../crud/crud_candidato.php";
	require_once "../modelos/empresa.php";
	require_once "../crud/crud_empresa.php";
function cadastrar_candidato(){
	$periodo = "";
	if (isset($_POST['diurno'])){
		$periodo= 'diurno';
	}if(isset($_POST['matutino'])){
		$periodo=$periodo.',matutino';
	}
	if(isset($_POST['vespertino'])){
		$periodo= $periodo.',vespertino';

	}
	if(isset($_POST['noturno'])){
		$periodo= $periodo.',noturno';

	}
	$candidato = new Candidato($_POST['nome'], $_POST['data'],$_POST['RG'],$_POST['CPF'],$_POST['telefone_1'],$_POST['telefone_2'],$_POST['cidades'],$_POST['bairro'],$_POST['rua'],$_POST['numero'],$_POST['cep'],$_POST['email'],$_POST['imagem'],$_POST['login'],$_POST['senha-1'],$periodo,$_POST['anexo'],$_POST['carteira']);
	$crudc_c = new crud_Candidato();
	$crudc_c->criar($candidato);
	header('Location: ../../index.php');
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
	include '../../assets/cabecalho.html'; 
	include '../visao/perfil.php';
}

function excluir_candidato($id){
	$crud = new crud_Candidato();
	$listaCandidato = $crud->deletar($id);
	include '../../assets/cabecalho.html'; 
	include '../visao/perfil.php';
}
function editar_candidato($id){
	$crud = new crud_Candidato();
	$listaCandidato = $crud->get($id);
	include '../../assets/cabecalho.html'; 
	include '../visao/candidato_edicao.php';
}
function editar2_candidato($candidato){
	$periodo = "";
	if (isset($_POST['diurno'])){
		$periodo= 'diurno';
	}if(isset($_POST['matutino'])){
		$periodo=$periodo.',matutino';
	}
	if(isset($_POST['vespertino'])){
		$periodo= $periodo.',vespertino';

	}
	if(isset($_POST['noturno'])){
		$periodo= $periodo.',noturno';

	}
	$candidato = new Candidato($_POST['nome'], $_POST['data'],$_POST['RG'],$_POST['CPF'],$_POST['telefone_1'],$_POST['telefone_2'],$_POST['cidades'],$_POST['bairro'],$_POST['rua'],$_POST['numero'],$_POST['cep'],$_POST['email'],$_POST['imagem'],$_POST['login'],$_POST['senha-1'],$periodo,$_POST['anexo'],$_POST['carteira'],$_GET['id']);
	$crud = new crud_Candidato();
	$listaCandidato = $crud->editar($candidato);
	echo $candidato->id;
	include '../../assets/cabecalho.html'; 
	include '../visao/perfil.php';
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
		excluir_candidato($_POST['id']);
	break;
	case 'verificar_candidato':
		verificar_candidato();		
	break;
	case 'editar_candidato':
		editar_candidato($_GET['id']);		
	break;
	case 'editar2_candidato':
		editar2_candidato($_POST);		
	break;
	default:
			
	break;
}