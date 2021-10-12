<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="my_css/my_style.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="my_javascript/my_script.js"></script>
    <script src="JQuery/JQuery.js"></script>

    <title>KOM1 - Front page</title>
</head>
<body>
    <div class="container w-50 shadow-lg mb-5">
        <div class="row justify-content-md-center bold_style to_center padding10">
            <div class="col col-lg-3">
                Logo
            </div>
            <div class="col-md-auto">
                <h2>Header</h2>
            </div>
            <div class="col col-lg-3">
                Donate
            </div>
        </div>
    </div>

    <div class="container-fluid w-75 shadow-lg">
        <div class="row">
            <div class="col-sm-8 to_center">
                <p>Content</p>
            </div>

            <div class="col-sm-4 padding10">
                <?php
                    if(isset($_GET["id"]) && $_GET["id"] == "reg"){
                        include('reg.php');
                    }
                    else{
                        include('login.php');
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="container w-50 fixed-bottom shadow-lg mt-5">
        <div class="row justify-content-md-center bold_style to_center padding10">
            <div class="col col-lg-3">
                Privacy policy
            </div>
            <div class="col-md-auto">
                <h2>Footer</h2>
            </div>
            <div class="col col-lg-3">
                Contact
            </div>
        </div>
    </div>
</body>
</html>