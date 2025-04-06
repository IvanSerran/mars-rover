<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Rover Mars Mission</title>
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background: #1e1e2f;
                color: #f4f4f4;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                margin: 0;
                padding: 20px;
            }

            .form-container {
                background-color: #2d2d44;
                padding: 30px;
                border-radius: 16px;
                box-shadow: 0 0 20px rgba(0,0,0,0.4);
                max-width: 420px;
                width: 100%;
            }

            h1 {
                text-align: center;
                margin-bottom: 25px;
                font-size: 1.8rem;
            }

            form {
                display: flex;
                flex-direction: column;
                gap: 15px;
            }

            label {
                font-weight: bold;
            }

            input[type='number'], input[type='text'], select {
                width: 100%;
                padding: 10px;
                border: none;
                border-radius: 8px;
                font-size: 14px;
                background-color: #444;
                color: white;
            }

            input[type="submit"] {
                width: 100%;
                background-color: #4caf50;
                color: white;
                font-weight: bold;
                margin-top: 25px;
                padding: 12px;
                border: none;
                border-radius: 8px;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            input[type="submit"]:hover {
                background-color: #45a049;
            }

            @media (max-width: 400px){
                .form-container {
                    padding: 20px 15px;
                }

                h1 {
                    font-size: 1.3rem;
                }

                input[type='submit']{
                    font-size: 1rem;
                    padding: 10px;
                }
            }
        </style>
    </head>
    <body>
        <div class="form-container">
            <h1>Rover Mars Mission</h1>

            <form action="index.php?action=move" method='POST'>
                <label for="x">X position:</label>
                <input type="number" name="x" min='0' max='199' required>

                <label for="y">Y position:</label>
                <input type="number" name="y" min='0' max='199' required>

                <label for="direction">Start direction:</label>

                <select name="direction">
                    <?php
                        $directions = ['N' => 'North', 'E' => 'East', 'S' => 'South', 'W' => 'West'];

                        foreach($directions as $key => $label){
                            echo '<option value='.$key.'>'.$label.'</option>';
                        }
                    ?>
                </select>

                <label for="obstacles">Number of obstacles:</label>
                <input type="number" name="obstacles" min="50" max='30000' required>
                
                <label for="commands">Commands (F, L, R): </label>
                <input type="text" name="commands" pattern='[FLRflr]*' required>

                <input type="submit" value='Send'>
            </form>
        </div>
   </body>
</html>