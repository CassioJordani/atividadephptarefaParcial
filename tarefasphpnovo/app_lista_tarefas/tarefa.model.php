<?php
class Tarefa {
    private $id;
    private $id_status;
    private $tarefa;
    private $data_cadastro;
    private $arquivada; 
	private $prioridade; 
	private $prazo; 



    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
        return $this;
    }
	
}


?>
