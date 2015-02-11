<?php


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
            
        

}

        echo implode("  ",$five_random);


}
acquireNumbers();


?>