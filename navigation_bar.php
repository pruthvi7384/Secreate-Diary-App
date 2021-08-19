
<!-- Navigation Bar -->
    <div class="nav d-flex">
        <div class="nav_brand">
            <a href="#">Secret Diary</a>
        </div>
        <div class="nav_menu">
            <ul class="d-flex">
                <li>
                    <a href="#"><span>Welcome !</span><br><?php echo  $_SESSION['USER_EMAIL']; ?></a>
                </li>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
<!--X- Navigation Bar -X-->