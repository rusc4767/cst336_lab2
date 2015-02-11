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
<body>
    <div id="wrapper">
        <h1>SilverJack</h1>
        
        <?php
            include 'includes/functions.php';
        ?>    
        
        <div id="game">
            
            <table>
                
                <!-- row 1 -->
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan="4"></td>
                </tr>
                <!-- row 2 -->
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                </tr>
                <!-- row 3 -->
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                </tr>
                <!-- row 4 -->
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                </tr>
                
            </table>
            
            <button >
                Play Again
            </button>
        </div>
        <div id="rules">
            <h3>Rules:</h3>
            <p>
                Each player gets five random cards, including face cards.
                Each player must have different card values (no duplicate values).
                Jack is 11 points, Queen 12, and King 13. Ace is always one.
                The player with the sum of card values closer to 42 wins. 
            </p>
        </div>
        
        
    </div>

</body>
</html>