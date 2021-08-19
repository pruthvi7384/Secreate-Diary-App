<?php
    include 'top.php'; 
    $email='';
    $password='';
    $msg='';
    if(isset($_POST['signup'])){
        $email = mysqli_escape_string($con,$_POST['email']);
        $password = mysqli_escape_string($con,$_POST['password']);
        $sql_fetch = mysqli_query($con,"SELECT * FROM user WHERE email = '$email'");
        if(mysqli_num_rows($sql_fetch)>0){
            $msg="  <div class='msg'>
                        <p>Your Alredy Signup Please <a href='login.php'>Login Now !</a></p>
                    </div>";
        }else{
             mysqli_query($con,"INSERT INTO user(email,password) VALUES('$email','$password')");
             header("Location:login.php");
        }
       
    }
?>
<!-- Signup Form -->
    <div class="background-container d-flex">
        <div class="row">
            <div class="headding">
                <h1>Secret Diary</h1>
                <p>Store your thoughts parmanently and securely</p> 
                <h3>Interested? Sign Up Now.</h3>
               <?php echo $msg; ?>
            </div>
            <div class="form_body">
                <form  method="POST" action="">
                    <div class="input">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="input">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="button_sing d-flex">
                        <button type="submit" name="signup">Signup Now</button>
                        <a href="login.php">Login Now</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!--X- Signup Form -X-->
<?php include 'footer.php'; ?>