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
        $sql = "INSERT INTO candidato (nome, data, rg, cpf, tel_1, tel_2, cidade, bairro, rua, numero, cep, email, img, login, senha, periodo,anexo_curricular,carteira_trabalho) VALUES ('$candidato->nome', '$candidato->data', '$candidato->rg', '$candidato->cpf','$candidato->tel_1','$candidato->tel_2','$candidato->cidade','$candidato->bairro','$candidato->rua','$candidato->numero','$candidato->cep','$candidato->email','$candidato->img','$candidato->login','$candidato->senha','$candidato->periodo','$candidato->anexo','$candidato->carteira')";

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
	
		$consulta = $consulta->fetch(PDO::FETCH_ASSOC);

		return $consulta;
    }
    public function deletar($id){
		$sql = "DELETE FROM candidato where id_candidato = '$id'";
		$this->conexao->exec($sql);
    }
    public function editar($candidato){
		$sql = "UPDATE candidato set nome = '$candidato->nome', data = '$candidato->data', rg = '$candidato->rg', cpf = '$candidato->cpf', tel_1 = '$candidato->tel_1', tel_2 = '$candidato->tel_2', cidade = '$candidato->cidade', bairro = '$candidato->bairro', rua = '$candidato->rua', numero = '$candidato->numero', cep = '$candidato->cep', email = '$candidato->email', img = '$candidato->img', login = '$candidato->login', senha = '$candidato->senha', periodo = '$candidato->periodo', anexo_curricular = '$candidato->anexo', carteira_trabalho =  '$candidato->carteira' where id_candidato = '$candidato->id'";
		$this->conexao->exec($sql);
    }
    //  public function updateCategoria(Categoria $categoria){
    //    $sql = " update categoria set nome_categoria = '$categoria->getNome()', descricao_categoria = '$categoria->getDescricao()' where id_categoria = $categoria->getId()";
    //    $this->conexao->exec($sql);
    //}
}