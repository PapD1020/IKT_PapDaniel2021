        <form action="reg.php">
            <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label bold_style">User name</label>
                    <input type="text" class="form-control" id="userNameInput" placeholder="Unknown User">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label bold_style">Email</label>
                    <input type="text" class="form-control" id="userEmailInput" placeholder="email@email.com">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput3" class="form-label bold_style">Full name</label>
                    <input type="text" class="form-control" id="userFullNameInput" placeholder="Full Name">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput4" class="form-label bold_style">Password</label>
                    <input type="text" class="form-control" id="userPasswordInput" placeholder="Password123$">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput5" class="form-label bold_style">Password again</label>
                    <input type="text" class="form-control" id="userPasswordInput2" placeholder="Password again">
                </div>

                <div class="mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label bold_style" for="flexCheckDefault">
                        Aktív
                    </label>
                </div>

                <div>
                    <button id="registerButton" type="submit" class="btn btn-primary bold_style">Register</button>
                    <a class="inactiveButton" href="index.php?id=log">Login</a>
                </div>
            </div>
        </form>