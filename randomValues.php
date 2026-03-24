<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Randomization Assignment</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; background: #f4f4f4; }
        .container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h2 { color: #c68b59; border-bottom: 2px solid #eee; padding-bottom: 10px; }
        .result { font-weight: bold; color: #333; }
    </style>
</head>
<body>
    <div class="container">
        <h1>PHP Assignment: Randomization</h1>

        <h2>Part 1: Coin Toss Simulator (100 Tosses)</h2>
        <?php
            $heads = 0;
            $tails = 0;

            for ($i = 1; $i <= 100; $i++) {
                $toss = rand(0, 1); // 0 for Heads, 1 for Tails
                if ($toss == 0) {
                    $heads++;
                } else {
                    $tails++;
                }
            }

            echo "<p>After tossing the coin 100 times:</p>";
            echo "<ul>";
            echo "<li>Heads: <span class='result'>$heads</span></li>";
            echo "<li>Tails: <span class='result'>$tails</span></li>";
            echo "</ul>";
        ?>

        <hr>

        <h2>Part 2: Random Number Generation</h2>
        <p>Range 1 to 27: <span class="result"><?php echo rand(1, 27); ?></span></p>
        <p>Range 1 to 178: <span class="result"><?php echo rand(1, 178); ?></span></p>
        <p>Range 1 to 600: <span class="result"><?php echo rand(1, 600); ?></span></p>
        
        <br>
        <a href="coursework.html">Back to Coursework</a>
    </div>
</body>
</html>