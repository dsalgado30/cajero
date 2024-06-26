<?php
do {
    echo "\n---opciones---\n";
    echo "1. Consultar saldo \n";
    echo "2. Consignar dinero \n";
    echo "3. Retirar dinero \n";
    echo "4. Salir\n";

    $opcion= readline ("Seleccione una opcion: \n");

    if ($opcion=="1"){
        $contrasena= readline ("Digite su contraseña: ");
    } elseif ($opcion=="2"){
        $identificacion = readline ("ingrese su identificacion de usuario: ");
        $numero= readline ("Digite el numero de cuenta: ");
        $cantidad = readline ("Digite el monto a enviar: ");
    } elseif ($opcion =="3"){
        $identificacion=readline ("Ingrese su identificaciopn de usuario: ");
        $monto= readline ("Ingrese el valor que desea retirar: ");
        $contrasena= readline ("Digite su contraseña: ");
    }elseif ($opcion == "4"){
        echo "ejecucion terminada \n";
    }else {
        echo "opcion incorrecta, seleccione una opcion valida";
    }
}while ($opcion != 4);
