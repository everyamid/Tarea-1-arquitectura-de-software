<?php
require_once("layouts/header.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>

<h6 class="text-center">NUEVO USUARIO</h6>

<form action="" method="get">
  
  <div class="mb-3">
     <i class="fa-solid fa-hashtag"></i>
    <label for="exampleInputEmail1" class="form-label">Ingrese el Documento Del Usuario</label>
    <input type="text" class="form-control" name="documento" id="exampleInputEmail1" aria-describedby="emailHelp">
     
  </div>
  <div class="mb-3">
    <i class="fa-solid fa-user"></i>
    <label for="exampleInputEmail1" class="form-label">Ingrese el Nombre Del Usuario</label>
    <input type="text" class="form-control" name="nombre" id="exampleInputEmail1" aria-describedby="emailHelp">
     
  </div>

  <div class="mb-3">
    <i class="fa-solid fa-sack-dollar"></i>
    <label for="exampleInputEmail1" class="form-label">Ingrese el precio A pagar</label>
    <input type="text" class="form-control" name="precio" id="exampleInputEmail1" aria-describedby="emailHelp">
     
  </div>
 
    <input type="submit" class="btn" name="btn" value="GUARDAR"> <br>
    <input type="hidden" name="m" value="guardar">
</form>

<?php require_once("layouts/footer.php");?>
</body>
</html>


