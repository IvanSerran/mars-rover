<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Rover Mars Mission</title>
    </head>
    <body>
        <h1>Rover Mars Mission</h1>

        <form action="index.php?action=move" method='POST'>
            <label for="x">X position:</label>
            <input type="number" name="x" min='0' max='199' required><br><br>

            <label for="y">Y position:</label>
            <input type="number" name="y" min='0' max='199' required><br><br>

            <label for="direction">Start direction:</label>

            <select name="direction">
                <?php
                    $directions = ['N' => 'North', 'E' => 'East', 'S' => 'South', 'W' => 'West'];

                    foreach($directions as $key => $label){
                        echo '<option value='.$key.'>'.$label.'</option>';
                    }
                ?>
            </select>
            
            <label for="commands">Commands: </label>
            <input type="text" name="commands" pattern='[FLRflr]*' required><br><br>

            <button type="submit">Send</button>
        </form>
    </body>
</html>

