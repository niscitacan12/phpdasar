<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container py-5">
        <div class="card w-50 justify-content-center mx-auto bq-light">
            <div class= "header">
            <h2 class="text-center pt-3">REGISTER</h2>
        </div>

            <form action="connect_Register.php" method="POST">
                <div class="card-body">
                    <div class="mb -3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" name="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="username">Username</label>
                <input class="form-control" type="username" name="username" required>
            </div>
            <div class="mb-3">
    <label for="exampleForControlInput1" class="form-label">password</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="password">
  </div>
                <div class="text-center pb-3">
                <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
            </div>
          <p class="text-center">sudah punya akun? <a href="login.php">login akun</a></p>
            </form>
        </div>
    </div>
</body>
</html>