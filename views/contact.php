
<?php
    include '../components/header.php';
?>


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
    include '../components/footer.php';
?>