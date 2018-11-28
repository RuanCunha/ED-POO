<?php

////// QUESTÃO 8 ///////

    require __DIR__."/../models/Funcionario.php";
    require __DIR__."/../models/Data.php";


//Testes a fim de usar os métodos
    
    $jose = new Funcionario();

    $jose->departamento= "Recepção";
    $jose->salario = 2000;

    $data = new Data(30, 3, 2005);



    $jose->dataEntrada = $data;
    $jose->cpf = "014.418.490-76";
    $jose->recebeAumento();

    print $jose;



//    $milena = new Funcionario();
//    $milena->departamento= "Telemarketing";
//    $milena->salario = 4000;
//    $milena->dataEntrada = "26/07/2013";
//    $milena->cpf = "799.938.760-62";
//
//    $milena->recebeAumento();
//
//    //echo $milena->calculoGanhoAnual();
//
//    echo $milena->mostra();