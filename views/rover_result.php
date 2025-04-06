<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <title>Rover Result</title>
        <style>
            .success {
                color: green; font-weight: bold;
            }

            .warning {
                color: yellow; font-weight: bold;
            }

            .error {
                color: red; font-weight: bold;
            }
        </style>
    </head>
    <body>
        <h1>Command Results</h1>

        <?php if ($result['status'] === 'success'): ?>
            <div class="success">
                Rover moved successfully to position 
                (<?= $result['position'][0] ?>, <?= $result['position'][1] ?>) 
                facing <?= $result['direction'] ?>
            </div>
        <?php elseif ($result['status'] === 'obstacle'): ?>
            <div class="warning">
                Obstacle detected at (<?= $result['obstacle'][0] ?>, <?= $result['obstacle'][1] ?>).<br>
                Rover stopped at (<?= $result['position'][0] ?>, <?= $result['position'][1] ?>) 
                facing <?= $result['direction'] ?>
            </div>
        <?php else: ?>
            <div class="error">
                Error: <?= $result['message'] ?>
            </div>
        <?php endif; ?>
        <a href="index.php">Send new commands</a>
    </body>
</html>