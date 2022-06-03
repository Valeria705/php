<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taller 1</title>
</head>
<body>
    <h1>Punto 1</h1>
    <form method="get">
        <label>Digite su salario</label> </br></br>
        <input type="text" name="salario" placeholder="No ponga puntos de separacion"/></br></br>
        <button type="submit">Enviar</button>
    </form>
</br>
    <?php
        if(isset($_GET["salario"])){
            $salario= $_GET["salario"];
            $salud= $salario*0.8;
            $pension= $salario*0.8;
            $neto= ($salud+$pension)-$salario;
            echo "<p> Descuento Salud es: " . $salud . "</p>";
            echo "<p> Descuento pension es: " . $pension . "</p>";
            echo "<p> Su salario es:" . $salario . "</p>";
            echo "<p> Su salario con descuento es: " . $neto . "</p>";
            echo $salario;
        }
        
    ?>
     <h1>Punto 2</h1>
    <form method="get">
        <label>Digite datos del triangulo</label> </br></br>
        <input type="number" name="base" placeholder="Digite base"/></br></br>
        <input type="number" name="altura" placeholder="Digite altura"/></br></br>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if(isset($_GET["base"])){
        $base=$_GET["base"];
        $altura=$_GET["altura"];

        $area=($base*$altura)/2;
        echo "<p> Base: " . $base . "</p>";
        echo "<p> Altura: " . $altura . "</p>";
        echo "<p> Area: " . $area . "</p>";


    }
    ?>
     <h1>Punto 3</h1>
    <form method="get">
        <label>Digite datos del triangulo</label> </br></br>
        <input type="number" name="uno" placeholder="Digite numero 1"/></br></br>
        <input type="number" name="dos" placeholder="Digite numero 2"/></br></br>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if(isset($_GET["uno"])){
        $uno=$_GET["uno"];
        $dos=$_GET["dos"];

        $suma= ($uno+$dos);
        $resta= $uno-$dos;
        $multiplicacion=$uno*$dos;
        $division=$uno/$dos;
        $modulo=$uno%$dos;

        echo "<p> Suma: " . $suma . "</p>";
        echo "<p> Resta: " . $resta . "</p>";
        echo "<p> Multiplicacion: " . $multiplicacion . "</p>";
        echo "<p> Division: " . $division . "</p>";
        echo "<p> Modulo: " . $modulo . "</p>";
        


    }
    ?>
    <h1>Punto 4</h1>
    <form method="get">
        <label>Digite numero </label> </br></br>
        <input type="number" name="num" placeholder="Digite numero 1"/></br></br>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if(isset($_GET["num"])){
        $num=$_GET["num"];
        if($num%2==0){
            echo "<p> " . $num . " Es par</p>";

        }else{
            echo "<p> " . $num . " No es par</p>";
        }
        if($num<0){
            echo "<p> " . $num . " Es negativo</p>";

        }else{
            echo "<p> " . $num . " Positivo</p>";
        }


    }
    ?>
     <h1>Punto 5</h1>
    <form method="get">
        <label>Digite numeros</label> </br></br>
        <input type="number" name="uno" placeholder="Digite numero 1"/></br></br>
        <input type="number" name="dos" placeholder="Digite numero 2"/></br></br>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if(isset($_GET["uno"])){
        $uno=$_GET["uno"];
        $dos=$_GET["dos"];

        if($uno>$dos){
            echo "<p> " . $uno . " Es mayor </p>";

        }else{
            echo "<p> " . $dos . " Es mayor </p>";
        }
        if($uno==$dos){
            echo "<p> " . $dos . " y ". $uno ." son iguales </p>";

        }
     
    }
    ?>
    








</body>
</html>