<html>
<head>

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
</html>