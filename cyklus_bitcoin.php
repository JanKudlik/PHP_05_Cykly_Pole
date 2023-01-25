<?php
/*
 * cyklus
 * Od 1.1.2020 každý měsíc nakupujete bitcoin v odpovídající výši 50 USD.
 * Nákupní cena za 1 BTC je uložena v poli $prices. Hodnota uvedena v USD. Pole je seřazené dle pořadového čísla nákupu.
 *
 * Vypočítejte s využitím cyklů průměrnou, minimální, maximulní nákupní cenu a celkovou hodnotu svého portfólia v BTC i USD.
 *
 */

$prices = array(7195,9509,8552,6403,8744,9427,9139,10904,11300,10743,13060,18753,24671,32273,48691,51416,50133,38642,33702,33455,49250,40386,62541);


//reseni

foreach ($prices as $i => $value){
    echo $i . " - ".$value."<br>";
}
echo 'Průměrná cena: ' .array_sum($prices)/$i."<br>";
echo 'Minimální cena: ' .min($prices)."<br>";
echo 'Maximální cena: ' .max($prices)."<br>";
echo 'Celková cena: '.array_sum($prices)."<br>";

?>