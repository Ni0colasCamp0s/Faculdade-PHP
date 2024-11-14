<?php

class aluno {
    public $ra;
    public $nome;
    public $curso;

function getCurso() {
    return $this->curso;
}

function setCurso($cur) {
$this->curso = $cur;
    }
}

/* O código apresenta a criação da classe Aluno em linguagem PHP. 
A classe apresenta como atributos as variáveis $ra, $nome e $curso e os métodos getCurso() e setCurso(), 
que retornam e armazenam os cursos do aluno, respectivamente. */

?>