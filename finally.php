<?php
$arq = fopen("erro.txt","w");

try {
    fwrite($arq,'esscrasdasdkasfafs');


}catch (throwable){
echo "CAIU NO CATCH ".PHP_EOL;
} finally {
    fclose($arq);
}
function a():int{
    try {
        echo "try";
        return 0;

    }catch (Exception){
        echo "Exception";
        return 1;
    } finally{
        echo "final da funcao";
    }



}