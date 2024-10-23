<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">

    <style>
        table {
            margin: 20px;
            padding: 30px;
        }

        .table #log {
            background-color: #0000ff;
            color: white;
            font-size: 20px;
            border: 1px solid #0000ff;
            transition: 0.3s;
            border-radius: 10px;
            width: 100px;
        }

        .table #log:hover {
            background-color: #4646fa;
        }


        button {
            font-size: 13px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: white;
        }

        #de {
            background-color: #e10c1a;
            transition: 0.3s;
        }

        #de:hover {
            background-color: #f9313f;
        }

        #ed {
            background-color: green;
            transition: 0.3s;
        }

        #ed:hover {
            background-color: #419f41;
        }
    </style>
</head>

<body>
    <table class="table table-dark table-borderless">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <!-- <th>Password</th> -->
            <th><button onclick="myFunction()" id="log">Logout</button></th>
        </tr>
        <?php
        include "./connect.php";
        $sql = "SELECT * FROM `db`";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>" . $row["user_id"] . "</td>
                    <td>" . $row["user_name"] . "</td>
                    <td>" . $row["user_email"] . "</td>
                   <td>
                    <form action='delete.php' method='POST' style='display:inline-block;'>
                        <input type='hidden' name='user_id' value='" . $row["user_id"] . "'>
                        <button type='submit' id='de' class='btn btn-danger'>Delete</button>
                    </form>
                    |
                    <a href='edit.php?user_id=" . $row["user_id"] . "' id='ed' class='btn btn-success'>Edit</a>
                </td>
              </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No information</td></tr>";
        }
        ?>

    </table>


</body>
<script src="./js/bootstrap.js"></script>

<script>
    function myFunction() {

        if (confirm("Are you sure you're checking out?")) {

            alert("You have confirmed checkout.");

            window.location.href = "./login.php";

            alert("You have canceled the checkout.");
        }
    }
</script>


</html>