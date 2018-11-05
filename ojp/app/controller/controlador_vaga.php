<?php 
	require_once __DIR__."/../../config.php";
	require_once __DIR__."/../modelos/vaga.php";
	require_once __DIR__."/../crud/crud_vaga.php";
	require_once __DIR__."/../modelos/empresa.php";
	require_once __DIR__."/../crud/crud_empresa.php";
	require_once __DIR__."/../modelos/candidato.php";
	require_once __DIR__."/../crud/crud_candidato.php";
function cadastrar_vaga(){
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
	$vaga = new vaga($_POST['nome'], $_POST['area'],$_POST['quantidade'],$_POST['data_f_inscricao'],$_POST['data_f_resposta'], $periodo, $_POST['desc_vaga'],$_POST['desc_formacao'],$_POST['desc_experiencia'],$_POST['telefone'],$_POST['email'],$_POST['area']);
	$crud_vaga = new crud_vaga();
	var_dump($_POST['area']);
	$crud_vaga->criar($vaga);
	session_start();
	$crud = new crud_Candidato();
	$listaCandidatos = $crud->getAll();
	include '../../assets/cabecalho.html';
	include '../visao/admin/listar_candidatos.php';
}

function listar_vagas() {
	$crud = new crud_vaga();
	$listavagas = $crud->getAll();
	include '../../assets/cabecalho.html'; 
	include "../visao/listar_vagas.php";
}

function listar_vaga($id){
	$crud = new crud_vaga();
	$lista_vaga = $crud->get($id);
	include '../../assets/cabecalho.html'; 
	include '../visao/perfil.php';
}

function excluir_vaga($id){
	$crud = new crud_vaga();
	$lista_vaga = $crud->deletar($id);
	header('Location: ../../index.php');
}
function editar_vaga($id_vaga){
	$crud = new crud_vaga();
	$lista_vaga = $crud->get($id_vaga);
	include '../../assets/cabecalho.html'; 
	include '../visao/vaga_edicao.php';
}
function perfil_vaga($id_vaga){
	$crud = new crud_vaga();
	$lista_vaga = $crud->get($id_vaga);
	include '../../assets/cabecalho.html'; 
	include '../visao/vaga/perfil_vaga.php';
}
function editar2_vaga($vaga){
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
	$vaga = new vaga($_POST['nome'], $_POST['area'],$_POST['quantidade'],$_POST['data_f_inscricao'],$_POST['data_f_resposta'], $periodo, $_POST['desc_vaga'],$_POST['desc_formacao'],$_POST['desc_experiencia'],$_POST['telefone'],$_POST['email'],$_GET['id']);
	$crud = new crud_vaga();
	$listavaga = $crud->editar($vaga);
	$lista_vaga = $crud->get($_GET['id']);
	include '../../assets/cabecalho.html'; 
	include '../visao/vaga/perfil_vaga.php';
}
function pagina_cadastrar_vaga(){
	include '../../assets/cabecalho.html'; 
	include '../visao/vaga.php';
}
function buscaArea(){
$crud = new crud_Empresa();
$crud = $crud->buscaArea();
return $crud;
}
if (isset($_GET['acao'])){
	$acao = $_GET['acao'];
} else{
	$acao = 'buscaArea';
	// header('Location: ../../index.php');
}
//casos
switch ($acao) {
	case 'cadastrar_vaga':
		cadastrar_vaga();
	break;
	case 'listar_vagas':
		listar_vagas();
	break;
	case 'listar_vaga':
		 listar_vaga($_GET['id']);
	break;
	case 'excluir_vaga':
		excluir_vaga($_GET['id']);
	break;
	case 'verificar_vaga':
		verificar_vaga();		
	break;
	case 'editar_vaga':
		editar_vaga($_GET['id']);		
	break;
	case 'editar2_vaga':
		editar2_vaga($_POST);		
	break;
	case 'pagina_cadastrar_vaga':
		pagina_cadastrar_vaga();		
	break;
	case 'perfil_vaga':
		perfil_vaga($_GET['id']);		
	break;
	case 'buscaArea':
		buscaArea();		
	break;
	default:
			
	break;
}