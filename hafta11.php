<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hafta11-Görev2</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        td {
            text-align: center;
            padding: 10px;
        }
        form {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <form method="POST">
        <label for="rows">Satır Sayısı:</label>
        <input type="number" id="rows" name="rows" min="1" required>
        <label for="cols">Sütun Sayısı:</label>
        <input type="number" id="cols" name="cols" min="1" required>
        <button type="submit">Tablo Oluştur</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Kullanıcıdan gelen satır ve sütun sayısını al
        $rows = intval($_POST['rows']);
        $cols = intval($_POST['cols']);

        if ($rows > 0 && $cols > 0) {
            echo '<table>';
            for ($i = 0; $i < $rows; $i++) {
                echo '<tr>';
                for ($j = 0; $j < $cols; $j++) {
                    $randomNumber = rand(1, 100); // 1-100 arasında rastgele sayı
                    echo "<td>$randomNumber</td>";
                }
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo '<p style="text-align:center; color:red;">Lütfen geçerli bir sayı girin.</p>';
        }
    }
    ?>
</body>
</html>
