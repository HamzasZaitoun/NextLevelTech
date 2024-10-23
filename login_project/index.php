<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
            margin: 50px;

        }

        .php-style button {
            background-color: #000;
            color: #fff;
            width: 300px;
            font-size: 30px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            transition: 0.3s;
        }

        .php-style button:hover {

            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <div class="php-style">
        <?php
        echo "<a href=./registration.php><button>Registration</button></a><br><br>";

        ?>



    </div>
</body>

</html>