<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ropa</title>
</head>
<body>
    <header>
      <button type="submit"><a href="index.html">Inicio</a></button>
      <button type="submit"><a href="listar.php">Toda la ropa</a></button>
      <button type="submit"><a href="listar_buzo.php">Buzos</a></button>
      <button type="submit"><a href="listar_Nike.php">Ropa Nike</a></button>
      <button type="submit"><a href="listar_mayor.php">mayor a $500</a></button>
    </header>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
    </tr>
    <?php
    // 1) Conexion
    $conexion=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($conexion,"tienda_ropa");

    // 2) Preparar la orden SQL
    // Sintaxis SQL SELECT
    // SELECT * FROM nombre_tabla
    // => Selecciona todos los campos de la siguiente tabla
    // SELECT campos_tabla FROM nombre_tabla
    // => Selecciona los siguientes campos de la siguiente tabla
    $consulta= "SELECT*FROM ropa";


    // 3) Ejecutar la orden y obtenemos los registros
    $datos= mysqli_query ($conexion, $consulta);
    // 4) Mostrar los datos del registro
    while ( $reg = mysqli_fetch_array($datos) ) { ?>
        <tr>
        <td><?php echo $reg['id']; ?></td>
        <td><?php echo $reg['tipo_prenda']; ?></td>
        <td><?php echo $reg['marca']; ?></td>
        <td><?php echo $reg['talle']; ?></td>
        <td><?php echo $reg['precio']; ?></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>
