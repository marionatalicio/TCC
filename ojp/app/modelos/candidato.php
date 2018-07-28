<?php
	class Candidato {
		public $nome	;
		public $data	;
		public $rg		;
		public $cpf		;
		public $tel_1	;
		public $tel_2	;
		public $cidade	;
		public $bairro	;
		public $rua		;
		public $numero	;
		public $cep		;
		public $email	;
		public $img		;
		public $login	;
		public $senha	;
		public $periodo	;
		public $anexo	;
		public $carteira;
		public $id	    ;

		function __construct($nome,$data,$rg,$cpf,$tel_1,$tel_2,$cidade,$bairro,$rua,$numero,$cep,$email,$img,$login,$senha,$periodo,$anexo,$carteira, $id = null)
		{
			$this->nome     	= $nome		;
			$this->data     	= $data		;
			$this->rg     		= $rg		;
			$this->cpf     		= $cpf		;
			$this->tel_1     	= $tel_1	;
			$this->tel_2     	= $tel_2	;
			$this->cidade     	= $cidade	;
			$this->bairro     	= $bairro	;
			$this->rua     		= $rua		;
			$this->numero     	= $numero	;
			$this->cep     		= $cep		;
			$this->email     	= $email	;
			$this->img     		= $img		;
			$this->login     	= $login	;
			$this->senha     	= $senha	;
			$this->periodo     	= $periodo	;
			$this->anexo     	= $anexo	;
			$this->carteira     = $carteira	;
			$this->id     		= $id		;
		}
		public function getId(){
        	return $this->id;
    	}

    	public function setId($id){
        	$this->id = $id;
    	}

	}