<?php
require_once __DIR__.'/../database/conexao.php';
require_once __DIR__.'/../modelos/empresa.php';

class crud_empresa  {
	
	private $conexao;
	public  $empresa;
	
	function __construct() {
		$this->conexao = Conexao::getConexao();
	}
	public function criar(empresa $empresa){
        $sql = "INSERT INTO empregador (nome, data, RG, CPF, telefone, email, nome_empresa, CNPJ, razao_social, area, cidade, bairro, rua, numero, cep, email_empresa, imagem, login, senha) VALUES ('$empresa->nome', '$empresa->data', '$empresa->RG', '$empresa->CPF','$empresa->telefone','$empresa->email','$empresa->nome_emp','$empresa->CNPJ', ' $empresa->razao','$empresa->area','$empresa->cidade','$empresa->bairro','$empresa->rua','$empresa->numero','$empresa->cep','$empresa->email_ep','$empresa->imagem','$empresa->login','$empresa->senha')";

        $this->conexao->exec($sql);

    }
    public function getAll(){
		$consulta = 'SELECT * FROM empregador';
		$consulta = $this->conexao->query($consulta);
		$empresas = $consulta->fetchAll(PDO::FETCH_ASSOC);
		return $empresas;
    }
    public function get($id){
		$consulta = "SELECT * FROM empregador where id_empregador = '$id'";
		$consulta = $this->conexao->query($consulta);
		$consulta = $consulta->fetch(PDO::FETCH_ASSOC);
		return $consulta;
    }
    public function deletar($id){
		$sql = "DELETE FROM empregador where id_empregador = '$id'";
		$this->conexao->exec($sql);
    }
     public function editar($empresa){
		$sql = "UPDATE empregador set nome = '$empresa->nome', data = '$empresa->data', RG = '$empresa->RG', CPF = '$empresa->CPF', telefone = '$empresa->telefone', email = '$empresa->email', nome_empresa = '$empresa->nome_emp', CNPJ = '$empresa->CNPJ', razao_social = '$empresa->razao', area = '$empresa->area', cidade = '$empresa->cidade', bairro = '$empresa->bairro', rua = '$empresa->rua', numero = '$empresa->numero', cep = '$empresa->cep', email_empresa = '$empresa->email_ep', imagem = '$empresa->imagem', login = '$empresa->login', senha = '$empresa->senha' where id_empregador = '$empresa->id'";
		$this->conexao->exec($sql);
    }
	public function buscaArea(){
		$consulta_area = "SELECT area from area_vaga";
		$consulta_area = $this->conexao->query($consulta_area);
		$consulta_area = $consulta_area->fetchAll(PDO::FETCH_ASSOC);
		return $consulta_area;
	}
}