<?php include 'include/functions.php' ?>
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

<body class="">

    <main class="form-signin w-100 m-auto">
        <form method="post" action="register-process.php">
            <img class="mb-4 d-block m-auto" src="assets/img/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal text-center">Sign up</h1>
            <div class="row mb-2">
                <div class="form-group col-6">
                    <input type="text" class="form-control rounded <?php echo isset($_SESSION['errors']['firstName']) ? 'is-invalid' : '' ?> " value="<?php echo isset($_SESSION['old']) ? $_SESSION['old']['firstName'] : '' ?>" placeholder="FirstName" name="firstName">
                    <div class="invalid-feedback">
                        <?php echo isset($_SESSION['errors']['firstName']) ?  $_SESSION['errors']['firstName'] : ''; ?>
                    </div>
                </div>
                <div class="form-group col-6">
                    <input type="text" class="form-control <?php echo isset($_SESSION['errors']['surName']) ? 'is-invalid' : '' ?> rounded" placeholder="SurName" name="surName" value="<?php echo isset($_SESSION['old']) ? $_SESSION['old']['surName'] : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo isset($_SESSION['errors']['surName']) ?  $_SESSION['errors']['surName'] : ''; ?>
                    </div>
                </div>
            </div>
            <div class="form-group col-12 mb-2">
                <input type="text" class="form-control <?php echo isset($_SESSION['errors']['email']) ? 'is-invalid' : '' ?> rounded" value="<?php echo isset($_SESSION['old']) ? $_SESSION['old']['email'] : '' ?>" placeholder="Mobile Number or Email Address" name="email">
                <div class="invalid-feedback">
                    <?php echo isset($_SESSION['errors']['email']) ?  $_SESSION['errors']['email'] : ''; ?>
                </div>
            </div>
            <div class="form-group col-12 mb-2">
                <input type="password" class="form-control <?php echo isset($_SESSION['errors']['password']) ? 'is-invalid' : '' ?> rounded" placeholder="New Password" name="password">
                <div class="invalid-feedback">
                    <?php echo isset($_SESSION['errors']['password']) ?  $_SESSION['errors']['password'] : ''; ?>
                </div>
            </div>
            <div class="col-12 mb-2">
                <label class="text-lef mb-1" for="">Date of birth</label>
                <div class="row">
                    <div class="col-4 form-group">
                        <!-- <select class="form-control" name="date" id="date">
                            <option value="" disabled selected hidden>Date</option>
                        </select> -->
                        <input type="number" name="date" class="form-control <?php echo isset($_SESSION['errors']['date']) ? 'is-invalid' : '' ?>" value="<?php echo isset($_SESSION['old']) ? $_SESSION['old']['date'] : '' ?>" placeholder="date">
                        <div class="invalid-feedback">
                            <?php echo isset($_SESSION['errors']['date']) ?  $_SESSION['errors']['date'] : ''; ?>
                        </div>
                    </div>
                    <div class="col-4 form-group">
                        <!-- <select class="form-control" name="month" id="month">
                            <option value="" disabled selected hidden>Month</option>
                        </select> -->
                        <input type="number" name="month" class="form-control <?php echo isset($_SESSION['errors']['month']) ? 'is-invalid' : '' ?>" value="<?php echo isset($_SESSION['old']) ? $_SESSION['old']['month'] : '' ?>" placeholder="month">
                        <div class="invalid-feedback">
                            <?php echo isset($_SESSION['errors']['month']) ?  $_SESSION['errors']['month'] : ''; ?>
                        </div>
                    </div>
                    <div class="col-4 form-group">
                        <!-- <select class="form-control" name="year" id="year">
                            <option value="" disabled selected hidden>Year</option>
                        </select> -->
                        <input type="number" name="year" class="form-control <?php echo isset($_SESSION['errors']['year']) ? 'is-invalid' : '' ?>" value="<?php echo isset($_SESSION['old']) ? $_SESSION['old']['year'] : '' ?>" placeholder="year">
                        <div class="invalid-feedback">
                            <?php echo isset($_SESSION['errors']['year']) ?  $_SESSION['errors']['year'] : ''; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2 ">
                <label class="mb-1" for="">Gender</label>
                <div class="col-4 custom-control custom-radio custom-control-inline  ">
                    <div class="p-1 border rounded bg-white">
                        <label class="custom-control-label <?php echo isset($_SESSION['errors']['gender']) ? 'is-invalid' : '' ?>" for="male">Male</label>
                        <input type="radio" id="male" name="gender" class="custom-control-input" value="Male">
                    </div>
                    <div class="invalid-feedback">
                        <?php echo isset($_SESSION['errors']['gender']) ?  $_SESSION['errors']['gender'] : ''; ?>
                    </div>
                </div>

                <div class="col-4 custom-control custom-radio custom-control-inline">
                    <div class="p-1 border rounded bg-white">
                        <label class="custom-control-label" for="female">Female</label>
                        <input type="radio" id="female" name="gender" class="custom-control-input" value="Female">
                    </div>
                </div>
                <div class="col-4 custom-control custom-radio custom-control-inline">
                    <div class="p-1 border rounded bg-white">
                        <label class="custom-control-label" for="orther">Orther</label>
                        <input type="radio" id="orther" name="gender" class="custom-control-input" value="Orther">
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <p class="text-muted"><small>People who use our service may have uploaded your contact information to Facebook. Learn more.</small></p>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
            <p class="mt-5 mb-3 text-center text-muted">&copy; 2017–2022</p>
        </form>
    </main>

</body>

</html>
<?php
unset($_SESSION['errors']);
unset($_SESSION['old']);
?>