<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste Preço</title>
    <link rel="stylesheet" href="../public/assets/css/overall_style.css">
</head>

<body>
    <main class="main">
        <section>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" id="form">
                <h2>Reajuste de Preço</h2>
                <label for="preco"> Preço</label>
                <input type="text" name="preco" id="preco" value="<?= $price_form ?>" required>
                <br>
                <label for="porcentagem"> Porcentagem</label>
                <!-- <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" required> -->
                <input type="text" name="porcentagem" id="porcentegem" value="<?= $percentage_form ?>" required>
                <input type="submit" value="calcular" id="buttom">
            </form>
        </section>
        <section class="result">
            <?php
            require_once("../model/request.php");
            ?>
        </section>
    </main>
</body>

</html>