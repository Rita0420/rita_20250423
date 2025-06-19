<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>form->php</title>
        <style>
            .myForm{
                width: 30vw;
                background-color: antiquewhite;
                margin: auto;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            input{
                margin-top: 2vh;
                width: 10vw;
            }
            .ans {
                width: 30vw;
                height: 10vh;
                border: 1px solid;
                margin: auto;
                font-size: 3em;
                text-align: center;
            }
            </style>
</head>
<body>
    <form action="./data.php" method="get" class="myForm">
        <input type="text" name="inputA" class="inputA" value="10">
        <input type="text" name="math" class="math" value="+">
        <input type="text" name="inputB" class="inputB" value="5">
        <input type="submit" value="計算">
    </form>
    <br>
    <hr>
    <div class="ans">
        <?php include_once './data.php';?>
    </div>
</body>
</html>