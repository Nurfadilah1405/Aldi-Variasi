<?php 
 
include 'dbcon.php';
 
error_reporting(0);
 
session_start();
 
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN | ALDI VARIASI</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    
    <link rel="stylesheet" type="text/css" href="style_login.css">

</head>

<body>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
 
    <div class="container">
        <form action="dashboard.php" method="POST" class="login-username">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="username" placeholder="Username" name="username" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
        </form>
        <div class="mb-3">
        <a href="index.php" class="btn btn-danger float-end"><i class="fas fa-fw fa-home"></i></a>
        </div>
    </div>
</body>
</html>