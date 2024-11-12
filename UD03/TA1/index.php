<?php
    if(isset($_COOKIE['visitas'])){
        setcookie("visitas",$_COOKIE['visitas']+1, time()+60*60*24*2);
        if(isset($_POST['borrar'])){
            setcookie("visitas",$_COOKIE['visitas'], time()-60);
        }     
    }
    else {
        setcookie("visitas",01, time()+60*60*24*2);
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            if(isset($_COOKIE['visitas'])){ 
                echo ("Número de visitas: ".$_COOKIE['visitas']);}
        ?>
    </p>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <button name="borrar">Eliminar cookies</button>
    </form>
</body>
</html>