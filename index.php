<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="overall_style.css">
</head>

<body>
    <?php
    $preco = $_POST['preco'] ?? 1;
    $porcentagem = $_POST['porcentagem'] ?? 1;
    $reajuste = $preco + ($preco / 100) * $porcentagem;
    // if ($porcentagem == 0) {
    //     echo "O porcentagem tem que ser diferente de 0!";
    // } else {
    //     $quociente = intdiv($preco, $divisor);
    // }
    ?>
    <main class="main">
        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" id="form">
                <h2>Reajuste de Preço</h2>
                <label for="preco"> Preço</label>
                <input type="text" name="preco" id="preco" value="<?= $preco ?>" required>
                <br>
                <label for="porcentagem"> Porcentagem</label>
                <!-- <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" required> -->
                <input type="text" name="porcentagem" id="porcentegem" required>
                <input type="submit" value="calcular" id="buttom">
            </form>
        </section>
        <section class="result">
            <?php
            $padra = numfmt_create("pt_br", NumberFormatter::CURRENCY);
            if (isset($_POST['preco'])) {
                echo "O reajuste fica de " . numfmt_format_currency($padra, $reajuste, "BRL");
            } else {
                echo "Esperando formulario...";
            }
            ?>
        </section>
    </main>
</body>

</html>