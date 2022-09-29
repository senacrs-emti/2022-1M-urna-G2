<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <div class="urna">
    <div class="urna-topo">
        <div id="biometria"></div>
    </div>
    </div>

    <div class="urna">
    <div class="urna-tela">
        <div id="tela"></div>
    </div>
    </div>

    <div class="urna">
    <div class="urna-teclado">

    <div class="teclas">
    <div>
        <button class="teclado">1</button>
        <button class="teclado">4</button>
        <button class="teclado">7</button>
        <button id="confirma">confirma</button>
    </div>

    <div>
        <button class="teclado">2</button>
        <button class="teclado">5</button>
        <button class="teclado">8</button>
        <button class="teclado">0</button>
    </div>

    <div>
        <button class="teclado">3</button>
        <button class="teclado">6</button>
        <button class="teclado">9</button>
        <button id="corrige">corrige</button>
    </div>

    </div>

    <div id="sinais">

        <div id="escrito">
            <div class="text">
                <p>Segurança</p>
                <span style='background-color: red;' class='ponto'></span>
            </div>
            <div class="text">
                <p>Bateria interna</p>
                <span style='background-color: red;' class='ponto'></span>
            </div>
            <div class="text">
                <p>Aguarde</p>
                <span style='background-color: yellow;' class='ponto'></span>
            </div>
            <div class="text">
                <p>Liberado</p>
                <span style='background-color: green;' class='ponto'></span>
            </div>
            <!-- <div class="luz">Bateria interna</div>
            <div class="luz">Aguarde</div>
            <div class="luz">Liberado</div> -->
        </div>

        <!-- <div id="luzes">
        <div class="vermelho"></div>
        <div class="vermelho"></div>
        <div class="amarelo"></div>
        <div class="verde"></div>
        </div> -->

    </div>

    </div>
    </div>


</body>
</html>