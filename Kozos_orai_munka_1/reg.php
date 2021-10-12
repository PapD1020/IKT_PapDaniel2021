        <form action="reg.php">
            <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label bold_style">User name</label>
                    <input type="text" class="form-control" id="userNameInput" pattern="[a-zA-Z'-'\s]*" required placeholder="Unknown User">
                    <small class="form-text text-muted" name="userInfo1"></small>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label bold_style">Email</label>
                    <input type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="userEmailInput" required placeholder="email@email.com">
                    <small class="form-text text-muted" name="userInfo1"></small>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput3" class="form-label bold_style">Full name</label>
                    <input type="text" class="form-control" id="userFullNameInput" required placeholder="Full Name">
                    <small class="form-text text-muted" name="userInfo1"></small>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput4" class="form-label bold_style">Password</label>
                    <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}" id="userPasswordInput" required placeholder="Password123$">
                    <small class="form-text text-muted" name="userInfo1"></small>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput5" class="form-label bold_style">Password again</label>
                    <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}" id="userPasswordInput2" required placeholder="Password again">
                    <small class="form-text text-muted" name="userInfo1"></small>
                </div>

                <div>
                    <button id="registerButton" type="submit" class="btn btn-primary bold_style">Register</button>
                    <a class="inactiveButton" href="index.php?id=log">Login</a>
                </div>
            </div>
        </form>