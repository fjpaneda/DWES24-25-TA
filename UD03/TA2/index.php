<?php

    define("USUARIOS", 
    array(
        array("nombre"=>"1","pass"=>"1234"), 
        array("nombre"=>"2","pass"=>"5678")
    ));

    session_start();
    if (isset($_POST['user']) && isset($_POST['pass'])){
        //comprobar usuario
    }

    function usuario_valido(){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        foreach(USUARIOS as $usuario){
            if($user == $usuario['nombre'] && $pass == $usuario['pass']){
                return true;
            }
        }
        return false;
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea de aprendizaje 2 UD3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <fieldset>
                <legend>Usuario:</legend>
                <label for="user" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="user">
                <br>
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" id="pass">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
        </form>
    </div>
    
</body>
</html>