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
        <div id="tela">
            <p class="escrito-tela">Digite aquio CPF do eleitor:</p> 

            <form action="" method="post">
                <fieldset id="area">
                        <input type="text" name="entrada_1" id="entrada_1" /></label>
                </fieldset>

            <br>

        </div>
    </div>
    </div>

    <div class="urna">
    <div class="urna-teclado">

    <div class="teclas" id="teclado">

    <div>
        <input class="teclado" type="button" name="1" value="1"/>
        <input class="teclado" type="button" name="4" value="4"/>
        <input class="teclado" type="button" name="7" value="7" />
        <button id="confirma" onclick='confirma()'>CONFIRMA</button>
            <audio id="confirma-som" src="./assets/som-confirma.mp3"></audio>
    </div>

    <div>
        <input class="teclado" type="button" name="2" value="2"/>
        <input class="teclado" type="button" name="5" value="5"/>
        <input class="teclado" type="button" name="8" value="8"/>
        <input class="teclado" type="button" name="0" value="0"/>
    </div>

    <div>
        <input class="teclado" type="button" name="3" value="3"/>
        <input class="teclado" type="button" name="6" value="6"/>
        <input class="teclado" type="button" name="9" value="9"/>
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


    </div>

    </div>
    </div>

    <script src="script.js"></script>

</body>
</html>


