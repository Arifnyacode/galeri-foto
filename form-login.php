<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <br>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                <div class="card-header">
                <h1>Login</h1>
            </div>
            <div class="card-body">
                <form action="beranda.php">
                    <label for="username">Username</label>
                    <input type="text" name="usernama" placeholder="enter your username" class="form-control">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="****">
                    belum punya akun Daftar <a href="index.php">disini</a> 
                    <br>
                    <br>
                    <input type="submit" value="Login" class="btn btn-primary">
                </form>
            </div>
                </div>
           
            </div>
           
        </div>
    </div>
</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</html>