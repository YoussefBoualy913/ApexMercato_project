<?php
final class FinancialEngine{

    private static float $tax;
    private static float $commissionAgent;

    public static function calculateTax(float $montant):float {
         return self::$tax =  $montant * (10 / 100);
    }
    public static function commissionAgent(float $montant):float {
         return self::$commissionAgent =  $montant * (5 / 100);
    }

}