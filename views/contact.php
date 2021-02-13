
<?php
    include '../components/header.php';
    if (isset($_POST['submit'])){
        echo "<script type='text/javascript'>alert('Mesazhi juaj u dergua me sukses !');</script>";
    }
    
?>


    <!---form-->
        <form action="../code/contactVerify.php" method="post" onkeydown="validateContact()">
        <div class="contact">
            <div class="contactbox">
                <div class="left">
                    <div class="right">
                        <h2>Contact</h2>
                        <input type="text" name="emri" class="field" placeholder="Name" required>
                        <input type="text" name="mbiemri" class="field" placeholder="Surname" required>
                        <input tpye="email" name="mail" class="field" placeholder="Email" required>
                        <textarea class="area" name="tekst" rows="4" cols="50" placeholder="Type here" required></textarea>
                        <button type="submit" name="submit" class="btn-send">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

<?php
    include '../components/footer.php';
?>