<?php
require_once __DIR__.'/../database/conexao.php';
require_once __DIR__.'/../modelos/vaga.php';

class crud_vaga  {
	
	private $conexao;
	public  $vaga;
	
	function __construct() {
		$this->conexao = Conexao::getConexao();
	}
	public function criar(vaga $vaga){
        $sql = "INSERT INTO vaga (nome, area, quantidade, data_f_inscricao, data_f_resposta, turno, descricao, desc_formacao, desc_experiencia, tel_1, email,id_area_vaga, id_cidade, id_contrato, id_empregador) VALUES ('$vaga->nome', '$vaga->area', '$vaga->quantidade', '$vaga->data_final_ins','$vaga->data_final_res','$vaga->turno','$vaga->desc_vaga','$vaga->desc_form','$vaga->desc_exp','$vaga->tel_1','$vaga->email','$vaga->area', '2','2','11')";

        $this->conexao->exec($sql);

    }
    public function getAll(){
		$consulta = 'SELECT * FROM vaga';
		$consulta = $this->conexao->query($consulta);
		$vagas = $consulta->fetchAll(PDO::FETCH_ASSOC);
		return $vagas;
    }
    public function get($id_vaga){
		$consulta = "SELECT * FROM vaga where id_vaga = '$id_vaga'";
		$consulta = $this->conexao->query($consulta);
	
		$consulta = $consulta->fetch(PDO::FETCH_ASSOC);

		return $consulta;
    }
    public function deletar($id){
		$sql = "DELETE FROM vaga where id_vaga = '$id'";
		$this->conexao->exec($sql);
    }
    public function editar($vaga){
		$sql = "UPDATE vaga set nome = '$vaga->nome', area = '$vaga->area', quantidade = '$vaga->quantidade', data_f_inscricao = '$vaga->data_final_ins', data_f_resposta = '$vaga->data_final_res', turno = '$vaga->turno', descricao = '$vaga->desc_vaga', desc_formacao = '$vaga->desc_form', desc_experiencia = '$vaga->desc_exp', tel_1 = '$vaga->tel_1', email = '$vaga->email', email = '$vaga->email' where id_vaga = '$vaga->id_vaga'";
		$this->conexao->exec($sql);
    }
    public function buscaArea(){
		$consulta_area = "SELECT area from area_vaga";
		$consulta_area = $this->conexao->query($consulta_area);
		$consulta_area = $consulta_area->fetchAll(PDO::FETCH_ASSOC);
		return $consulta_area;
	}
    //  public function updateCategoria(Categoria $categoria){
    //    $sql = " update categoria set nome_categoria = '$categoria->getNome()', descricao_categoria = '$categoria->getDescricao()' where id_categoria = $categoria->getId()";
    //    $this->conexao->exec($sql);
    //}
}