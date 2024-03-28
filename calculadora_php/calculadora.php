<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Calculadora</title>
</head>
<body>
    <main id="container">
        <section id="img">
            <img src="assets/imgs/illustration.svg">
        </section>
        <section id="calculator">
            <form id="form" method="post">
                <h1 id="title">
                    Calculadora
                </h1>
                <div class="input-box">
                    <label for="numero_um">
                        Digite o 1° número:
                    </label>
                    <div class="input-field">
                        <i class="fa-solid fa-pen" style="color: #cbd5e1;"></i>
                        <input type="number" id="numero_um" name="numero_um" required>
                    </div>
                </div>
                <div class="input-box">
                    <label for="numero_dois">
                        Digite o 2° número:
                    </label>
                    <div class="input-field">
                        <i class="fa-solid fa-pen" style="color: #cbd5e1;"></i>
                        <input type="number" step="0.01" id="numero_dois" name="numero_dois" required>
                    </div>
                </div>
                <div class="input-box">
                    <label for="numero_dois">
                        Escolha a operação desejada:
                    </label>
                    <div class="input-field">
                        <i class="fa-solid fa-calculator" style="color: #cbd5e1;"></i>
                        <div class="select-box">
                                <select name="operacao">
                                    <option hidden>Selecione aqui a operação:</option>
                                    <option value="soma">Soma</option>
                                    <option value="subtrair">Subtração</option>
                                    <option value="multiplicar">Multiplicação</option>
                                    <option value="dividir">Divisão</option>
                                </select>
                            </div>
                    </div>
                </div>
                <button id="calculate" value="calcular"> 
                    Calcular
                </button>
                 <!-- Funcionalidade -->
                    <?php
                        if (isset($_POST['numero_um']) && ($_POST['numero_dois']))
                        {
                            $numero_um = $_POST['numero_um'];
                            $numero_dois = $_POST['numero_dois'];
                            $operacao = $_POST['operacao'];
                            $resultado = [];
                    
                            if ($operacao == "soma") 
                            {
                            $resultado = $numero_um+ $numero_dois;
                            echo "O resultado é: ";
                            echo $resultado;
                            } 
                            else if ($operacao == "subtrair") 
                            {
                            $resultado = $numero_um - $numero_dois;
                            echo "O resultado é: ";
                            echo $resultado;
                            }
                            else if ($operacao == "multiplicar") 
                            {
                            $resultado = $numero_um * $numero_dois;
                            echo "O resultado é: ";
                            echo $resultado;
                            } 
                            else if ($operacao == "dividir") 
                            {
                            $resultado = $numero_um / $numero_dois;
                            echo "O resultado é: ";
                            echo $resultado;
                            } 
                        }
                    ?>
            </form>    
        </section>
    </main>
</body>
</html>