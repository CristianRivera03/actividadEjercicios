<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagenes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .fade-in-effect {
            opacity: 0;
            animation: fadeIn ease-in 1;
            animation-fill-mode: forwards;
            animation-duration: 1s;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
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
        echo "<img src='$ruta_imagen' alt='Descripción de la imagen' class='fade-in-effect'>";
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





