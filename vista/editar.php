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
<body>
<h6 class="text-center">EDITAR USUARIO</h6><br>
<form action="" method="get">
    <?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>
        <div class="mb-3">
    <label for="#" class="form-label">Actualizar Documento</label>
    <input type="text" class="form-control" value="<?php echo $v['documento'] ?>" name="documento" id="#" aria-describedby="#">
        <div class="mb-3">
    <label for="#" class="form-label">Actualizar Nombre</label>
    <input type="text" class="form-control" value="<?php echo $v['nombre'] ?>" name="nombre" id="#" aria-describedby="#">
        </div>


  <div class="mb-3">
    <label for="#" class="form-label">Actualizar el precio</label>
    <input type="text" class="form-control" value="<?php echo $v['precio'] ?>" name="precio" id="#" aria-describedby="#">
      
    <input type="hidden" value="<?php echo $v['id'] ?>" name="id"> <br>
    <input type="submit" class="btn" name="btn" value="ACTUALIZAR"> <br>
    <input type="hidden" name="m" value="actualizar">
        <?php
        endforeach;
    endforeach;
    ?>
</form>

<?php require_once("layouts/footer.php");?>
</body>
</html>
