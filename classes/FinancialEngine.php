<?php
final class FinancialEngine{

    private static float $tax;

    public static function calculateTax(float $montant):float {
         return self::$tax =  $montant * (20 / 100);
    }

}