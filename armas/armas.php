<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armas</title>
</head>
<body>
    <div class="arma_uno">
        <img src="asalto.png" alt="">
        <form action="" method = "POST">
            <input type="text">
        </form>
    </div>

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



        }

    ?>

</body>
</html>