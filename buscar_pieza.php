<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
      <h2> Registra una pieza! </h2>
      <form action="/action_page.php">
        <div class="form-group">
          <label for="text">Marca del auto</label>
          <input type="text" class="form-control" id="email" placeholder="Ingrese marca" name="email">
        </div>
        <div class="form-group">
          <label for="text">Modelo del auto</label>
          <input type="text" class="form-control" id="email" placeholder="Ingrese modelo" name="email">
        </div>
        <div class="form-group">
          <label for="text">Nombre de la pieza:</label>
          <input type="text" class="form-control" id="email" placeholder="Ingrese pieza" name="email">
        </div>
        <div class="form-group">
          <label for="pwd">Numero de serie de la pieza:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Ingrese #" name="pwd">
        </div>
        <div class="form-group">
          <label for="pwd">Descripcion de la pieza:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Ingrese descripcion" name="pwd">
        </div>
        <div class="form-group">
          <label for="pwd">Precio de venta:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Ingrese precio" name="pwd">
        </div>
        <div class="form-group">
          <label for="pwd">Cantidad de la pieza:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Ingrese cantidad" name="pwd">
        </div>
        <div class="form-group">
          <label for="pwd">Año de fabricación:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Ingrese año" name="pwd">
        </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Recordar</label>
    </div>
    <button type="submit" class="btn btn-default">Registrar!</button>
  </form>
</div>

</body>
</html>
