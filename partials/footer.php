<div class="footer row bg-success pt-5">
        <?php 
            if(isset($_SESSION['email_success'])){
                echo "<div class='alert alert-success'>". $_SESSION['email_success']. "</div>";
                unset($_SESSION['email_success']);
            }
        
        
        ?>    
        <div class="col-md-4">Some text goes here</div>

            <div class="col-md-4">
                <h3>Location</h3>
                <p>No 5-8 Kafanchan Street, <br>Lekki Epe, <br>Lagos State, Nigeria</p>

            </div>
            <div class="col-md-4">
                <h3 class="text-center">Contact Us</h3>
                <form action="process/contact_process.php" method="POST">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                    
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" id="email" class="form-control" required placeholder="enter email here..">

                    <label for="">Message</label>
                    <textarea name="message" id="message" class="form-control"></textarea>

                    <p>
                        <button  name="btn_contact" class=" btn btn-primary col-12 mt-2 cust">Contact us</button>
                    </p>

                </form>
            </div>
          </div>