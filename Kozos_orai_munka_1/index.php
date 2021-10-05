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

    <title>KOM1 - Front page</title>
</head>
<body>
    <div class="container border_bottom">
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

    <div class="container fixed-bottom border_top">
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