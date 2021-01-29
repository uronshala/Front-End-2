
<?php
    include 'header.php';
?>

<body>
    <!--navbar-->
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
    <!---form-->
        <form>
        <div class="contact">
            <div class="contactbox">
                <div class="left">
                    <div class="right">
                        <h2>Contact</h2>
                        <input type="text" class="field" placeholder="Name" required>
                        <input type="text" class="field" placeholder="Surname" required>
                        <input tpye="emaili" class="field" placeholder="Email" required>
                        <textarea class="area" rows="4" cols="50" placeholder="Type here" required></textarea>
                        <button type="submit" name="submit" class="btn-send">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

<?php
    include 'footer.php';
?>