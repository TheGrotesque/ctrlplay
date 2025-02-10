<?php

    class Pessoa { // Define o nome da classe
        public $nome;   // Atributo nome
        public $altura; // Atributo altura

        public function falar() {  // Criando o método falar
            echo "falou";
        }
    }

    $victor = new Pessoa(); // Criando o objeto victor
    $victor->nome = "Victor Hugo da Silva"; // Acessando o atributo nome e atribuindo um valor
    $victor->altura = 1.73; // Acessando o atributo altura e atribuindo um valor
    $victor->falar(); // Acessando o método falar
    
?>