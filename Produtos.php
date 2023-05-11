<?php 

    class produtos{
        private $DesPro;
        private $QtdeProduto;
        private $ValProduto;

        function ImprimeEtiqueta()
        {
            print 'Descrição: '. $this->DesPro . "<br>";
            print 'Quantidade: '.$this->QtdeProduto ."<br>";
            print 'Valor: '.$this->ValProduto ."<br><br>";
        }
    }

?>