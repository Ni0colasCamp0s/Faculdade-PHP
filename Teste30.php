<?php

class pessoas {
    private $_tipo;
    protected $_nome;
    protected $endereco;
    protected $_telefone;
    protected function setTipo($_t) {
        $this->_tipo = $_t;
    }
}

class estudante extends pessoas {
    protected $_curso;
    function CONSTRUCTOR() {
        parent::setTipo("E");
    }
}

$e = new estudante();
$e->$_tipo = "A"; //Erro

?>