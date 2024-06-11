<?php

class Price
{
    private $price;
    private $percentage;

    public function __construct(int $price, int $percentage)
    {
        $this->set_price($price);
        $this->set_percentage($percentage);
    }
    public function get_price()
    {
        return $this->price;
    }
    public function set_price(int $price)
    {
        $this->price = $price;
    }
    public function get_percentage()
    {
        return $this->percentage;
    }
    public function set_percentage(int $percentage)
    {
        $this->percentage = $percentage;
    }
    public function calculate_adjustment(int $price, int $percentage)
    {
        $adjustment = $price + $price / 100 * $percentage;
        return $adjustment;
    }
    public function standard_number(int $value)
    {
        $standard = numfmt_create("pt_br", NumberFormatter::CURRENCY);
        return numfmt_format_currency($standard, $value, "BRL");
    }
    public function print_data()
    {
        echo "Preço: " . $this->get_price() . "<br>";
        echo "Porcentagem: " . $this->get_percentage() . "<br>";
        echo "Reajuste: " . $this->calculate_adjustment($this->price, $this->percentage) . "<br>";
    }
}