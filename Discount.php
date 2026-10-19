<?php
function calculateDiscount(float $price, float $discount): float
{
    return $price - ($price * ($discount / 100));
}
