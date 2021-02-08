
<?php
    include '../components/header.php';
?>



<div class="loginform">
        <form action="../code/LoginVerify.php" method="post" >
            <div class="formstyle forms form-style">
                <h1>Login</h1>
                <div class="txt_field">
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="txt_field">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <input type="submit" name="login-btn" value="Login">
                <div class="signupbtn">
                    Not a member? <a href="#" onclick="changeForm(1)">Signup</a>
                </div>
            </div>
            <div class="formstyle forms hidden">
                <h1>Create your Account</h1>
                <div class="txt_field">
                    <input type="text" name="register-username" placeholder="Username">
                </div>
                <div class="txt_field">
                    <input type="text" name="register-lastname" placeholder="Lastname">
                </div>
                <div class="txt_field">
                    <input type="password" name="register-password" placeholder="Password">
                </div>
                <input type="submit" name="register-btn" value="SignUp">
                <div class="signupbtn">
                    Already a member? <a href="#" onclick="changeForm(0)">Login</a>
                </div>
            </div>
        </form>
    </div>
    


<?php
    include '../components/footer.php';
?>