<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="my_css/my_style.css">
    <script src="js/bootstrap.bundle.min.js"></script>

    <title>KOM1 - Front page</title>
</head>
<body>

    <div class="container">
        <div class="row justify-content-md-center bold_style to_center padding10">
            <div class="col col-lg-2">
                Logo
            </div>
            <div class="col-md-auto">
                <h2>Header</h2>
            </div>
            <div class="col col-lg-2">
                Donate
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <p>Content</p>
            </div>

            <div class="col-sm-4 padding10">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label bold_style">User name</label>
                    <input type="text" class="form-control" id="userNameInput" placeholder="Unknown User">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label bold_style">Email</label>
                    <input type="text" class="form-control" id="userEmailInput" placeholder="email@email.com">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput3" class="form-label bold_style">Password</label>
                    <input type="text" class="form-control" id="userPasswordInput" placeholder="Password123$">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput4" class="form-label bold_style">Full name</label>
                    <input type="text" class="form-control" id="userFullNameInput" placeholder="Full Name">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput5" class="form-label bold_style">Password</label>
                    <input type="text" class="form-control" id="userPasswordInput" placeholder="Password123$">
                </div>

                <div class="mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label bold_style" for="flexCheckDefault">
                        Aktív
                    </label>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary bold_style">Register</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container fixed-bottom">
        <div class="row justify-content-md-center bold_style to_center padding10">
            <div class="col col-lg-2">
                Privacy policy
            </div>
            <div class="col-md-auto">
                Footer
            </div>
            <div class="col col-lg-2">
                Contact
            </div>
        </div>
    </div>
</body>
</html>