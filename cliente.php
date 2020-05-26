<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
   <div class="container">  
        <h1>Calculadora 2</h1>
    <form method="get" action="cliente.php" name="calculadora">
        <label>Introduzca el primer numero </label> <br>
        <input  type="text" name="a" placeholder="Numero 1"> <br><br>
        <label>Introduzca el segundo numero: </label> <br>
        <input type="text" name="b" placeholder="Numero 2"> <br><br>
        <label>Operacion:</label><br>
                <select name="action">
               <option value="suma">Sumar</option> 
               <option value="multiplicacion">Multiplicar</option>  
               <option value="resta">Restar</option> 
               <option value="divicion">Divicion</option>  
            
        </select>
            <br> <br>
        <input  type="submit" value="Calcular">

               
    </form>
    <?php
    if (isset($_GET["action"]) && $_GET["action"] == "suma"){
        $calculadora = file_get_contents('http://localhost/calculadora2/servicio.php?action=suma&a=' .$_GET["a"]. '&b=' .$_GET["b"]);
        $calculadora = json_decode($calculadora, true);
        ?>
        <h1>SUMA </h1>
        <table>
            <tr>
                <td>Primer numero: </td><td><?php echo $calculadora["a"] ?></td>
            </tr>
            <tr>
                <td>Segundo numero: </td><td><?php echo $calculadora["b"] ?></td>
            </tr>
            <tr>
                <td>  <h3> Total: <?php echo$calculadora["total"]?></h3></td>
            </tr>
        </table>
        <?php
    }
    if (isset($_GET["action"]) && $_GET["action"] == "multiplicacion"){
        $calculadora = file_get_contents('http://localhost/calculadora2/servicio.php?action=multiplicacion&a=' .$_GET["a"]. '&b=' .$_GET["b"]);
        $calculadora = json_decode($calculadora, true);
        ?>
        <h1>MULTIPLICACION </h1>
        <table>
            <tr>
                <td>Primer numero: </td><td><?php echo $calculadora["a"] ?></td>
            </tr>
            <tr>
                <td>Segundo numero: </td><td><?php echo $calculadora["b"] ?></td>
            </tr>
            <tr>
            <td> <h3> Total:  <?php echo$calculadora["total"]?></h3></td>
            </tr>
        </table>
        <?php
        }
        if (isset($_GET["action"]) && $_GET["action"] == "resta"){
            $calculadora = file_get_contents('http://localhost/calculadora2/servicio.php?action=resta&a=' .$_GET["a"]. '&b=' .$_GET["b"]);
            $calculadora = json_decode($calculadora, true);
            ?>
            <h1>RESTA </h1>
            <table>
                <tr>
                    <td>Primer numero: </td><td><?php echo $calculadora["a"] ?></td>
                </tr>
                <tr>
                    <td>Segundo numero: </td><td><?php echo $calculadora["b"] ?></td>
                </tr>
                <tr>
                <td> <h3> Total:  <?php echo$calculadora["total"]?></h3></td>
                </tr>
            </table>
            <?php
            }
            if (isset($_GET["action"]) && $_GET["action"] == "divicion"){
                $calculadora = file_get_contents('http://localhost/calculadora2/servicio.php?action=divicion&a=' .$_GET["a"]. '&b=' .$_GET["b"]);
                $calculadora = json_decode($calculadora, true);
                ?>
                <h1>DIVICION </h1>
                <table>
                    <tr>
                        <td>Primer numero: </td><td><?php echo $calculadora["a"] ?></td>
                    </tr>
                    <tr>
                        <td>Segundo numero: </td><td><?php echo $calculadora["b"] ?></td>
                    </tr>
                    <tr>
                    <td> <h3> Total:  <?php echo$calculadora["total"]?></h3></td>
                    </tr>
                </table>
                <?php
                }
    ?>
   
      
</div>
</body>
</html>