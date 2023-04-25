<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armas</title>
</head>
<body>


<table>
  <tr>
    <td>
      <img src="asalto.png" alt="Asalto" >
    </td>
    <td>
      <img src="escopeta.png" alt="Escopeta">
    </td>
  </tr>
  <tr>
    <td>
      <img src="scar.jpg" alt="SCAR">
    </td>
    <td>
      <img src="subfusil.png" alt="Subfusil">
    </td>
  </tr>
</table>





    <?php

        class Armas{
            #creacion de atributos
            public $municion;

            #creacion de constructor 
            public function __construct($municion){
                $this -> municion = 0;
            }

            #creacion de metodos de recargar
            public function recargar(){
                if($this -> municion == 0){
                    $this -> municion == 8;
                }
            }

            #creacion de metodo de disparar
            public function disparar(){
                if($this -> municion > 0 && $this -> municion <= 8){
                    $this -> municion --;
                }
            }

            #creacion metodo de balas restantes
            public function balasRestantes(){
                return $this -> municion;
            }



        }

    ?>

</body>
</html>