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
            tabela.addColumn('number','valores');
            tabela.addRows([

                ['Bolsonaro',20],
                ['Ciro',10],
                ['Lula',15],
                ['Constituinte Eymael',50],
                ['Luiz Felipe d’Avila',90],
                ['Léo Péricles',12]
            ]);

            var grafico = new google.visualization.PieChart(document.getElementById('graficoPizza'));
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
<body>