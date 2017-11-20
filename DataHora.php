<?php
// Horário de São Paulo
date_default_timezone_set('America/Sao_Paulo');
class DataHora {
	// Atributos
    private $dataNasc;
    #-------------------------------------#
    //Metodos especiais
    #------------------GET----------------#
    function getDataNasc() {
        return $this->dataNasc;
    }
    #------------------SET----------------#
    function setDataNasc($dataNasc) {
        $this->dataNasc = $dataNasc;
    }
    #-------------------------------------#
    // Metodos
    // Calcular Idade através da data do nascimento
    public function idade() {
    	if ($this->getDataNasc()) {    		
			$dn = new DateTime($this->dataNasc);
			$agora = new DateTime();
			$idade = $agora->diff($dn);
			echo "<p> Você tem ".$idade->y." anos </p>";
    	} else {
    		echo "<p> Informe sua data de nascimento!</p>";
    	}
    }
    public function Relogio() {
    	echo "<p> Horário atual: ". date('H:i:s'). "</p>";
    }
    public function Data() {
    	echo "<p> Data: ". date('d-m-Y'). "</p>";
    }
}
