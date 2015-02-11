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
        
        
           
        
        <div id="game">
            <?php
            include 'includes/functions.php';
            echo "<table>
                
                <!-- row 1 -->
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    
                </tr>
                <!-- row 2 -->
                <tr>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    
                </tr>
                <!-- row 3 -->
                <tr>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td>
                    <td>22</td>
                    
                </tr>
                <!-- row 4 -->
                <tr>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td>
                    <td>29</td>
                    <td colspan='4'>8</td>
                    
                </tr>
                
            </table>
            
            <button >
                Play Again
            </button>"
            ?> 
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