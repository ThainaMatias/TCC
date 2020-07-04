<?php include_once "header.php"?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style>
    rect{
        fill: #EAFFFF;
        
    }
    


/* Add a card effect for articles */
.card {
   background-color: #EAFFFF;
   padding: 20px;
   margin-top: 20px;
   margin-left: 107px;
  margin-right: 96px;
  width: 83.7vw;
  
}

/* Footer 
.footer {
  padding: 20px;
  text-align: center;
  background: #6FCACB;
  margin-top: 20px;
  
    margin-right: 48px;
} */


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

canvas#barChart.chartjs-render-monitor{
    width: 515px;
    height: 338px;
}


</style>
<!-- Menu -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Logo -->
        <a class="navbar" href="index.php">
        <img src="imagens/logo5.png" alt="logo">
        </a> 

        <!-- Links -->
        <ul class="navbar-nav">
        <li class="nav-item">
                <a class="nav-link" href="#">Nome do Site</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tipos.php">Tipos de Violência</a>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              SOS
            </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="chat.php">Chat</a>
                    <a class="dropdown-item" href="denuncie.php">Denuncie</a>
                    <a class="dropdown-item" href="ongs.php">ONGs</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="relatos.php">Relatos</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Informações
            </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="lei.php">Lei Maria da Penha</a>
                    <a class="dropdown-item" href="dados.php">Gráficos</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="quemsomos.php">Quem Somos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="cadastro.php"><i class="fa fa-fw fa-user"></i>Cadastre-se</a>
            </li>
        </ul>
    </nav>
    <br>

    <div class="header">
    <h2 style="color: #bff7f7;
            font-family: Candara;">Gráficos relacionados à Violência Doméstica no Brasil</h2>
    </div>

        
        <div class="leftcolumn">
            <div class="card">
            <h2>Tipos de Violência Doméstica no Brasil</h2>
            <h5>Gráfico mostra em forma de porcentagem os números dos diversos tipos de violência doméstica no Brasil.</h5>
            <div id="piechart"></div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Violência Física', 51.06],
        ['Violência Psicológica', 31.10],
        ['Violência Moral', 6.51],
        ['Violência Sexual', 4.30],
        ['Violência Patrimonial', 1.93]
        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {'title':'', 'width':550, 'height':400};

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
        }
        </script>

        <p>Fonte: Central de atendimento à Mulher, 2019</p>
            <p>
                Aqui se quiser colocar algo resumido mesmo, uma linha ou duas sobre isso.
            </p>
            </div>
        
            
        <div class="card">
            <h2>Classificação de acordo com o ambiente de agressão.</h2>
            <h5>Gráfico mostra em quais locais as agressoões são decorrentes</h5>
            <div id="piechart2"></div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Residência comum com o agressor', 37],
        ['Residência exclusiva com a vítima', 18],
        ['Local público', 9],
        ['Meio eletrônico', 3],
        ['Residência excluisva do agressor', 3],
        ['Residência de terceiros', 3],
        ['outros', 27]
        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {'title':'', 'width':550, 'height':400};

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
        chart.draw(data, options);
        }
        </script>

        <p>Fonte: Informações extraídas do banco de dados do Cadastro de Violência Doméstica, 2018. </p>
            <p>Aqui se quiser colocar algo resumido mesmo, uma linha ou duas sobre isso.</p>
            </div>

            
        <div class="card">
            <h2>Classificação de acordo com o vinculo entre agressor e vítima.</h2>
            <h5>Gráfico tem o objetivo de mostrar quem mais comete os crimes.</h5>
            <div id="piechart3"></div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Cônjulge/Companheiro(a)', 34],
        ['Ex-Cônjulge/Ex-Companheiro(a)', 34],
        ['Agregado(a) na unidade doméstica', 9],
        ['Ex Namorado(a)', 4],
        ['outros', 6]
        ]);

        // Optional; add a title and set the width and height of the chart
        var options = {'title':'', 'width':550, 'height':400};

        // Display the chart inside the <div> element with id="piechart"
        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
        chart.draw(data, options);
        }
        </script>

        <p>Fonte: Informações extraídas do banco de dados do Cadastro de Violência Doméstica, 2018. </p>
            <p>Aqui se quiser colocar algo resumido mesmo, uma linha ou duas sobre isso.</p>
            </div>

            <div class="card">
            <h2>Denúncias de violência doméstica.</h2>
            <h5>Números de regristros de denúncias de violência doméstica no brasil nos últimos anos.</h5>
            <br>
            <br>
            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <canvas id="barChart" ></canvas>

    <script>
       var ctxB = document.getElementById("barChart").getContext('2d');
                var myBarChart = new Chart(ctxB, {
                type: 'bar',
                data: {
                labels: ["2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018"],
                datasets: [{
                label: 'Denúncias',
                data: [38.238, 95.551, 65.844, 76.541, 58.597, 44.404, 58.040, 112.524, 123.739, 63.116 ],
                backgroundColor: [
                '#f41414',
                '#f41414',
                '#f41414',
                '#f41414',
                '#f41414',
                '#f41414',
                '#f41414',
                '#f41414',
                '#f41414',
                '#f41414'
                ],
                borderColor: [
                '#f41414',
                '#f41414',
                '#f41414',
                '#f41414',
                '#f41414',
                '#f41414',
                '#f41414',
                '#f41414',
                '#f41414',
                '#f41414'
                ],
                borderWidth: 1
                }]
                },
                options: {
                scales: {
                yAxes: [{
                ticks: {
                beginAtZero: true
                }
                }]
                }
                }
                });
    </script>
 
        
<br>
<br>
        <p> Fonte: Redação do Jornal Grande Bahia, 2018. </p>
            <p>Aqui se quiser colocar algo resumido mesmo, uma linha ou duas sobre isso.</p>
            </div>

        </div>
        
        
        

        <!-- <div class="footer">
        <h2>Footer</h2>
        </div> -->



