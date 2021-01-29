
<?php
    include 'header.php';
?>

<body>
    <!--navbar-->
    <header>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa fa-bars"></i>
            </label>
            <label class="logo">Wesell</label>
            <ul>
                <li><a href='index.php'>Home</a></li>
                <li><a href='products.php'>Products</a></li>
                <li><a href='about.php'>About</a></li>
                <li><a href='contact.php'>Contact</a></li>
                <li><a href='login.php'>Login</a></li>
            </ul>
        </nav>
    </header>
    <!--loginform-->
    <!---form-->
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
    <script src ='login.js'></script>


<?php
    include 'footer.php';
?>