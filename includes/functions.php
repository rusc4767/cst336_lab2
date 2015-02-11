<?php

function generateRandomSuit(){
        
        $suit = rand(1,4);
        switch ($suit){
            case 1: $folder = "clubs";
                    break;
            case 2: $folder = "diamonds";
                    break;
            case 3: $folder = "hearts";
                    break;
            case 4: $folder = "spades";
                    break;
            
        }
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

        $five_random = array(0,0,0,0,0);
        $ctr = 0;
    
       
        
        do
        {
            $rand_num = rand(1,13);
               
                if(!in_array($rand_num, $five_random)){
                $five_random[$ctr] = $rand_num;
                $ctr++;
             }
       
            
        }while($ctr < 5);
            
        

        return $five_random;
}

function runner(){
    $playerOneCardVals = acquireNumbers();
    $playerTwoCardVals = acquireNumbers();
    $playerThreeCardVals = acquireNumbers();
    $playerFourCardVales = acquireNumbers();
    
    $playerOneCardImgTags = suitArr($playerOneCardVals);
    $playerTwoCardImgTags = suitArr($playerTwoCardVals);
    $playerThreeCardImgTags = suitArr($playerThreeCardVals);
    $playerFourCardImgTags = suitArr($playerFourCardVales);
    
}


function sumArrays($arr){
    
    foreach ($arr as $playerNums){
        
        foreach( $playerNums as $num){
            
            $tempSum += $num;
            
        }
        
        $sumValues[] = $tempSum;
        
    }
    
    return $sumValues;
}


?>