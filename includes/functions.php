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
                         "<img src= 'img/cards/".generateRandomSuit()."/$cardValues[4].png'>",
                        $cardValues[5]);
     
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

<<<<<<< HEAD
function runner1(){
=======

function sumArrays($arr){
    
    foreach ($arr as $playerNums){
        
        foreach( $playerNums as $num){
            
            $tempSum += $num;
            
        }
        
        $sumValues[] = $tempSum;
        
    }
    
    return $sumValues;
}




}

function runner(){
    $playerOneCardVals = acquireNumbers();
    $playerTwoCardVals = acquireNumbers();
    $playerThreeCardVals = acquireNumbers();
    $playerFourCardVales = acquireNumbers();
>>>>>>> 3a09aa92aff61c19abd5c4cccbc1cffb18a867a5
    
    $playerOneCardVals = acquireNumbers();
   
    $playerOneCardImgTags = suitArr($playerOneCardVals);

    return $playerOneCardImgTags;
}

function runner2(){

    $playerTwoCardVals = acquireNumbers();

    $playerTwoCardImgTags = suitArr($playerTwoCardVals);

    return $playerTwoCardImgTags;
}

function runner3(){

    $playerThreeCardVals = acquireNumbers();

    $playerThreeCardImgTags = suitArr($playerThreeCardVals);

    return $playerThreeCardImgTags;
    
}

function runner4(){

<<<<<<< HEAD
    $playerFourCardVales = acquireNumbers();

    $playerFourCardImgTags = suitArr($playerFourCardVales);
=======

function sumArrays($arr){
>>>>>>> 3a09aa92aff61c19abd5c4cccbc1cffb18a867a5
    
    return $playerFourCardImgTags;
    
}

?>