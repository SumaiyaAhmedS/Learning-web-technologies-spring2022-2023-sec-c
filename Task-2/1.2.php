<?php
    function VAT($price, $vat){
        return $price*$vat; 
    }
    echo VAT(100,0.15);
?>