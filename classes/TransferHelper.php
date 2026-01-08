<?php 
class TransferHelper{

private static string $transfertcode ="TR-2026-" ;


public static function generateReference(){
    for($i = 0 ; $i < 4 ; $i++){
      self::$transfertcode .= (string)rand(0,9);
    }
    return  self::$transfertcode;
}

}



?>