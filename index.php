<?php


if(isset($_GET['contabilidade'])){

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

$calcularVenda = new Calculadora();
$calcularVenda->Venda();

# http://contabilidade-gringa.rf.gd/ <-- index

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="10">
    <title>Contabilidade Gringa</title>
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/1060304515506655392/1076250514188140554/e67de437fa559d5ef638a3aaa415f0c0.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>

      body{
        background-color: bisque;

      }

      body img{
        width: 135px;
        margin-left:5%;
      }
      nav a{
        margin-left:5px;
      }

    #Calcular  input .form-control{
        width:100px
      }

      footer{
        padding:2%;
        font-family: Arial, Helvetica, sans-serif;
        font-style: oblique;
      }
      footer a{
        color:blue;

      }

    </style>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img class="img-thumbnail" src="https://cdn.discordapp.com/attachments/1060304515506655392/1076250514188140554/e67de437fa559d5ef638a3aaa415f0c0.png" alt="">

  <div class="container-fluid">

    <a class="navbar-brand" href="http://localhost/Gringa/">
    | GRINGA |
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?contabilidade">Contabilidade</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?eventos">eventos</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="?informes">informes</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="?streamer">streamer</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <main>
      <?php
      include 'calculadora.php';
      ?>
        <table class="table">
        <thead>
          <tr>
            <th scope="col">NOME DAS ARMAS</th>
            <th scope="col">PREÇO</th>
            <th scope="col">QUANTIA FARME</th>
            <th scope="col">TIPO</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">M19</th>
            <td><?php  echo "R$ ".$preco_m19?></td>
            <td><?php  echo $farm_m19?></td>
            <td>PISTOLA</td>
          </tr>
          <tr>
            <th scope="row">FIVE</th>
            <td><?php  echo "R$ ".$preco_five?></td>
            <td><?php  echo $farm_five?></td>
            <td>PISTOLA</td>
          </tr>
          <tr>
            <th scope="row">UZI</th>
            <td><?php  echo "R$ ".$preco_uzi?></td>
            <td><?php  echo $farm_uzi?></td>
            <td>SUBMETRALHADORA</td>
          </tr>
          <tr>
            <th scope="row">AUG</th>
            <td><?php  echo "R$ ".$preco_aug?></td>
            <td><?php  echo $farm_aug?></td>
            <td>FUZIL</td>
          </tr>
          <tr>
            <th scope="row">QBZ</th>
            <td><?php  echo "R$ ".$preco_qbz?></td>
            <td><?php  echo $farm_qbz?></td>
            <td>FUZIL</td>
          </tr>
          <tr>
            <th scope="row">AK-74</th>
            <td><?php  echo "R$ ".$preco_ak?></td>
            <td><?php  echo $farm_ak?></td>
            <td>FUZIL</td>
          </tr>
          <tr>
            <th scope="row">G3</th>
            <td><?php  echo "R$ ".$preco_g3?></td>
            <td><?php  echo $farm_g3?></td>
            <td>FUZIL</td>
          </tr>
        </tbody>
      </table>
<hr>
<hr><hr>
<section id="Calcular">
  <center> 
    
    <strong>
      Calculando Farm <br>
      insira a quantidade de farm que deseja usar e <br> veja quantas armas poderá fazer de cada tipo
    </strong>
    <br>    <br>
    <form method="post" action="">
      <label for="farm">insira a quantia de farme para 1 arma</label><br>
      <input type="text" name="farm" placeholder="30"><br>
      X
      <br><label for="quantidade">Insira a quantidade de armas para craftar</label><br>
      <input type="text" name="quantidade" placeholder="1">
      <br>
      <p></p>
      <br>
      Quantidade Total de Farm necessária é de: <b><?php $calcularFarm ->Farm();?> </b>
      <br>
      <input class="btn btn-primary"  type="submit" name="calcularFarm" value="Calcular Farm">
    </form>

  </center>
</section>

<hr>

<section id="Calcular">
  <center> 
    <strong>
      Calculando Vendas <br>
      Insira o valor da arma e a quantidade de armas para calcular o valor total
    </strong>
    <br>    <br>
    <form method="post" action="">
      <label for="preco">Insira o preço da unidade da arma</label><br>
      <input type="text" name="preco" placeholder="R$45000">
      <p></p>
      <label for="quantidade">Insira a quantidade de armas para</label><br>
      <input type="text" name="quantidade" placeholder="1">
      <br>
      <p></p>
      <br>
        O total da venda dará: R$ <b><?php $calcularVenda ->Venda(); ?></b>
      <br>
      <br>
      <input class="btn btn-primary" type="submit" name="calcularVenda" value="Calcular Venda">

    </form>


  </center>
</section>


    </main>
    <footer>

    Sistema desenvolvido por <b> Sergio Barros</b> Contatos <a href=""> Sergio Barros</a>

      <div class="class-discord">discord</div>
      <div class="class-instagram">instagram</div>
      <div class="class-youtube">youtube</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

<?php

}else{

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="10">
    <title>Facção Gringa</title>
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/1060304515506655392/1076250514188140554/e67de437fa559d5ef638a3aaa415f0c0.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>

      body{
        background-color: bisque;

      }

      body img{
        width: 135px;
        margin-left:5%;
      }
      nav a{
        margin-left:5px;
      }

    #Calcular  input .form-control{
        width:100px
      }

      footer{
        padding:2%;
        font-family: Arial, Helvetica, sans-serif;
        font-style: oblique;
      }
      footer a{
        color:blue;

      }
      footer img{
        width:50px;
      }

    </style>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img class="img-thumbnail" src="https://cdn.discordapp.com/attachments/1060304515506655392/1076250514188140554/e67de437fa559d5ef638a3aaa415f0c0.png" alt="">

  <div class="container-fluid">

    <a class="navbar-brand" href="http://localhost/Gringa/">
    | GRINGA |
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?contabilidade">Contabilidade</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?eventos">eventos</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="?informes">informes</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="?parceriasaliancas">Parcerias e Alianças</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="?streamer">streamer</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <main>

    <div class="card" style="float:left; margin-left:2.5%; margin-top:2.5%; width: 18rem;">
        <div class="card-body">
          <h5 style="margin-left:16%;" class="card-title">CONTABILIDADE  </h5>
          <p class="card-text">Para Cálculo de grandes quantidades de Armas para vender e calcular quantidades de Farms para o craft</p>
          <a style="margin-left:14%;" href="?contabilidade" class="btn btn-primary">Contabilidade Gringa</a>
        </div>
  </div>

  

    </main>
    <footer>

  <b> Sistema desenvolvido por <b> Sergio Barros</b> Contatos <a href=""> Sergio Barros</a></b>

  <div class="class-instagram"><a href="">
    <img src="https://cdn-icons-png.flaticon.com/512/3955/3955024.png" alt="">
  </a></div>
  <div class="class-discord"><a href="">
    <img src="https://cdn-icons-png.flaticon.com/512/4494/4494732.png" alt="">
  </a></div>
  <div class="class-youtube"><a href="">
    <img src="https://cdn-icons-png.flaticon.com/512/174/174883.png" alt="">
  </a></div>
</footer>
  </body>
</html>
<?php

    }

  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    
  </body>
  </html>