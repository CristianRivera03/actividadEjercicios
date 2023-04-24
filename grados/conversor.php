<?php
    class Conversor{
        #creacion de atributos
        public $centigrados;
        public $fahrenheit;

        #creacion del constructor
        public function __construct($centigrados,$fahrenheit){
            $this -> centigrados = $centigrados;
            $this -> fahrenheit = $centigrados * 9/5 + 32;
        }

        #creacion de metodo
        function conversion(){
            echo "La conversion de {$this -> centigrados}° a Fahrenheit es igual a {$this -> fahrenheit}";
        }
    }

    $conversion = new Conversor($_POST['centigrados'], 0);
    $conversion -> conversion();
?>
