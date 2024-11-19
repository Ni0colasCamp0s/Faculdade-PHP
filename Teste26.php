<?php
class carro {
    private $_marca;
    private $_modelo;
    private $_cor;
    Private $_ano;

    public function setMarca($_m) {
        $this->_marca = $_m;
    }
    public function setModelo($_m) {
        $this->_modelo = $_m;
    }
    public function setCor($_c) {
        $this->_cor = $_c;
    }
    public function setAno($_a) {
        if (is_int($_a)) {
            $this->_ano = $_a;
        }
        else {
            return FALSE;
        }
    }

    public function getMarca() {
        return $this->_marca;
    }
    public function getModelo() {
        return $this->_modelo;
    }
    public function getCor() {
        return $this->_cor;
    }     
    public function getAno() {
        return $this->_ano;
    }
    public function getCarro() {
        return "Marca: " . $this->getMarca() . "\n" .
            "Modelo: " . $this->getModelo() . "\n" .
                "Cor: " . $this->getCor() . "\n" .
                    "Ano: " . $this->getAno();
    }
} 

/* Uma vez que a classe é instanciada, pode-se acessar os atributos e métodos públicos da classe. 
Deve-se utilizar o operador - > após o nome do objeto que instancia a classe.*/
?>