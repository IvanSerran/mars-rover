<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <title>Rover Result</title>
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

            .result-container {
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

            .result {
                font-size: 1.1rem;
                line-height: 1.6;
            }

            .obstacles {
                margin-top: 20px;
                font-size: 0.95rem;
                background-color: #3c3c5c;
                padding: 10px;
                border-radius: 8px;
                max-height: 200px;
                overflow-y: auto;
            }

            .btn {
                display: block;
                width: 100%;
                margin-top: 25px;
                padding: 12px;
                background-color:rgb(108, 112, 126);
                color: white;
                text-align: center;
                text-decoration: none;
                border-radius: 8px;
                font-weight: bold;
                transition: background-color 0.4s ease;
            }

            @media (max-width: 400px) {
                .result-container {
                    padding: 20px 15px;
                }

                h1 {
                    font-size: 1.4rem;
                }
            }
        </style>
    </head>
    <body>
        <div class="result-container">
            <h1>Mission result</h1>

            <div class="result">
                <p><strong>Final Position:</strong> (<?= $result['position'][0] ?>, <?= $result['position'][1] ?>)</p>
                <p><strong>Facing: </strong><?= $result['direction'] ?></p>
            
                <?php if (!empty($result['obstacle'])): ?>
                    <p style='color: #f88;'>Stopped due to obstacle at: (<?= $result['obstacle'][0] ?>, <?= $result['obstacle'][1] ?>)</p>
                <?php endif; ?>
                    
                <?php if (!empty($obstacles)): ?>
                    <div class="obstacles">
                        <strong>Obstacles List (<?= count($obstacles) ?>):</strong>
                        <ul>
                            <?php foreach ($obstacles as $obs): ?>
                                <li>(<?= $obs[0] ?>, <?= $obs[1] ?>)</li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>

            <a href="index.php" class='btn'>Back to Command Form</a>
        </div>
    </body>
</html>