<?php
    include('classes.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $con = new Connection();
        $reg = new RegCheck($_POST['userName'], $_POST['password'], $_POST['fullName'], $_POST['userEmail']);
    }
?>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>id=reglap" method="POST">
            <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label text_color1 bold_style">User name</label>
                    <input type="text" class="form-control" id="userNameInput" pattern="[a-zA-Z'-'\s]*" required placeholder="Unknown User">
                    <small class="form-text text-muted" name="userInfo1"></small>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label text_color1 bold_style">Email</label>
                    <input type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="userEmailInput" required placeholder="email@email.com">
                    <small class="form-text text-muted" name="userInfo1"></small>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput3" class="form-label text_color1 bold_style">Full name</label>
                    <input type="text" class="form-control" id="userFullNameInput" required placeholder="Full Name">
                    <small class="form-text text-muted" name="userInfo1"></small>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput4" class="form-label text_color1 bold_style">Password</label>
                    <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}" id="userPasswordInput" required placeholder="Password123$" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                    <small class="form-text text-muted" name="userInfo1"></small>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput5" class="form-label text_color1 bold_style">Password again</label>
                    <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}" id="userPasswordInput2" required placeholder="Password again" title="The two passwords must be identical!">
                </div>
                <div class="mb-2" id="msg"></div><!--Jeszó vizsgálat eredményének a megjelenítése-->
                <div>
                    <button id="registerButton" type="submit" class="btn btn-primary color5 bold_style">Register</button>
                    <a class="inactiveButton" href="index.php?id=log">Login</a>
                </div>
            </div>
        </form>

<script>
    //A két jeszó mező összehasonlítása
    //Az első jelszó mező id="Password"
    //A A második jelszó mező id="ConfirmPassword"
    $(document).ready(function(){
        $("#msg").html("⠀");
        $("#userPasswordInput2").keyup(function(){
             if ($("#userPasswordInput").val() != $("#userPasswordInput2").val()) {
                 $("#msg").html("Passwords do not match").css(style_error);
             }else{
                 $("#msg").html("Passwords matched").css(style_ok);
            }
      });
    });

    var style_error = {
        color: "#ff5e00",
        fontWeight: "bold"
    };

    var style_ok = {
        color: "#41c300",
        fontWeight: "bold"
    };
</script>