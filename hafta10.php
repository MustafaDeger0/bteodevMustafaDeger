<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1-100 Arası Tek Sayılar</title>
</head>
<body>
    <h1>1-100 Arası Tek Sayılar</h1>
    <ul>
        <?php
        // 1'den 100'e kadar döngü
        for ($i = 1; $i <= 100; $i++) {
            // Tek sayıları kontrol et
            if ($i % 2 != 0) {
                echo "<li>$i</li>";
            }
        }
        ?>
    </ul>
</body>
</html>
