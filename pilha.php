<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2();

    }catch (throwable $erro){
        echo "aconteceu um erro na funcao ".PHP_EOL. $erro->getMessage().PHP_EOL;
        echo $erro->getTraceAsString().PHP_EOL;
        echo $erro->getLine().PHP_EOL;
       // throw new RuntimeException("exceção tratada, mas pega ai ",$erro->getCode(),$erro);
    }



    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

   throw new RuntimeException();
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();

echo 'Finalizando o programa principal' . PHP_EOL;
