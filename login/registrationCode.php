<?=
session_start();
require 'connect.php';

if (isset($_POST["submit"])) {

    $firstName = !empty($_POST['first_name']) ? $_POST['first_name'] : null;
    $lastName = !empty($_POST['last_name']) ? $_POST['last_name'] : null;
    $email = !empty($_POST['email']) ? $_POST['email'] : null;
    $password = !empty($_POST['password']) ? $_POST['password'] : null;
    $gender = !empty($_POST['gender']) ? $_POST['gender'] : null;
    $dob = !empty($_POST['dob']) ? $_POST['dob'] : null;

    $address = !empty($_POST['address']) ? $_POST['address'] : null;
    $phoneNumber = !empty($_POST['phone_number']) ? $_POST['phone_number'] : null;

    if ($firstName && $lastName && $email && $password && $gender && $dob && $address && $phoneNumber) {
        $hashed_password = $password;

        $sql = "INSERT INTO users (user_first_name, user_last_name, user_gender, user_birth_date, user_address, user_phone_number, user_email, user_password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        try {
            $stmt = $connect->prepare($sql);

            $stmt->bindParam(1, $firstName);
            $stmt->bindParam(2, $lastName);
            $stmt->bindParam(3, $gender);
            $stmt->bindParam(4, $dob);
            $stmt->bindParam(5, $address);
            $stmt->bindParam(6, $phoneNumber);
            $stmt->bindParam(7, $email);
            $stmt->bindParam(8, $hashed_password);

            if ($stmt->execute()) {
                header("Location: registration.php");
                exit();
            } else {
                echo "An error occurred while entering data.";
            }
        } catch (PDOException $e) {
            echo "An error occurred while preparing the statement: " . $e->getMessage();
        }
    } else {
        echo "Please fill in all fields.";
    }
}
?>