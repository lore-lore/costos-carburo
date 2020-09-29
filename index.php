<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Costos carburo de calcio</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head>

<?php 
    //se hace la conexion a la base de datos
    include('modulos/conexion.php');
    $connection = Conectarse();
?>

<body>

    <form action="/my-handling-form-page" method="post">
        <label style="align-content: left;" for="fecha">Fecha: <?php echo date('j-n-Y'); ?></label>

        
    <div>
        <label for="cambio"> Tipo de cambio: </label> 
        <input type="number" name="cambio" size="1" placeholder="$0.00">

        <label for="costo">Costo de producción: </label> 
        <input type="number" name="costo" size="1" placeholder="$0.00" >
    </div>
    <div>
        <label>Presentacion de bote:</label>
        <select name='bote'>  
            <?php
            $result=mysqli_query($connection,"SELECT * FROM bote") or die (mysql_error());
            while ($row=mysqli_fetch_array($result)) {  
            ?>
            <option value="<?php print $row['id_bote'];?>"><?php print $row['presentacion']; ?> 
            </option>  
            <?php } ?>
            </select>
            
            <label>Bolson de rafia:</label>
            
            <select name='bolson'>  
            <?php
            $result=mysqli_query($connection,"SELECT * FROM bolson") or die (mysql_error());
            while ($row=mysqli_fetch_array($result)) {  
            ?>
            <option value="<?php print $row['id_bolson'];?>"><?php print $row['presentacion']; ?> 
            </option>  
            <?php } ?>
        </select>
    </div>
    <div>
        <label>Tarima estufada exportacion:</label>
        
        <select name='tarima'>  
        <?php
            $result=mysqli_query($connection,"SELECT * FROM tarima") or die (mysql_error());
            while ($row=mysqli_fetch_array($result)) {  
            ?>
            <option value="<?php print $row['id_tarima'];?>"><?php print $row['tipo']; ?> 
            </option>  
            <?php } ?>
            </select>
            
            <label>Bolsa de plastico para envasado:</label>
            
            <select name='bolsa'>  
            <?php
            $result=mysqli_query($connection,"SELECT * FROM bolsa_env") or die (mysql_error());
            while ($row=mysqli_fetch_array($result)) {  
            ?>
            <option value="<?php print $row['id_bolsa'];?>"><?php print $row['kilogramos']; ?> 
            </option>  
        <?php } ?>
        </select>
        
    </div>
    
    
    <div class="button">    esto es la ñprueb
        <button type="submit">Send your message</button>
    </div>
</form>
</body>
</html>

