
<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])){

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = md5($_POST['password']);

    $query = mysqli_query(
        $conn,
        "SELECT * FROM admin
        WHERE username='$username'
        AND password='$password'"
    );

    if(mysqli_num_rows($query) > 0){

        $data = mysqli_fetch_assoc($query);

        $_SESSION['login'] = true;
        $_SESSION['id'] = $data['id'];
        $_SESSION['username'] = $data['username'];

        header("Location: dashboard.php");
        exit;

    }else{

        $error = "Username atau Password Salah!";

    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login Admin Gereja</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">

    <div class="row justify-content-center mt-5">

        <div class="col-md-4">

            <div class="card shadow">

                <div class="card-header bg-primary text-white text-center">

                    <h3>Login Admin Gereja</h3>

                </div>

                <div class="card-body">

                    <?php if(isset($error)){ ?>

                        <div class="alert alert-danger">
                            <?= $error; ?>
                        </div>

                    <?php } ?>

                    <form method="POST">

                        <div class="mb-3">

                            <label>Username</label>

                            <input
                            type="text"
                            name="username"
                            class="form-control"
                            required>

                        </div>

                        <div class="mb-3">

                            <label>Password</label>

                            <input
                            type="password"
                            name="password"
                            class="form-control"
                            required>

                        </div>

                        <button
                        type="submit"
                        name="login"
                        class="btn btn-primary w-100">

                            Login

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
