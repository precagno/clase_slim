<?php

	class CamaraVigilancia{
		private $prendida;

		public function prender(){
			if(!$this->estaPrendida()){
				$this->prendida=true;
				echo "Prendiendo cámara.\n";
			}
			else{
				echo "La cámara ya se encuentra prendida.\n";
			}
		}

		public function filmar(){

			echo "Filmando.\n";
		}

		public function cambiarAngulo($grados){
			echo "Moviendo la cámara a un ángulo de {$grados} grados.\n";
		}

		private function estaPrendida(){
			return $this->prendida;
		}
	}


	//$camara=new CamaraVigilancia();
	
	//$camara->prender();//Apagada
	//$camara->prender();//Ya está prendida
	//$camara->filmar();
	//$camara->cambiarAngulo(98);
	//$camara->estaPrendida();//Da error

?>
