<?php 
    session_start();  // Make sure this is the first line of the script


if (!isset($_SESSION['user_id'])) {
    $_SESSION['error'] = 'How did you get here without logging in!';
    header("location: login.php");
    exit();
} else {
    $user_id = $_SESSION['user_id'];
    require_once 'includes/header.php';
    include 'model/User.php';

    $user = new User();
    $userDetails = $user->getUserById($user_id);
    
    if (!$userDetails) {
        echo "Error fetching user details.";
        exit();
    }
}
?>


        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        
            <?php 
 include "includes/footer.php";
 ?>