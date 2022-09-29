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

                ['Argenta',60],
                ['Carlos Messalla',10],
                ['Edegar Pretto',15],
                ['Edegar Pretto',50],
                ['Luis Heinze',90],
                ['Rejane de Oliveira',50],
                ['Onyx Lorenzoni',12]
            ]);

            var grafico = new google.visualization.BarChart(document.getElementById('graficoPizza'));
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
</head>
<header style="text-align: center;">
    <nav>
    <div class="dropdown" style="margin-top: 1cm;">
    <a style="color: #73bde6; font-size: 20px" href=""><strong>VER MAIS CARGOS</strong></a>
      <div id="menu-header" class="dropdown-content">
        <a href="DF.php">Deputado Federal</a>
        <a href="DE.php">Deputado Estadual</a>
        <a href="senador.php">Senador</a>
        <a href="governador.php">Governador</a>
        <a href="index.php">Presidente</a>
      </div>
    </nav>
</header>
<main style="text-align: center;">
<h1 style="margin-top: 1.5cm;">GOVERNADOR</h1>

<div id="graficoPizza" style="width: 98%; margin-left: 15px;"></div>

</main>
</html>