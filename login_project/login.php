<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/./bootstrap.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #4646fa;
        }

        form {
            padding: 20px;
            margin: 20px;
            width: 450px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <form action="./detalis.php" method="POST">
        <h1>Login</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Full Name</label>
            <input type="email" class="form-control" name="email" placeholder="Entar your name or email" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Entar your password" required>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        <a href="./registration.php">create a new account</a>
    </form>
</body>

</html>