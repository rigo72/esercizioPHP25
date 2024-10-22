<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n1 = $_GET["primo_numero"];
        $n2 = $_GET["secondo_numero"];
        $listaNumeri = array("numero1" => $n1, "numero2" => $n2);
        if($n1 == null){
            echo "<p style='color:red;'>Errore: almeno uno dei due numeri è vuoto</p> <a href='numeri.html'>Torna indietro</a>";
        }elseif($n2 == null){
            echo "<p style='color:red;'>Errore: almeno uno dei due numeri è vuoto</p> <a href='numeri.html'>Torna indietro</a>";
        }else{
            foreach($listaNumeri as $value){
                echo "Valore: {$value}<br>";
            }
        }
        intval($n1);
        intval($n2);
    ?>
</body>
</html>