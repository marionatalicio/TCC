<?php 
require_once __DIR__."/../../config.php";
require_once "../modelos/candidato.php";
require_once "../crud/crud_candidato.php";

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
	$candidato = new Candidato($_POST['nome'], $_POST['data'],$_POST['RG'],$_POST['CPF'],$_POST['telefone_1'],$_POST['telefone_2'],$_POST['cidade'],$_POST['estado'],$_POST['bairro'],$_POST['rua'],$_POST['numero'],$_POST['cep'],$_POST['email'],$_POST['imagem'],$_POST['login'],$_POST['senha-1'],$periodo);
	$crudc_c = new crud_Candidato();
	$crudc_c->criar($candidato);
	header('Location: ../../index.php');
}

function listar_candidatos() {
	$crud = new crud_Candidato();
	$listaCandidatos = $crud->getAll();
	require_once __DIR__."/../visao/admin/listar_candidatos.php";
}

function listar_candidato(){
	$crud = new crud_Candidato();
	$id = 14;
	$listaCandidato = $crud->get($id);
	include '../visao/perfil.php';
}

function verificar_candidato(){
	$login =  $_POST['login'];
	$senha =  $_POST['senha'];
	$crud = new crud_Candidato();
	$listaCandidato = $crud->getAll();
	foreach ($listaCandidato as $listaCandidatos){

        //colar aqui o if
        if ($login == $listaCandidatos['login'] AND $senha == $listaCandidatos['senha'] ) {
            $usuario_existe = true;
           	session_start();
            $_SESSION = $listaCandidatos;
            

            //deu certo;
            //$_SESSION['usuario_nome']   = $listaCandidatos['login'];
            //$_SESSION['usuario_login']  = $listaCandidatos['login'];
            //$_SESSION['usuario_senha']  = $listaCandidatos['senha'];
            //$_SESSION['usuario_id']	    = $listaCandidatos['id_candidato'];
            $_SESSION['usuario_online'] = true;

            //redirecionar
            
            
            

        }
                	
        
    }
    
    if ($usuario_existe == true) {

    	include'../visao/funcional.php';	
    } else {
    	header('Location: ../../index.php');
    }
}
	//controle de rotas
if (isset($_GET['acao'])){
	$acao = $_GET['acao'];
} else{
	header('Location: ../../index.php');
}

switch ($acao) {
	case 'cadastrar_candidato':
		cadastrar_candidato();
	break;
	case 'editar_candidato':
	break;
	case 'listar_candidatos':
		listar_candidatos();
	break;
	case 'listar_candidato':
		 listar_candidato();
	break;
	case 'excluir_candidato':
	break;
		case 'verificar_candidato':
		verificar_candidato();
		
	break;
	default:
			# code...
	break;
}