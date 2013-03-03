<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Instructor Evaluation</h2>
        <form method="" action="">
            <table>    
                <tr>
                    <td></td>
                    <td colspan="2">least</td>
                    <td colspan="2"></td>
                    <td>Highest</td>
                </tr>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                </tr>
                <?php
                echo'<tr>';
                echo '<td>Overall instructor rating</td>';
                for ($i = 1; $i <= 5; $i++) {
                    echo "<td><input  name='r1'type='radio' id=$i  /></td>";
                }
                echo'</tr>';

                echo'<tr>';
                echo '<td>Instructor encouraged me to search on my own</td>';
                for ($i = 1; $i <= 5; $i++) {
                    echo "<td><input  name='r2'type='radio' id=$i  /></td>";
                }

                echo'</tr>';

                echo'<tr>';
                echo '<td>Instructor was knowledgeable enough</td>';
                for ($i = 1; $i <= 5; $i++) {
                    echo "<td><input  name='r3'type='radio' id=$i  /></td>";
                }
                echo'</tr>';
                echo'<tr>';
                echo '<td>Class time well used</td>';
                for ($i = 1; $i <= 5; $i++) {
                    echo "<td><input  name='r4'type='radio' id=$i  /></td>";
                }
                echo'</tr>';

                echo'<tr>';
                echo '<td>Instructor was able to present clearly</td>';
                for ($i = 1; $i <= 5; $i++) {
                    echo "<td><input  name='r5'type='radio' id=$i  /></td>";
                }
                echo'</tr>';
                ?>
                <tr>
                    <td></td>
                    <td colspan="2"><input type="submit"></td>
                    <td colspan="2"><button formaction="5.php">comment</button></td>
                </tr>   
            </table>

        </form>     
    </body>
</html>
