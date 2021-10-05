<?php
    include('classes.php');
    
    if(isset($_POST['userName1']) && isset($_POST['userPass1'])){
        //Példányosítás
        $log = new LoginCheck($_POST['userName1'], $_POST['userPass1']);
    }
    else{
        $log = new LoginCheck("", "");
    }
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div class="mb-3">
        <label class="form-label bold_style">User name</label>
        <input type="text" class="form-control" name="userName1" placeholder="">
        <small class="form-text text-muted" name="userInfo1"><?php echo $log->getUserNameError();?></small>
    </div>
    <div class="mb-3">
        <label class="form-label bold_style">Password</label>
        <input type="password" class="form-control" name="userPass1" placeholder="">
        <small class="form-text text-muted" name="userInfo2"><?php echo $log->getPasswordError();?></small>
    </div>

    <div>
        <button id="registerButton" type="submit" class="btn btn-primary bold_style">Login</button>
        <a class="inactiveButton" href="index.php?id=reg">Register</a>
    </div>
</form>