<?php

// $a1 = array(array("ahoj", "tati"), array("kolik", "tvoje"), array("ahoj", "mame"));


// for ($i = 0; $i < sizeof($a1); $i++) {
//     if (array_search("ahoj", $a1[$i]) !== false) {
//         echo $i;
//     }

include_once("includes/connect.php");
include_once("includes/function.inc.php");

// aukce skonci --> zjistime kdo prihodil jako posledni --> vytvoříme order --> 
// offers(sold) + orders(sent) = false --> aukce se odstrani ze stranky -->
// posleme vlastnikovi aukce upozorneni na zaslani predmetu --> 
// vlastnik aukce potvrdi odeslani --> offers(sold) + orders(sent) = true --> 
// kupujicimu se odectou penize

// $offer = $_GET["offer"];
// $user = $_GET["user"] ;
// $amount = $_GET["amount"];

// bidTo($conn, $offer, $user, $amount);



    // echo(date("d.m.Y"));
    // if(date("i") == "42"){
    //     $result = closedOffers($conn, date("Y.m.d"));
    //     $f = fopen("includes/closedOffers.txt", "a");
    //     fputs($f, "hello");
    //     fclose($f);
    // }
function searchArray($type, $id){
    $offers = array();
        switch($type){
            case 1:
                for($i = 0; $i < sizeof($_SESSION["result"]); $i++){
                    if($_SESSION["result"][$i][4] === $id){
                        array_push($offers, $_SESSION["result"][$i]);
                    }
                }
            case 2:
                for($i = 0; $i < sizeof($_SESSION["result"]); $i++){
                    if($_SESSION["result"][$i][0] === $id){
                        array_push($offers, $_SESSION["result"][$i]);
                    }
                }
        }
    return $offers;
}
print_r(searchArray($_GET["type"], 3));