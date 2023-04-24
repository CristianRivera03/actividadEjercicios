<?php
    class Medidor{
        #creacion de atributos
        public $centigrados;

        #creacion del constructor
        public function __construct($centigrados){
            $this -> centigrados = $centigrados;
        }

        #creacion de metodo
        function medir(){
            if($this -> centigrados <= 0){
                echo "temperatura máximamente FRIA”";
            }
            elseif($this -> centigrados <= 30){
                echo "temperatura estable";
            }
            elseif($this -> centigrados >= 31){
                echo "temperatura máximamente CALIENTE";
            }   
        }
    }

    $conversion = new Medidor($_POST['centigrados']);
    $conversion->medir();
?>
