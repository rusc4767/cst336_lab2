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

function runner1(){
    
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

    $playerFourCardVales = acquireNumbers();

    $playerFourCardImgTags = suitArr($playerFourCardVales);
    
    return $playerFourCardImgTags;
    
}


?>