<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Índice de Massa Corpórea (IMC)</title>
    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <main>
    <h2>Cálculo IMC</h2>
        <div class="painel">
        <form method = "post" action="resposta.blade.php"> 
            <div class ="row"> 
                <div class ="col"> 
                    <label for="valor1" class="label-control">
                        Informe a altura:
                    </label>
                    <input double = "number" name = "valor1"
                        id="valor1" class="form-control"/>
                </div>
                <div class ="col"> 
                    <label for="valor2" class="label-control">
                        Informe o peso:
                    </label>
                    <input type = "number" name = "valor2"
                        id= "valor2" class="form-control"/>
                </div>
            </div>
            <div class =" row mt-5">
                <div class = "col">
                    <button type="submit" class = "btn btn-danger">
                        Enviar
                    </button>
                </div>
            </div> 
        </form>

        <div class="painel">
            <div class="conteudo-painel">
                <h2>Veja a interpretação do IMC</h2>
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col">IMC</th>
                        <th scope="col">CLASSIFICAÇÃO</th>
                        <th scope="col">OBESIDADE (GRAU)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>MENOR QUE 18,5</td>
                        <td>MAGREZA</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>ENTRE 18,5 E 24,9</td>
                        <td>NORMAL</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>ENTRE 25,0 E 29,9</td>
                        <td>SOBREPESO</td>
                        <td>I</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>ENTRE 30,0 E 39,9</td>
                        <td>OBESIDADE</td>
                        <td>II</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>MAIOR QUE 40,0</td>
                        <td>OBESIDADE GRAVE</td>
                        <td>III</td>
                    </tr>
                    </tbody>
                </table>
                </form>
            </div>
        </div>

    </main>
</body>
</html>