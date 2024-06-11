<?php
include_once("../class/price.php");

if (isset($_POST['preco'])) {
    if (is_numeric($price_form) && is_numeric($percentage_form)) {
        $price = new Price($price_form, $percentage_form);
        $price->print_data();
    }
} else {
    echo "Esperando formulario...";
}