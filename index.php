<?php
    function menu(){
        echo("Ejecicio 1: Calculadora\n");
        echo("Ejecicio 2: Comparación de edad\n");
        echo("Ejecicio 3: Juego\n");
        echo("Elige el ejercicio que quiere hacer: \n");
        fscanf(STDIN, "%d", $ejercicio);
        switch ($ejercicio) {
            case 1:
                ejercicio1();
                break;
            case 2:
                ejercicio2();
                break;
            case 3:
                ejercicio3();
                break;
            default:
            echo("Has introducido un dato erroneo. Hasta la próxima.\n");
            break;
        }
    }

    function ejercicio1(){
        echo("\nCalculadora de Variables y Operadores\n");
        echo("Introduce el primer número\n");
        $numero1 = fgets(STDIN);
        //fscanf(STDIN, "%d", $numero1);
        echo("Introduce el segundo número\n");
        //fscanf(STDIN,"%d",$numero2);
        $numero2 = fgets(STDIN);
        
        $suma = $numero1 + $numero2;
        echo("La suma de los dos números es: $suma\n");
        var_dump($suma);
        echo("La suma de los dos números es: "), var_dump($suma), "\n";
        
        $resta = $numero1 - $numero2;
        echo("La resta de los dos números es: $resta\n");
        echo gettype($resta), "\n";
        
        $multiplica = $numero1 * $numero2;
        if (isset($multiplica)){
            echo("La variable para multiplicar está definida.\nLa multiplicación de los dos números es: $multiplica\n");
        } else {
            echo("La variable no está definida.\n");
        }
        
        
        $divi = $numero1 / $numero2;
        print_r("La división de los dos números es: $divi\n");
        
    }

    function ejercicio2(){
        echo("\nComparación de Edad\n");
        echo("Introduce la edad de la primera persona; \n");
        fscanf(STDIN, "%s", $persona1);
        echo("Introduce la edad de la segunda persona; \n");
        fscanf(STDIN, "%s", $persona2);
        echo("Introduce la edad de la tercera persona; \n");
        fscanf(STDIN, "%s", $persona3);

        if ($persona1 > $persona2 && $persona1 > $persona3) {
            echo("La persona 1 es la de mayor edad $persona1 \n");
        }
        elseif($persona2 > $persona3){
            echo("La persona 2 es la de mayor edad $persona2 \n");
        }
        else {
            echo("La persona 3 es la de mayor edad $persona3 \n");
        }


    }

    function ejercicio3(){
        $numero_aleatorio = rand(1,10);
        echo $numero_aleatorio, "\n";
        $intentos = 0;
        do {
            echo ("Introduce un número entre el 1 y el 10: \n");
            fscanf(STDIN, "%d", $numero_introducido);
            $no_iguales = ($numero_introducido != $numero_aleatorio);
            if ($no_iguales){
                $mayor = $numero_introducido > $numero_aleatorio;
                switch ($mayor) {
                    case 'True':
                        echo("El número que has introducido es mayor al que buscas.\n");
                        break;
                    
                    default:
                    echo("El número que has introducido es menor al que buscas.\n");
                        break;
                }

            }
            
            $intentos ++;
        } while ($no_iguales);

        echo("Has necesitado $intentos intentos para acertar el número\n");
        
        
    }

    menu();
?>