<?php
require_once __DIR__.'/../database/conexao.php';
require_once __DIR__.'/../modelos/candidato.php';

class crud_Candidato  {
	
	private $conexao;
	public  $candidato;
	
	function __construct() {
		$this->conexao = Conexao::getConexao();
	}

	public function criar(candidato $candidato){
        $sql = "INSERT INTO candidato (nome, data, rg, cpf, tel_1, tel_2, cidade, estado, bairro, rua, numero, cep, email, img, login, senha, periodo) VALUES ('$candidato->nome', '$candidato->data', '$candidato->rg', '$candidato->cpf','$candidato->tel_1','$candidato->tel_2','$candidato->cidade','$candidato->estado','$candidato->bairro','$candidato->rua','$candidato->numero','$candidato->cep','$candidato->email','$candidato->img','$candidato->login','$candidato->senha','$candidato->periodo')";

        $this->conexao->exec($sql);

    }

    public function getAll(){
		$consulta = 'SELECT * FROM candidato';
		$consulta = $this->conexao->query($consulta);
		$candidatos = $consulta->fetchAll(PDO::FETCH_ASSOC);
		return $candidatos;
    }

    public function get($id){
		$consulta = "SELECT * FROM candidato where id_candidato = '$id'";
		$consulta = $this->conexao->query($consulta);
		

		return $consulta;
    }
    public function deletar($id){
		$consulta = "DELETE FROM candidato where id_candidato = '$id'";
		$this->conexao->exec($sql);
		
    }
}