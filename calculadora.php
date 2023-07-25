<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
 
  <title>Beauty_Cosmetics</title>
</head>
<body>
<?php 
require ('Components/navbar.php')
?>

<main>

<div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-body">
                        <form action= "calculadora.php" method="post">
                            <div class="form-group mt-3">
                                <label for="">Operación</label>
                                <select name="operacion" id="" class=form-select required>
                                <option value=""  disabled selected>Seleccione operación</option>
                                <option value="suma">Suma</option>
                                <option value="resta">Resta</option>
                                <option value="multiplicacion">Multiplicación</option>
                                <option value="division">División</option>
                                </select>
                             </div>
                             <div class="form-group mt-3">
                                <label for="">Número 1</label>
                                <input type="text" name="numero_1" class="form-control" required>
                             </div>
                             <div class="form-group mt-3">
                                <label for="">Número 2</label>
                                <input type="text" name="numero_2" class="form-control" required>
                             </div>
                             <button class="btn text-white w-100 mt-3" style='background-color:#f8bbd0;'>Operar</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</main>
<?php
if(isset($_POST["numero_1"]) && isset($_POST["numero_2"]) && isset($_POST["operacion"])) {

  $numero_1 = $_POST['numero_1'];
  $numero_2 = $_POST['numero_2'];
  $operacion = $_POST['operacion'];
  
  if($operacion == 'suma'){
    $resultado = $numero_1 + $numero_2;
  }
if($operacion == 'resta'){
    $resultado = $numero_1 - $numero_2;
  }
if($operacion == 'multiplicacion'){
    $resultado = $numero_1 * $numero_2;
  }
if($operacion == 'division'){
    $resultado = $numero_1 / $numero_2;
  }
  print "<div class='container text-white mt-2 justify-content-center w-25' style='background-color:#f8bbd0;'<div class=''>El resultado es: $resultado</div></div>";
   
  }
   
?>
<?php 
require ('Components/footer.php')
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>