
<?php
    include '../components/header.php';
?>



    <div class="loginform">
        <div class="formstyle forms form-style">
            <h1>Login</h1>
            <form method="post">
                <div class="txt_field">
                    <input type="text" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txt_field">
                    <input type="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <input type="submit" value="Login">
                <div class="signupbtn">
                    Not a member? <a href="#" onclick="changeForm(1)">Signup</a>
                </div>
            </form>
        </div>
        <div class="formstyle forms hidden">
            <h1>Create your Account</h1>
            <form method="post">
                <div class="txt_field">
                    <input type="text" required>
                    <span></span>
                    <label>Firstname</label>
                </div>
                <div class="txt_field">
                    <input type="text" required>
                    <span></span>
                    <label>Lastname</label>
                </div>
                <div class="txt_field">
                    <input type="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <input type="submit" value="Signup">
                <div class="signupbtn">
                    Already a member? <a href="#" onclick="changeForm(0)">Login</a>
                </div>
            </form>
        </div>
    </div>
    


<?php
    include '../components/footer.php';
?>