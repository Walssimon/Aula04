<?php

    use Aplicacao as GlobalAplicacao;

    class Aplicacao{
        //metodo estatico lê o arquivo readme.txt
        static function sobre(){
            $fd = fopen('readme.txt','r');

            while($linha = fgets($fd,200)){

                echo $linha;
            }

        }
}

    echo "Informação da aplicação: <br>";
    echo "=========================<br>";
    GlobalAplicacao::sobre();

?>