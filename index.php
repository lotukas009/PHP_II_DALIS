<?php
$money = rand (3,27);
$bokal_cost = 3;
$bokal_num = floor($money/$bokal_cost);
$total_cost = $bokal_num * $bokal_cost;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Drinks</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"/>
    <link rel="stylesheet" href="/style.css"/>
</head>
<body>
<section>
    <div>
        <?php for ($m = 3; $m <= $total_cost; $m += $bokal_cost): ?>
        <div class="column">
            <div>
                <?php print "$m Eur"; ?>
            </div>
            <div class="rows">
                <?php for ($i = $m; $i > 0; $i -= $bokal_cost): ?>
                    <div class="drink <?php print $i == 3 ? 'full' : 'empty'; ?>"></div>
                <?php endfor; ?>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</section>
</body>
</html>




