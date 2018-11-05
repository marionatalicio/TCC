<?php
	class vaga {
		public $nome		  ;
		public $area		  ;
		public $quantidade	  ;
		public $data_final_ins;
		public $data_final_res;
		public $turno		  ;
		public $desc_vaga	  ;
		public $desc_form	  ;
		public $desc_exp 	  ;
		public $tel_1		  ;
		public $email		  ;
		public $id_vaga	      ;
		public $id_area_vaga  ;

		function __construct($nome,$area,$quantidade,$data_final_ins,$data_final_res,$turno,$desc_vaga,$desc_form,$desc_exp, $tel_1, $email, $id_vaga = null, $id_area_vaga = null)
		{
			$this->nome     	  = $nome			 ;
			$this->area     	  = $area			 ;
			$this->quantidade     = $quantidade 	 ;
			$this->data_final_ins = $data_final_ins	 ;
			$this->data_final_res = $data_final_res	 ;
			$this->turno     	  = $turno		 	 ;
			$this->desc_vaga      = $desc_vaga		 ;
			$this->desc_form      = $desc_form		 ;
			$this->desc_expe      = $desc_exp 		 ;
			$this->tel_1      	  = $tel_1		 	 ;
			$this->email      	  = $email			 ;
			$this->id_vaga     	  = $id_vaga  		 ;
			$this->id_area_vaga   = $id_area_vaga  	 ;
		}
		public function getId_vaga(){
        	return $this->id_vaga;
    	}

    	public function setId_vaga($id_vaga){
        	$this->id_vaga = $id_vaga;
    	}

	}