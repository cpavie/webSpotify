<!DOCTYPE html>
<html lang="en">
<?php require_once '../modelo/conexion.php'; ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://code.jquery.com/jquery-3.3.1.min.js">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container">
      <h2 class="well text-center">Sistema de Pagos Spotify</h2>
      <form action="?" method="post">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Mes</label>
          </div>
            <select class="custom-select" id="inputGroupSelect01" name="mes">
              <option selected>...</option>
              <option value="1">Septiembre</option>
              <option value="2">Octubre</option>
              <option value="3">Noviembre</option>
              <option value="4">Diciembre</option>
              <option value="5">Enero</option>
              <option value="6">Febrero</option>
            </select>
            <input type="submit" name="enviar" value="Consultar" class="btn btn-primary">
          </div>
      </form>
          <?php
          if (isset($_POST['enviar'])) {
            $mes = $_POST['mes'];
            if ($_POST['mes'] == $mes){

                $consulta2 = "SELECT * FROM mes WHERE id= '$mes'";
                $resultado2 = mysqli_query($conexion,$consulta2) or die("Algo ha ido mal en la consulta a la base de datos");
                $row = mysqli_fetch_array($resultado2);
                $mesecho = $row['nombre_mes'];
                if ($row['mati'] == '1') {
                  $res = '<div class="container">
                    <label for="">Mati</label>
                    <div class="form-check-inline">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="pagomati" value="1" checked>Si
                      </label>
                    </div>
                    <div class="form-check-inline">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="pagomati" value="0">No
                      </label>
                    </div>
                  </div>';
                }
                else {
                  $res = '<div class="container">
                    <label for="">Mati</label>
                    <div class="form-check-inline">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="pagomati" value="1">Si
                      </label>
                    </div>
                    <div class="form-check-inline">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="pagomati" value="0" checked>No
                      </label>
                    </div>
                  </div>';
                }
               if ($row['chino'] == '1') {
                 $res2 = '<div class="container">
                   <label for="">Chino</label>
                   <div class="form-check-inline">
                     <label class="form-check-label">
                       <input type="radio" class="form-check-input" name="pagochino" value="1" checked>Si
                     </label>
                   </div>
                   <div class="form-check-inline">
                     <label class="form-check-label">
                       <input type="radio" class="form-check-input" name="pagochino" value="0">No
                     </label>
                   </div>
                 </div>';
               }
               else {
                 $res2 = '<div class="container">
                   <label for="">Chino</label>
                   <div class="form-check-inline">
                     <label class="form-check-label">
                       <input type="radio" class="form-check-input" name="pagochino" value="1">Si
                     </label>
                   </div>
                   <div class="form-check-inline">
                     <label class="form-check-label">
                       <input type="radio" class="form-check-input" name="pagochino" value="0" checked>No
                     </label>
                   </div>
                 </div>';
               }
               if ($row['yerko'] == '1') {
                 $res3 = '<div class="container">
                   <label for="">Yerko</label>
                   <div class="form-check-inline">
                     <label class="form-check-label">
                       <input type="radio" class="form-check-input" name="pagoyerko" value="1" checked>Si
                     </label>
                   </div>
                   <div class="form-check-inline">
                     <label class="form-check-label">
                       <input type="radio" class="form-check-input" name="pagoyerko" value="0">No
                     </label>
                   </div>
                 </div>';
               }
               else {
                 $res3 = '<div class="container">
                   <label for="">Yerko</label>
                   <div class="form-check-inline">
                     <label class="form-check-label">
                       <input type="radio" class="form-check-input" name="pagoyerko" value="1">Si
                     </label>
                   </div>
                   <div class="form-check-inline">
                     <label class="form-check-label">
                       <input type="radio" class="form-check-input" name="pagoyerko" value="0" checked>No
                     </label>
                   </div>
                 </div>';
               }
               if ($row['osvaldo'] == '1') {
                 $res4 = '<div class="container">
                   <label for="">Osvaldo</label>
                   <div class="form-check-inline">
                     <label class="form-check-label">
                       <input type="radio" class="form-check-input" name="pagoosvaldo" value="1"checked>Si
                     </label>
                   </div>
                   <div class="form-check-inline">
                     <label class="form-check-label">
                       <input type="radio" class="form-check-input" name="pagoosvaldo" value="0">No
                     </label>
                   </div>
                 </div>';
               }
               else {
                 $res4 = '<div class="container">
                   <label for="">Osvaldo</label>
                   <div class="form-check-inline">
                     <label class="form-check-label">
                       <input type="radio" class="form-check-input" name="pagoosvaldo" value="1">Si
                     </label>
                   </div>
                   <div class="form-check-inline">
                     <label class="form-check-label">
                       <input type="radio" class="form-check-input" name="pagoosvaldo" value="0" checked>No
                     </label>
                   </div>
                 </div>';
               }
               if ($row['pino'] == '1') {
                 $res5 = '<div class="container">
                   <label for="">Pino</label>
                   <div class="form-check-inline">
                     <label class="form-check-label">
                       <input type="radio" class="form-check-input" name="pagopino" value="1" checked>Si
                     </label>
                   </div>
                   <div class="form-check-inline">
                     <label class="form-check-label">
                       <input type="radio" class="form-check-input" name="pagopino" value="0">No
                     </label>
                   </div>
                 </div>';
               }
               else {
                 $res5 = '<div class="container">
                   <label for="">Pino</label>
                   <div class="form-check-inline">
                     <label class="form-check-label">
                       <input type="radio" class="form-check-input" name="pagopino" value="1" >Si
                     </label>
                   </div>
                   <div class="form-check-inline">
                     <label class="form-check-label">
                       <input type="radio" class="form-check-input" name="pagopino" value="0" checked>No
                     </label>
                   </div>
                 </div>';
               }
              echo '<form action="?" method="post">'.$res.''.$res2.''.$res3.''.$res4.''.$res5.'</form>';
            }
          }
           ?>
      <div class="alert alert-info" role="alert">
          <h4 class="alert-heading">Mes seleccionado:</h4>
          <h2 class="text-center" style="Color: red;"><?php if(isset($_POST['enviar']))echo $mesecho ?>.</h2>
      </div>
  </div>
  <div class="container">
    <?php
    $consulta = 'SELECT * from mes';
    $resultado = mysqli_query($conexion,$consulta) or die( "Algo ha ido mal en la consulta a la base de datos");
    echo "<table class='table' borde='2'>";
    echo "<tr>";
    echo "<th>ID Mes</th>";
    echo "<th>Mes</th>";
    echo "<th>MATI</th>";
    echo "<th>CHINO</th>";
    echo "<th>YERKO</th>";
    echo "<th>OSVALDO</th>";
    echo "<th>PINO</th>";
    echo "</tr>";
    while ($columna = mysqli_fetch_array( $resultado ))
    {
      echo "<tr>";
      echo "<td scope='row'>" . $columna['id'] . "</td>
      <td>" . $columna['nombre_mes'] . "</td>
      <td>" . $columna['mati'] . "</td>
      <td>" . $columna['chino'] . "</td>
      <td>" . $columna['yerko'] . "</td>
      <td>" . $columna['osvaldo'] . "</td>
      <td>" . $columna['pino'] . "</td>";
      echo "</tr>";
    }

    echo "</table>";
    ?>
  </div>
</body>
</html>
