<?php

class aluno{
    protected $ra;
    public function stRa($r) {
        $this->ra = $r;
        echo "Ra: $this->ra";
    }
}

class graduacao extends aluno {
    protected $tcc;

    public function setTcc($t) {
        $this->tcc = $t;
        echo "Tcc: $this->tcc";
    }
}

$a = new aluno();
$a->setRa('12345');
$a = new graduacao();
$a->setRa('67890');
$a->setTcc("Programação Web");

/*O código mostra um exemplo de uso de atributo protegido. 
O atributo $ra foi definido como protegido assim como $tcc. */
?>