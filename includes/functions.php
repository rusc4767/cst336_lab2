<?php

function generateRandomSuit(){
        
        $suit = rand(0,3);
        $suitArray = array('clubs', 'diamonds', 'hearts','spades');
        $folder = $suitArray[$suit];
        return $folder;
    }
   
function suitArr($cardValues){
    
     
     $rand_suits = array("<img src= 'img/cards/".generateRandomSuit()."/$cardValues[0].png'>", 
                         "<img src= 'img/cards/".generateRandomSuit()."/$cardValues[1].png'>",
                         "<img src= 'img/cards/".generateRandomSuit()."/$cardValues[2].png'>",
                         "<img src= 'img/cards/".generateRandomSuit()."/$cardValues[3].png'>",
                         "<img src= 'img/cards/".generateRandomSuit()."/$cardValues[4].png'>");
     
    return $rand_suits;
            
}

function acquireNumbers(){

        $five_random = array(0,0,0,0,0,0);
        $ctr = 0;
        $num = 0;
        do
        {
            $rand_num = rand(1,13);
               
                if(!in_array($rand_num, $five_random)){
                $five_random[$ctr] = $rand_num;
                $ctr++;
             }      
        }while($ctr < 5);
            
        
    
        for($i = 0;$i<5;$i++){
            $num += $five_random[$i];
        }
        
        $five_random[5] = $num;
        
        return $five_random;
}

function getPlayerScore($arr){
    return array_sum($arr);
}

function displayPlayerCards($playerCards){
    foreach($playerCards as $card){
        echo "<td>".$card."</td>";
    }
}
function getWinner($scores){
    $winner = 0;
    $difference = $scores[0] - 42;
    for($i = 1; $i < count($scores); $i++){
        if($difference > $scores[$i] - 42){
            $difference = $scores[$i] - 42;
            $winner = $i;
        }
    }
    return $winner;
    
}

    $playerOneCardVals = acquireNumbers();
    $playerOneCards = suitArr($playerOneCardVals);

    
    $playerTwoCardVals = acquireNumbers();
    $playerTwoCards = suitArr($playerTwoCardVals);
    
    $playerThreeCardVals = acquireNumbers();
    $playerThreeCards = suitArr($playerThreeCardVals);
    
    $playerFourCardVals = acquireNumbers();
    $playerFourCards = suitArr($playerFourCardVals);
    
    $playerOneScore   = getPlayerScore($playerOneCardVals);
    $playerTwoScore   = getPlayerScore($playerTwoCardVals);
    $playerThreeScore = getPlayerScore($playerThreeCardVals);
    $playerFourScore  = getPlayerScore($playerFourCardVals);
    
    $winner = getWinner(array($playerOneScore, $playerTwoScore, $playerThreeScore,$playerFourScore));

?>