<?php
include "include/functions.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Signin Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="assets/css/css.css" rel="stylesheet">
    <link href="assets/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form action="login-process.php" method="post">
            <img class="mb-4" src="assets/img/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="text" class="form-control 
                <?php if(isset($_SESSION['errors']['email'])): ?> is-invalid <?php endif ?>
                      " id="floatingInput" placeholder="name@example.com" name="email" 
                      value="<?php echo isset($_SESSION['old']) ? $_SESSION['old']['email'] : '';?>">
                <label for="floatingInput">Email address</label>
                
                <div class="invalid-feedback">
                    <?php echo isset($_SESSION['errors']['email']) ?  $_SESSION['errors']['email'] : ''; ?>
                </div>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control <?php if(isset($_SESSION['errors']['password'])): ?> is-invalid <?php endif ?>" 
                    id="floatingPassword" placeholder="Password" name="password"
                    value="<?php echo isset($_SESSION['old']) ? $_SESSION['old']['password'] : '';?>">
                <label for="floatingPassword">Password</label>
                <div class="invalid-feedback">
                    <?php echo isset($_SESSION['errors']['password']) ? $_SESSION['errors']['password'] : '';?>
                </div>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="1" name="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
        </form>
    </main>

</body>

</html>
<?php 
unset($_SESSION['errors']);
unset($_SESSION['old']);
?>