<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Costos carburo de calcio</title>
  </head>

  <?php 
    //se hace la conexion a la base de datos
    include('modulos/conexion.php');
    $connection = Conectarse();
  ?>

  <body>
    <form action="/my-handling-form-page" method="post" oninput="resultado.value=parseFloat(costo.value)+parseFloat(cambio.value)+parseFloat(bote.value)+parseFloat(bolson.value)+parseFloat(bolsa.value)+parseFloat(tarima1.value)+parseFloat(tarima2.value)+parseFloat(tarima3.value)">

    <div class="container p-3 mb-2 bg-light text-dark">
    <div class="form-group ">
      <div class="row h-50 p-3 " >
        <div class="col-11 d-flex flex-row-reverse" >
          <input type="date" name="fecha" value="dd-mm-aaaa" >etoy en pruebs
          <label>Fecha:</label>
        </div>
      </div>
      <--------------------------------------------------------------------------------------->
      <div class="row h-50 p-3">
        <div class="col-4">
            <label for="cambio"> Tipo de cambio: </label> 
        </div>
        <div class="col-2">
            <input class="form-control form-control-lg" type="text" name="cambio" placeholder="$0.00">
        </div>
      <!--</div>
       <div class="row h-50 p-3"> -->
        <div class="col-4">
            <label for="costo">Costo de producción: </label> 
        </div>
        <div class="col-2">
            <input class="form-control form-control-lg" type="text" name="costo" placeholder="$0.00" >
        </div>
      </div>
      <!--------------------------------------------------------------------------------------->
      <div class="row h-50 p-3">
        <div class="col-4">
          <label>Presentacion de bote:</label>
        </div>
        <div class="col-2">
          <select name='bote' class="form-control form-control-lg">  
            <?php
            $result=mysqli_query($connection,"SELECT * FROM bote") or die (mysql_error());
            while ($row=mysqli_fetch_array($result)) {  
            ?>
            <option value="<?php print $row['precio'];?>"><?php print $row['presentacion']; ?> 
            </option>  
            <?php } ?>
          </select>
        </div>
        <div class="col-2">
            <input class="form-control form-control-lg" type="text" name="costo" placeholder="$0.00" >
        </div>
        <div class="col-2">
            <input type="button" class="btn btn-success btn-lg btn-block" value="Nuevo">
        </div>
        <div class="col-2">
            <input type="button" class="btn btn-danger btn-lg btn-block" value="Eliminar">
        </div>
      </div>
      <!--------------------------------------------------------------------------------------->
      <div class="row h-50 p-3">
        <div class="col-4">
          <label>Bolson de rafia:</label>
        </div>
        <div class="col-3">
          <select name='bolson' class="form-control form-control-lg">  
            <?php
            $result=mysqli_query($connection,"SELECT * FROM bolson") or die (mysql_error());
            while ($row=mysqli_fetch_array($result)) {  
            ?>
            <option value="<?php print $row['precio'];?>"><?php print $row['presentacion']; ?> 
            </option>  
            <?php } ?>
          </select>
        </div>
        <div class="col-2">
            <input class="form-control form-control-lg" type="text" name="costo" placeholder="$0.00" >
        </div>
      </div>
      <!--------------------------------------------------------------------------------------->
      <div class="row h-25 p-3">
        <div class="col-4">
          <label>Tarima estufada:</label>
        </div>

        <?php
        $result1=mysqli_query($connection,"SELECT * FROM tarima where id_tarima = 1") or die (mysql_error());
        $result2=mysqli_query($connection,"SELECT * FROM tarima where id_tarima = 2") or die (mysql_error());
        $result3=mysqli_query($connection,"SELECT * FROM tarima where id_tarima = 3") or die (mysql_error());
        $row1=mysqli_fetch_array($result1);
        $row2=mysqli_fetch_array($result2);
        $row3=mysqli_fetch_array($result3);
        ?>

        <div class="col-3">
          <div class="input-group ">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <input name="tarima1" type="checkbox" value="<?php print $row1['precio'];?>" >
              </div>
            </div>
            <label class="form-control form-control-lg"><?php print $row1['tipo']; ?></label>
          </div>
        </div>
      </div>

      <div class="row h-25 p-3">
        <div class="col">
          <div class="input-group ">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <input name="tarima2" type="checkbox" value="<?php print $row2['precio'];?>" >
              </div>
            </div>
            <label class="form-control form-control-lg"><?php print $row2['tipo']; ?></label>
          </div>
        </div>

        <div class="col">
          <div class="input-group ">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <input name="tarima3" type="checkbox" value="<?php print $row3['precio'];?>" >
              </div>
            </div>
            <label class="form-control form-control-lg"><?php print $row3['tipo']; ?></label>
          </div>
        </div>
      </div>
      <!--------------------------------------------------------------------------------------->
      <div class="row h-50 p-3">
        <div class="col-4">
          <label>Bolsa de envasado:</label>
        </div>
        <div class="col-3">
          <select name='bolsa' class="form-control form-control-lg">  
            <?php
            $result=mysqli_query($connection,"SELECT * FROM bolsa_env") or die (mysql_error());
            while ($row=mysqli_fetch_array($result)) {  
            ?>
            <option value="<?php print $row['precio'];?>"><?php print $row['kilogramos']; ?> 
            </option>  
            <?php } ?>
          </select>
        </div>
      </div>
      <!--------------------------------------------------------------------------------------->
      <div class="row h-50 p-3">
        <div class="col-8 d-flex flex-row-reverse">
          <label>Total:</label>
        </div>
        <div class="col-3">
          <output class="form-control form-control-lg" name="resultado" for="costo cambio tarima bote bolson bolsa"></output>
        </form>
            
        </div>
      </div>

    </div>
    </div>

    <!--------------------------------------------------------------------------------------->
    <div class="container p-3 mb-2 bg-light text-dark">
    <div class="form-group ">
      <div class="row h-50 p-3">
        <div class="col-4">
          <label>Flete terrestre:</label>
        </div>
        <div class="col-3">
          <select name='bolsa' class="form-control form-control-lg">  
            <?php
            $result=mysqli_query($connection,"SELECT * FROM bolsa_env") or die (mysql_error());
            while ($row=mysqli_fetch_array($result)) {  
            ?>
            <option value="<?php print $row['id_bolsa'];?>"><?php print $row['kilogramos']; ?> 
            </option>  
            <?php } ?>
          </select>
        </div>
      </div>
      <!--------------------------------------------------------------------------------------->
      <div class="row h-50 p-3">
        <div class="col-4">
          <label>Agente aduanal:</label>
        </div>
        <div class="col-3">
          <input type="text" name="aduana" class="form-control form-control-lg" placeholder="$0.00">
        </div>
      </div>

    </div>
    </div>

  </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
