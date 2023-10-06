<!DOCTYPE html>
<html>
<head>
    <title>Suma de Sandias</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 1500px;
            margin: 0 auto;
            padding: 50px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            text-align: center;
        }
        h1 {
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        .apple-block {
            display: inline-block;
            vertical-align: top;
            margin: 20px;
        }
        img {
            max-width: 100px;
            height: auto;
        }
        .result-message {
            font-weight: bold;
            font-size: 24px;
            margin-top: 20px;
        }
        .happy-face, .sad-face {
            font-size: 40px;
        }
        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: pink;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Suma de Sandias</h1>

        <button id="generar">Generar</button>

        <script>
            var num1, num2, resultado;

            function generarNumeros() {
                // Generar dos números aleatorios entre 1 y 10
                num1 = Math.floor(Math.random() * 10) + 1;
                num2 = Math.floor(Math.random() * 10) + 1;
                
                // Calcular la suma de los números
                resultado = num1 + num2;

                // Mostrar números y manzanas
                mostrarNumerosYsandias();
            }

            function mostrarNumerosYsandias() {
                var num1Element = document.getElementById("num1");
                var num2Element = document.getElementById("num2");
                var watermelonBlockA = document.getElementById("watermelon-block-a");
                var watermelonBlockB = document.getElementById("watermelon-block-b");


                for (var i = 0; i < num1; i++) {
                    watermelonBlockA.innerHTML += '<img src="sandia.png" alt="sandia">';
                }

                for (var j = 0; j < num2; j++) {
                    watermelonBlockB.innerHTML += '<img src="sandia.png" alt="Sandia">';
                }
            }

                             
    function verificarResultado() {
                var respuestaInput = document.getElementById("respuesta");
                var resultMessage = document.getElementById("result-message");
                var respuesta = parseInt(respuestaInput.value);

                // Verificar si la respuesta es correcta
                if (respuesta === resultado) {
                    resultMessage.innerHTML = '<img src="correcto.gif" alt="correcto"> Respuesta Correcta';
                } else {
                    resultMessage.innerHTML = '<img src="incorrecto.gif" alt="incorrecto"> Respuesta Incorrecta';
                }
            }
      // Asociar la función de generar números al botón "Generar"
            var generarButton = document.getElementById("generar");
            generarButton.addEventListener("click", generarNumeros);
        </script>

        <div class="watermelon-block">
            <label for="sumandoA">Número de Sandias <span id="num1"></span></label>
            <div id="watermelon-block-a"></div>
        </div>

        <div class="apple-block">
            
            <label for="sumandoB">Número de Sandias <span id="num2"></span></label>
            <div id="watermelon-block-b"></div>
        </div>

        <form>
            <label for="respuesta">Ingresa la suma de las Sandias</label>
            <input type="number" id="respuesta" required>
            <button type="button" onclick="verificarResultado()">Verificar</button>
        </form>
           <div class="result-message" id="result-message"></div>
        

    </div>
</body>
</html>