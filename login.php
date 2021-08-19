<?php
    include 'top.php';
    $email='';
    $password='';
    $msg='';
    if(isset($_POST['login'])){
        $email = mysqli_escape_string($con,$_POST['email']);
        $password = mysqli_escape_string($con,$_POST['password']);
        $sql_fetch = mysqli_query($con,"SELECT * FROM user WHERE email = '$email' AND password = '$password'");
        if(mysqli_num_rows($sql_fetch)>0){
            $res=mysqli_fetch_assoc($sql_fetch);
            $_SESSION['IS_LOGGIN']='yes';
            $_SESSION['USER_EMAIL']=$res['email'];
            $_SESSION['USER_ID']=$res['id'];
            header("Location:index.php");
        }else{
            $msg="  <div class='msg'>
                    <p>Please Enter Correct Email and Password Otherwise <a href='index.php'>SignUp Now !</a></p>
                </div>";
        }
       
    }
?>
<!-- Signup Form -->
    <div class="background-container d-flex">
        <div class="row">
            <div class="headding">
                <h1>Secret Diary</h1>
                <p>Store your thoughts parmanently and securely</p> 
                <h3>Login Using Username And Password</h3>
                <?php echo $msg; ?>
            </div>
            <div class="form_body">
                <form method="post" action="">
                    <div class="input">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="input">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="button_sing d-flex">
                        <button type="submit" name="login">Login Now</button>
                        <a href="index.php">Signup Now</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!--X- Signup Form -X-->
<?php include 'footer.php'; ?>