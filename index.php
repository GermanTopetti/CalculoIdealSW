<?php
function convergente(){
    echo "convergente <br>";
    for($var=1;$var<=50;$var++ ) {
			$arriba=2*$var;
			$abajo=($var*$var)+1;
			$resultado=$arriba/$abajo;
			echo " a$var = $resultado <br>";
    }}
    function divergente(){
        echo "esta es divergente <br>";
        for($i=1;$i<=50;$i++ ) {
			 $arriba=$i*$i;
			$abajo=$i+1;
			$resultado=$arriba/$abajo;
			echo " a$i = $resultado <br>";
		}
    }
    function oscilante(){
        echo "esta es oscilante <br>";
        for($i=1;$i<=50;$i++ ) {
            
			 $arriba=pow(-1, $i);
			$resultado=$arriba*0.5;
		
			echo "a$i = $resultado <br>";
		}
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sucesiones</title>
</head>
<body>
    <section>
        <?php divergente() ?>
        <img src="divergente.png" alt="">
    </section>
    <section>
        <?php convergente() ?>
        <img src="convergente.png" alt="">
    </section>
    <section>
        <?php oscilante() ?>
        <img src="oscilante.png" alt="">
    </section>
</body>
</html>