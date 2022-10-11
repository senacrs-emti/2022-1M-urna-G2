<?php
//include_once './includes/_banco.php';
include_once './includes/_head.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script>


        google.charts.load('current', {'packages':['corechart']});

        function desenharPizza (){

            var tabela = new google.visualization.DataTable();
            tabela.addColumn('string','categorias');
            tabela.addColumn('number','votos');
            tabela.addRows([

                ['Bolsonaro',20],
                ['Ciro',500],
                ['Lula',15],
                ['Constituinte',50],
                ['Luiz Felipe d’Avila',90],
                ['Léo Péricles',12]
            ]);

            var grafico = new google.visualization.BarChart(document.getElementById('graficoPizza'));
            grafico.draw(tabela);
    }

    google.charts.setOnLoadCallback(desenharPizza);
 
    </script>
    <script>

    google.charts.load('current', {'packages':['corechart']});

    function desenharPizza (){

var tabela = new google.visualization.DataTable();
tabela.addColumn('string','categorias');
tabela.addColumn('number','votos');
tabela.addRows([

    ['Onyx',20],
    ['Eduardo Leite',500],
    ['Lula',15],
    ['Constituinte',50],
    ['Luiz Felipe d’Avila',90],
    ['Léo Péricles',12]
]);

var grafico = new google.visualization.BarChart(document.getElementById('graficoGovernador'));
grafico.draw(tabela);
}

google.charts.setOnLoadCallback(desenharPizza);

</script>

<script>

    google.charts.load('current', {'packages':['corechart']});

    function desenharPizza (){

var tabela = new google.visualization.DataTable();
tabela.addColumn('string','categorias');
tabela.addColumn('number','votos');
tabela.addRows([

    ['Onyx',20],
    ['Eduardo Leite',500],
    ['Lula',15],
    ['Constituinte',50],
    ['Luiz Felipe d’Avila',90],
    ['Léo Péricles',12]
]);

var grafico = new google.visualization.BarChart(document.getElementById('graficoSenador'));
grafico.draw(tabela);
}

google.charts.setOnLoadCallback(desenharPizza);

</script>

<script>

    google.charts.load('current', {'packages':['corechart']});

    function desenharPizza (){

var tabela = new google.visualization.DataTable();
tabela.addColumn('string','categorias');
tabela.addColumn('number','votos');
tabela.addRows([

    ['Onyx',20],
    ['Eduardo Leite',500],
    ['Lula',15],
    ['Constituinte',50],
    ['Luiz Felipe d’Avila',90],
    ['Léo Péricles',12]
]);

var grafico = new google.visualization.BarChart(document.getElementById('graficoDF'));
grafico.draw(tabela);
}

google.charts.setOnLoadCallback(desenharPizza);

</script>

<script>

    google.charts.load('current', {'packages':['corechart']});

    function desenharPizza (){

var tabela = new google.visualization.DataTable();
tabela.addColumn('string','categorias');
tabela.addColumn('number','votos');
tabela.addRows([

    ['Onyx',20],
    ['Eduardo Leite',500],
    ['Lula',15],
    ['Constituinte',50],
    ['Luiz Felipe d’Avila',90],
    ['Léo Péricles',12]
]);

var grafico = new google.visualization.BarChart(document.getElementById('graficoDE'));
grafico.draw(tabela);
}

google.charts.setOnLoadCallback(desenharPizza);

</script>
</head>

    <title>urna</title>

<style>
.dropbtn {
display: block;
padding: 30px 0px 0px 0px;
font-size: 0px;
border: none;
}
/* The container <div> - needed to position the dropdown content */
.dropdown {
position: relative;
display: inline-block;
}
/* Dropdown Content (Hidden by Default) */
.dropdown-content {
display: none;
position: fixed;
min-width: 10px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
background-color: white;
}
/* Links inside the dropdown */
.dropdown-content a {
position: relative;
color: black;
padding: 10px 30px 10px 30px;
text-decoration: none;
display: block;
}
/* Change color of dropdown links on hover */
.dropdown-content a:hover {
background-color: white;
}
/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
display: block;
}
</style>
<header style="text-align: center;">
<nav>
    <div class="dropdown" style="margin-top: 1cm;">
      <a style="color: #73bde6; font-size: 20px" href=""><strong>ESTADOS</strong></a>
      <div id="menu-header" class="dropdown-content">
      <ul class="dropdown-menu scroll-menu scroll-menu-2x">
        <a href="AC.php">AC</a>
        <a href="AL.php">AL</a>
        <a href="AP.php">AP</a>
        <a href="AM.php">AM</a>
        <a href="BA.php">BA</a>
        <a href="CE.php">CE</a>
        <a href="DF.php">DF</a>
        <a href="ES.php">ES</a>
        <a href="GO.php">GO</a>
        <a href="MA.php">MA</a>
        <a href="MG.php">MG</a>
        <a href="MS.php">MS</a>
        <a href="MT.php">MT</a>
        <a href="PA.php">PA</a>
        <a href="PB.php">PB</a>
        <a href="PE.php">PE</a>
        <a href="PI.php">PI</a>
        <a href="PR.php">PR</a>
        <a href="RJ.php">RJ</a>
        <a href="RN.php">RN</a>
        <a href="RO.php">RO</a>
        <a href="RR.php">RR</a>
        <a href="RS.php">RS</a>
        <a href="SC.php">SC</a>
        <a href="SE.php">SE</a>
        <a href="SP.php">SP</a>
        <a href="TO.php">TO</a>
       </ul>
      </div>
    </nav>
</header>
<main style="text-align: center;">
<div class="container" style="margin-top: 1.5cm;">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
    <h1>PRESIDENTE</h1>
    </div>
    <div class="col-sm">
    <h2><img src="./content/pin1.png" alt="Girl in a jacket" width="30" height="30"> Destrito Federal</h2>
    </div>
  </div>
</div>

<div id="graficoPizza" style="width: 95%; margin-left: 15px;"></div>

<h1 style="margin-top: 1.5cm;">GOVERNADOR</h1>

<div id="graficoGovernador" style="width: 98%; margin-left: 15px;"></div>

<h1 style="margin-top: 1.5cm;">SENADOR</h1>

<div id="graficoSenador" style="width: 98%; margin-left: 15px;"></div>

<h1 style="margin-top: 1.5cm;">DEPUTADO FEDERAL</h1>

<div id="graficoDF" style="width: 98%; margin-left: 15px;"></div>

<h1 style="margin-top: 1.5cm;">DEPUTADO ESTADUAL</h1>

<div id="graficoDE" style="width: 98%; margin-left: 15px;"></div>

</main>
</html>