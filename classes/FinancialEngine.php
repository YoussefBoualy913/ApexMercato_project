<?php
final class FinancialEngine{

    private static float $tax;
    private static float $commissionAgent;
    private static float $bedget;

    public static function calculateTax(float $montant):float {
         return self::$tax =  $montant * (10 / 100);
    }
    public static function commissionAgent(float $montant):float {
         return self::$commissionAgent =  $montant * (5 / 100);
    }

     public static function newBedget(float $bedget,float $montant):float {
         return self::$bedget = $bedget -( self::calculateTax($montant) + self::commissionAgent($montant));
    }


     

}