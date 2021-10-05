<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div class="mb-3">
        <label class="form-label bold_style">User name</label>
        <input type="text" class="form-control" name="userName1" placeholder="">
        <small class="form-text text-muted" name="userInfo1">User name can not contain special characters!</small>
    </div>
    <div class="mb-3">
        <label class="form-label bold_style">Password</label>
        <input type="password" class="form-control" name="userPass1" placeholder="">
        <small class="form-text text-muted" name="userInfo2">Password can not contain special characters!</small>
    </div>

    <div>
        <button id="registerButton" type="submit" class="btn btn-primary bold_style">Login</button>
        <a class="inactiveButton" href="index.php?id=reg">Register</a>
    </div>
</form>