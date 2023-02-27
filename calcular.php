<?php
include 'calculadora.php';

/* Calculadora de Farme */
/* ###  Inputs do formulário  ### */
// Farm
@$quantidadeFarm = $_POST['farm'];
@$valorArma = $_POST['preco'];
@$quantidadeArmas = $_POST['quantidade'];
class Calculadora
{
    public function Farm(){

        if(isset($_POST['calcularFarm'])){
         
            $quantiaTotal =   $_POST['farm'] * $_POST['quantidade'];
            echo $quantiaTotal;
        }



    }
    public function Venda(){  
        if(isset($_POST['calcularVenda'])){
         
            $ValorTotal =   $_POST['preco'] * $_POST['quantidade'];
            echo $ValorTotal;
        }

      }
    
}

// declarando o objeto
$calcularFarm = new Calculadora();

//instanciando a função e acionando tudo dentro dela
$calcularFarm ->Farm();


?>