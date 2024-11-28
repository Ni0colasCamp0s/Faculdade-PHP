<?php

class aluno {
    public $ra;
    public function setRa($r) {
        $this->ra = $r;
    }
}

$a = new aluno();
$a->setRa("12345");
$a->ra="67890";

/*O código apresentado mostra um exemplo de uso do atributo público da linguagem PHP. 
O atributo $ra foi definido como público assim como o método setRa(). 
Assim, é possivel acessar o atributo tanto dentro quanto fora da classe.*/
?>