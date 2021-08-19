<?php
    include 'top.php';
    include 'navigation_bar.php';
    $id='';
    $user_id='';
    $sel='';
    $topic='';
    $subject='';
    $update_subject='';
    
    if(!isset($_SESSION['IS_LOGGIN'])){
        header('Location:login.php');
    }

    $user_id = $_SESSION['USER_ID'];

    if(isset($_GET['id']) && $_GET['id']>0){
        $id=mysqli_escape_string($con,$_GET['id']);
        $sel=mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM dairy_topic WHERE id='$id'"));
        $subject = $sel['subject'];
        $topic = $sel['topic_name'];
    }
    if(isset($_POST['update'])){
        $subject =mysqli_escape_string($con,$_POST['contain_diary']);
        mysqli_query($con,"UPDATE dairy_topic SET user_id='$user_id',topic_name='$topic',subject='$subject' WHERE id='$id'");
    }
?>
<!-- Containt -->
    <div class="containt_diary">
        <form action="" method="post">
            <div class="top_bar d-flex">
                <a href="index.php"><i class="fas fa-arrow-left"></i></a>
                <h1><?php echo $sel['topic_name']; ?></h1>
                <button type="submit" name="update"><i class="fas fa-edit"></i></button>
            </div>
            <div class="upadate">
                <p>Updaed On : <span><?php echo date("d F Y h : i : s", strtotime($sel['added_on'])) ?></span> </p>
            </div>
            <div class="container_dayri">
                <textarea name="contain_diary" id="" cols="30" rows="10"><?php echo $subject;?> </textarea>
            </div>
        </form>
    </div>
<!--X- Containt -X-->
<?php include 'footer.php'; ?>