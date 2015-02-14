<!--
    Document   : labs/cst336_lab2/index.php
    Created on : 2015-02-11 10:44 AM
    Author     : sort1554
    Description: Main page for Silverjack game.
-->
<!DOCTYPE html>
<html>
<head>
    <title>Lab 2: Silverjack</title>
    <meta charset="utf-8" />
    <link href="css/styles.css" rel="stylesheet">
</head>
<body >
    <div id="wrapper" background="img/table.jpg">
        <h1>SilverJack</h1>
        
        <div id="game">
            
            <?php

                include 'includes/functions.php';
                echo "<table>";
                echo  "<tr>
                            <td><img src='img/people/edgar_sandoval.png'/></td>";
                displayPlayerCards($playerOneCards);
                echo "<td id='sumValue'>".$playerOneScore."</td>";
                if($winner == 0){
                    echo "<td id='winner'>Winner!</td>";
                }
                echo "</tr>";

                echo  "<tr>
                     <td><img src='img/people/devon_rusconi.png'/></td>";
                displayPlayerCards($playerTwoCards);
                echo "<td id='sumValue'>".$playerTwoScore."</td>";
                if($winner == 1){
                    echo "<td id='winner'>Winner!</td>";
                }            
                echo "</tr>";

                echo  "<tr>
                            <td><img src='img/people/arturo_lopez.png'/></td>";
                displayPlayerCards($playerThreeCards);
                echo "<td id='sumValue'>".$playerThreeScore."</td>";
                if($winner == 2){
                    echo "<td id='winner'>Winner!</td>";
                }
                echo "</tr>";

                echo  "<tr>
                            <td><img src='img/people/alcides_sorto.png'/></td>";
                displayPlayerCards($playerFourCards);
                echo "<td id='sumValue'>".$playerFourScore."</td>";
                if($winner == 3){
                    echo "<td id='winner'>Winner!</td>";
                }
                echo "</tr>";


                echo "</table>";                  
            ?>
                
        <form action="">
         <input  id="btn" type="submit" value="Play Again" />
        </form>
                 
        </div>
        <div id="rules">
            
            <p>Rules:<br>
                <b>Each player gets five random cards, including face cards.
                Each player must have different card values (no duplicate values).
                Jack is 11 points, Queen 12, and King 13. Ace is always one.
                The player with the sum of card values closer to 42 wins. </b>
            </p>
        </div>
        
        
    </div>

</body>
</html>