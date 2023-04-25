<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruleta</title>
    <!-- Enlace al archivo de Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Enlace al archivo de CSS personalizado -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Tabla de precios</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Cantidad</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$1</td>
                    <td>$70</td>
                </tr>
                <tr>
                    <td>$2</td>
                    <td>$140</td>
                </tr>
                <tr>
                    <td>$3</td>
                    <td>$210</td>
                </tr>
                <tr>
                    <td>$4</td>
                    <td>$280</td>
                </tr>
                <tr>
                    <td>$5</td>
                    <td>$350</td>
                </tr>
                <tr>
                    <td>$6</td>
                    <td>$420</td>
                </tr>
                <tr>
                    <td>$7</td>
                    <td>$490</td>
                </tr>
                <tr>
                    <td>$8</td>
                    <td>$560</td>
                </tr>
                <tr>
                    <td>$9</td>
                    <td>$630</td>
                </tr>
                <tr>
                    <td>$10</td>
                    <td>$700</td>
                </tr>
            </tbody>
        </table>
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
                <form class="text-center" action="" method="POST">
                    <div class="mb-3">
                        <label for="numero_seleccionado" class="form-label">Selecciona con cuál número vas a jugar:</label>
                        <input type="number" id="numero_seleccionado" name="numero_seleccionado" class="form-control" placeholder="Número" min="0" max="100">
                    </div>
                    <div class="mb-3">
                        <label for="cantidad_seleccionada" class="form-label">Selecciona con cuánta cantidad vas a apostar:</label>
                        <input type="number" id="cantidad_seleccionada" name="cantidad_seleccionada" class="form-control" placeholder="Cantidad" min="0" max="10">
                    </div>
                    <button type="submit" class="btn btn-primary">Jugar</button>
                </form>
               <?php
class Suerte{

    #creando atributos
    public $numeroJugando;
    public $cantidadJugando;

    #creando constructor
    public function __construct($numeroJugando,$cantidadJugando){
        $this -> numeroJugando = $numeroJugando;
        $this -> cantidadJugando = $cantidadJugando;
    }

    #creando metodo
    public function jugar(){
        #se crea un numero aleatorio y se almacena en numeroAzar
        $numeroAzar = rand(0,100);
        #se crea un diccionario con los premios

        $tablaPrecios = array(
            1 => 70,
            2 => 140,
            3 => 210,
            4 => 280,
            5 => 350,
            6 => 420,
            7 => 490,
            8 => 560,
            9 => 630,
            10 => 700
        );

        $premio = $tablaPrecios[$this -> cantidadJugando];

        if($this -> numeroJugando  == $numeroAzar){
            echo "HAZ GANADO {$premio} !!! ";
        }
        else{
            echo "HAZ PERDIDO $ {$this -> cantidadJugando} suerte a la proxima";
        }
    }
}

if(isset($_POST['numero_seleccionado'], $_POST['cantidad_seleccionada'])){
    $luck = new Suerte($_POST['numero_seleccionado'], $_POST['cantidad_seleccionada']);
    $luck -> jugar();
}
?>

                
            </div
