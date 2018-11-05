<?php 
	require_once __DIR__."/../../config.php";
	require_once __DIR__."/../modelos/empresa.php";
	require_once __DIR__."/../crud/crud_empresa.php";

function cadastrar_empresa(){
	session_start();
	$arquivo = $_FILES["bt_imagem"];
	$pasta_dir = "../visao/admin/img_empresa/";
	$arquivo_nome = $pasta_dir . $_FILES["bt_imagem"]['name'];
	$imageFileType = strtolower(pathinfo($arquivo_nome, PATHINFO_EXTENSION));
	unlink($pasta_dir . 'foto-' . $_POST['login'] . '.' . $imageFileType);
	move_uploaded_file($_FILES["bt_imagem"]["tmp_name"], $arquivo_nome);
    rename($arquivo_nome, $pasta_dir . 'foto-' . $_POST['login'] . '.' . $imageFileType);
    $arquivo_nome ='foto-' . $_POST['login'] . '.' . $imageFileType;
	$empresa = new Empresa($_POST['nome'], $_POST['data'],$_POST['RG'],$_POST['CPF'],$_POST['tel_1'],$_POST['email'],$_POST['nome_empresa'],$_POST['cnpj'],$_POST['razao_social'],$_POST['area'],$_POST['cidade'],$_POST['bairro'],$_POST['rua'],$_POST['numero'],$_POST['cep'],$_POST['email_empresa'],$_POST['login'],$_POST['senha']);
	$empresa->imagem = $arquivo_nome;
	$crudc_e = new crud_Empresa();
	$crudc_e->criar($empresa);
	$_SESSION['alerta'] = ' Cadastrado com Sucesso';
	$_SESSION['nome'] = $_POST['nome_empresa'];
	header('location: controlador_login.php?acao=login');
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
	session_start();
	include '../../assets/cabecalho.html';
	include '../visao/admin/perfil_empresa.php';
}
function editar_empresa($id){
	$crud = new crud_empresa();
	$listaEmpresa = $crud->get($id);
	include '../../assets/cabecalho.html';
	include '../visao/admin/empresa_edicao.php';
}
function excluir_empresa($id){
	$crud = new crud_empresa();
	$listaEmpresa = $crud->deletar($id);
	header('Location: ../../index.php');
}
function editar2_empresa($empresa){
	$empresa =  new Empresa($_POST['nome'], $_POST['data'],$_POST['RG'],$_POST['CPF'],$_POST['tel_1'],$_POST['email'],$_POST['nome_empresa'],$_POST['cnpj'],$_POST['razao_social'],$_POST['area'],$_POST['cidade'],$_POST['bairro'],$_POST['rua'],$_POST['numero'],$_POST['cep'],$_POST['email_empresa'],$_POST['login'],$_POST['senha'],$_GET['id']);
	$crud = new crud_Empresa();
	$empresa_banco = $crud->get($_GET['id']);

	// $empresa_banco = listar_empresa($_GET['id']);

	$pasta_dir = "../visao/admin/img_empresa/";
	$arquivo = $_FILES["bt_imagem"];
	if ($arquivo['size'] > 0) {
			unlink($pasta_dir . $empresa_banco['imagem']);

			$arquivo_nome = $pasta_dir.$_FILES["bt_imagem"]['name'];
			$imageFileType = strtolower(pathinfo($arquivo_nome, PATHINFO_EXTENSION));
			move_uploaded_file($_FILES["bt_imagem"]["tmp_name"], $arquivo_nome);
			rename($arquivo_nome, $pasta_dir . 'foto-' . $_POST['login'] . '.' . $imageFileType);
			$arquivo_nome = 'foto-' . $_POST['login'] . '.' . $imageFileType;
			$empresa->imagem = $arquivo_nome;

		} else {

			///$empresa->img = //caminho do banco;
			$empresa->imagem = $empresa_banco['imagem'];			
		}
	$crud = new crud_Empresa();
	$listaEmpresa = $crud->editar($empresa);
	session_start();
	$listaEmpresa = $crud->get($_GET['id']);
	$_SESSION = $listaEmpresa;
	$_SESSION['alerta'] = ' Editado com Sucesso';
	$_SESSION['nome'] = $_POST['nome'];
	include '../../assets/cabecalho.html';
	include '../visao/admin/perfil_empresa.php';
}

function pagina_cadastrar_empresa(){
	include '../../assets/cabecalho.html'; 
	include '../visao/empresa.php';
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

// function logout(){
// 	session_start();
// 	session_destroy();
// 	header('Location: ../../index.php');
// }
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
		excluir_empresa($_GET['id']);
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
	case 'pagina_cadastrar_empresa':
		pagina_cadastrar_empresa();		
	break;
	default:
			
	break;
}