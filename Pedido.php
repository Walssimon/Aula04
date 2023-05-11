<?php 
    class pedido{
        private $NroPedido;
        private $datpedido;

        function ImprimeComanda()
        {
            print 'Pedido: '. $this->NroPedido .' feito as '.$this-> datpedido ."<br>";
        }

    }

?>