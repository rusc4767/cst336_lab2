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
            $player1 = runner1(); 
            $player2 = runner2();
            $player3 = runner3();
            $player4 = runner4();


            echo "<table>
                
                <!-- row 1 -->
                <tr>
                    
                    <td><img src='img/people/edgar_sandoval.png' /></td>
                    <td>".$player1[0]."</td>
                    <td>".$player1[1]."</td>
                    <td>".$player1[2]."</td>
                    <td>".$player1[3]."</td>
                    <td>".$player1[4]."</td>
                    <td id='sumValue'>".$player1[5]."</td>
                    </tr>
                    
                <!-- row 2 -->
                <tr>
                    <td><img src='img/people/devon_rusconi.png' /></td>
                    <td>".$player2[0]."</td>
                    <td>".$player2[1]."</td>
                    <td>".$player2[2]."</td>
                    <td>".$player2[3]."</td>
                    <td>".$player2[4]."</td>
                    <td id='sumValue'>".$player2[5]."</td>
                    
                </tr>
                <!-- row 3 -->
                <tr>
                    <td><img src='img/people/arturo_lopez.png' /></td>
                    <td>".$player3[0]."</td>
                    <td>".$player3[1]."</td>
                    <td>".$player3[2]."</td>
                    <td>".$player3[3]."</td>
                    <td>".$player3[4]."</td>
                    <td id='sumValue'>".$player3[5]."</td>
                    
                </tr>
                <!-- row 4 -->
                <tr>
                    <td><img src='img/people/alcides_sorto.png' /></td>
                    <td>".$player4[0]."</td>
                    <td>".$player4[1]."</td>
                    <td>".$player4[2]."</td>
                    <td>".$player4[3]."</td>
                    <td>".$player4[4]."</td>
                    <td id='sumValue'>".$player4[5]."</td>
                    <td id='winner'>Winner</td>
                    
                </tr>
                
            </table>"
    
            ?>
            <button onClick='location.reload();'>
                Play Again
            </button>
                 
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