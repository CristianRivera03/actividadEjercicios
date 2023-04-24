<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagenes</title>
</head>
<body>
    <h1>Digita un numero</h1>
    <form action="" method = "POST">
        <input type="number" name = "numero" placeholder = "ingresa un numero">
    </form>
<?php
    class Imagenes{
        #creando atributos
        public $fotos;

        #creando constructor 
        public function __construct($fotos){
            $this -> fotos = $fotos;
        }

        #creando metodo
        public function mostrar(){
            $ruta_imagen = "kañewes.jpg";
            for ($i = 1; $i <= $this -> fotos; $i++) {
                echo "<img src='$ruta_imagen' alt='Descripción de la imagen'>";
            }
        }
    }

    if(isset($_POST['numero'])){
        $photos = new Imagenes($_POST['numero']);
        $photos -> mostrar();
        }
?>

</body>
</html>





