<?php 
	require_once __DIR__."/../../config.php";
	require_once __DIR__."/../modelos/empresa.php";
	require_once __DIR__."/../crud/crud_empresa.php";

function cadastrar_empresa(){
	$empresa = new Empresa($_POST['nome'], $_POST['data'],$_POST['RG'],$_POST['CPF'],$_POST['tel_1'],$_POST['email'],$_POST['nome_empresa'],$_POST['cnpj'],$_POST['razao_social'],$_POST['area'],$_POST['cidade'],$_POST['bairro'],$_POST['rua'],$_POST['numero'],$_POST['cep'],$_POST['email_empresa'],$_POST['imagem'],$_POST['login'],$_POST['senha']);
	$crudc_e = new crud_Empresa();
	$crudc_e->criar($empresa);
	header('Location: ../../index.php');
}

function listar_empresas() {
	$crud = new crud_Empresa();
	$listaempresas = $crud->getAll();
	include '../../assets/cabecalho.html'; 
	require_once __DIR__."/../visao/admin/listar_empresas.php";
}

function listar_empresa($id){
	$crud = new crud_Empresa();
	$listaEmpresa = $crud->get($id);
	include '../../assets/cabecalho.html';
	include '../visao/admin/perfil_empresa.php';
}
function editar_empresa($id){
	$crud = new crud_empresa();
	$listaEmpresa = $crud->get($id);
	include '../../assets/cabecalho.html';
	include '../visao/admin/empresa_edicao.php';
}
function editar2_empresa($empresa){

	$empresa =  new Empresa($_POST['nome'], $_POST['data'],$_POST['RG'],$_POST['CPF'],$_POST['tel_1'],$_POST['email'],$_POST['nome_empresa'],$_POST['cnpj'],$_POST['razao_social'],$_POST['area'],$_POST['cidade'],$_POST['bairro'],$_POST['rua'],$_POST['numero'],$_POST['cep'],$_POST['email_empresa'],$_POST['imagem'],$_POST['login'],$_POST['senha']);
	$crud = new crud_Empresa();
	$listaEmpresa = $crud->editar($empresa);
	echo $empresa->id;
	
	include '../../assets/cabecalho.html';
	include '../visao/admin/perfil_empresa.php';
}

function verificar_empresa(){
	$login =  $_POST['login'];
	$senha =  $_POST['senha'];
	$crud = new crud_empresa();
	$listaempresa = $crud->getAll();
	foreach ($listaempresa as $listaempresas){

        //colar aqui o if
        if ($login == $listaempresas['login'] AND $senha == $listaempresas['senha'] ) {
            $usuario_existe = true;
           	session_start();
            $_SESSION = $listaempresas;
            $_SESSION['usuario_online'] = true;
        }
    }
    if ($usuario_existe == true) {
    	include '../../assets/cabecalho.html';
    	include'../visao/funcional.php';	
    } else {
    	header('Location: ../../index.php');
    }
}
function pagina_cadastrarVaga(){
	include '../../assets/cabecalho.html';
    include'../visao/vaga/vagas.php';	

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
	//header('Location: ../../index.php');
}
//casos
switch ($acao) {
	case 'cadastrar_empresa':
		cadastrar_empresa();
	break;
	case 'editar_empresa':
		editar_empresa($_GET['id']);
	break;
	case 'editar2_empresa':
		editar2_empresa($_POST);		
	break;
	case 'listar_empresas':
		listar_empresas();
	break;
	case 'listar_empresa':
		 listar_empresa($_GET['id']);
	break;
	case 'excluir_empresa':
		excluir_empresa($_POST['id']);
	break;
	case 'verificar_empresa':
		verificar_empresa();		
	break;
	case 'buscaArea':
		buscaArea();		
	break;
	case 'pagina_cadastrarVaga':
		pagina_cadastrarVaga();		
	break;
	default:
			
	break;
}