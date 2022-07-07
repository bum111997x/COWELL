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
        <form>
            <img class="mb-4 d-block m-auto" src="assets/img/bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal text-center">Sign up</h1>
            <div class="row mb-2">
                <div class="form-group col-6">
                    <input type="text" class="form-control rounded" placeholder="FirstName">
                </div>
                <div class="form-group col-6">
                    <input type="text" class="form-control rounded" placeholder="SurName">
                </div>
            </div>
            <div class="form-group col-12 mb-2">
                <input type="text" class="form-control rounded" placeholder="Mobile Number or Email Address">
            </div>
            <div class="form-group col-12 mb-2">
                <input type="password" class="form-control rounded" placeholder="New Password">
            </div>
            <div class="col-12 mb-2">
                <label class="text-lef mb-1" for="">Date of birth</label>
                <div class="row">
                    <div class="col-4 form-group">
                        <select class="form-control" name="date" id="date">
                            <option value="" disabled selected hidden>Date</option>
                        </select>
                    </div>
                    <div class="col-4 form-group">
                    <select class="form-control" name="month" id="month">
                            <option value="" disabled selected hidden>Month</option>
                        </select>
                    </div>
                    <div class="col-4 form-group">
                    <select class="form-control" name="year" id="year">
                            <option value="" disabled selected hidden>Year</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <label class="mb-1" for="">Gender</label>
                <div class="col-4 custom-control custom-radio custom-control-inline  ">
                    <div class="p-1 border rounded bg-white">
                        <label class="custom-control-label" for="customRadioInline1">Male</label>
                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                    </div>
                </div>
                <div class="col-4 custom-control custom-radio custom-control-inline">
                    <div class="p-1 border rounded bg-white">
                        <label class="custom-control-label" for="customRadioInline2">Female</label>
                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                    </div>
                </div>
                <div class="col-4 custom-control custom-radio custom-control-inline">
                    <div class="p-1 border rounded bg-white">
                        <label class="custom-control-label" for="customRadioInline3">Orther</label>
                        <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
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