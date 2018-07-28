<?php
	class Empresa {
		public $nome	;
		public $data	;
		public $RG		;
		public $CPF		;
		public $telefone;
		public $email	;
		public $nome_emp;
		public $CNPJ	;
		public $razao	;
		public $area	;
		public $cidade	;
		public $bairro	;
		public $rua		;
		public $numero	;
		public $cep	    ;
		public $email_ep;
		public $imagem	;
		public $login	;
		public $senha	;
		public $id	    ;

		function __construct($nome,$data,$RG,$CPF,$telefone,$email,$nome_emp,$CNPJ,$razao,$area,$cidade,$bairro,$rua,$numero,$cep,$email_ep,$imagem,$login,$senha,$id = null)
		{
			$this->nome = $nome;
			$this->data = $data;
			$this->RG = $RG;
			$this->CPF = $CPF;
			$this->telefone = $telefone;
			$this->email = $email;
			$this->nome_emp = $nome_emp;
			$this->CNPJ = $CNPJ;
			$this->razao = $razao;
			$this->area = $area;
			$this->cidade = $cidade;
			$this->bairro = $bairro;
			$this->rua = $rua;
			$this->numero = $numero;
			$this->cep = $cep;
			$this->email_ep = $email_ep;
			$this->imagem = $imagem;
			$this->login = $login;
			$this->senha = $senha;
			$this->id = $id;
		}
		public function getId(){
        	return $this->id;
    	}

    	public function setId($id){
        	$this->id = $id;
    	}

	}