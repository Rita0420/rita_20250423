<?php include "data.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
        </tr>
        <?php foreach ($data as $key => $value): ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['name'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>