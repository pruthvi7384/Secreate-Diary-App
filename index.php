<?php
    include 'top.php';
    include 'navigation_bar.php';
    $user_id ='';
    $topic_name='';
    if(!isset($_SESSION['IS_LOGGIN'])){
        header('Location:signup.php');
    }
    $user_id = $_SESSION['USER_ID'];

    if(isset($_GET['type']) && $_GET['type']!=='' && isset($_GET['id']) && $_GET['id']>0){
        $id=mysqli_escape_string($con,$_GET['id']);
        $type=mysqli_escape_string($con,$_GET['type']);
        if($type=='delete'){
            mysqli_query($con,"DELETE FROM dairy_topic WHERE id='$id'");
        }
    }
    if(isset($_POST['add'])){
        $topic_name = mysqli_escape_string($con,$_POST['topic']);
        $sql = mysqli_query($con,"SELECT * FROM dairy_topic WHERE topic_name='$topic_name' AND 	user_id='$user_id'");
        if(mysqli_num_rows($sql)>0){
           echo "<script>alert('Your Are Alrady Added this $topic_name topic name please add another topic name');</script>";
        }else{
            mysqli_query($con,"INSERT INTO dairy_topic(user_id,topic_name,subject) VALUES ('$user_id','$topic_name','Add Here Your Diary Contain Heher....')");
        }
    }
    $sql_show = mysqli_query($con,"SELECT * FROM dairy_topic WHERE user_id='$user_id'");
?>
<!-- Diary Topic -->
    <div class="dairy_topic">
        <div class="diary_topic_row d-flex">
            <form action="" method="post">
                <div class="toic_add d-flex">
                    <input type="text" name="topic" placeholder="Add Your Topic Heare.." required>
                    <button type="submit"  name="add"><i class="fas fa-plus"></i></button>
                </div>
            </form>
        </div>
        <div class="diary_display">
            <div>
                <h2>Your Added Topic</h2>
            </div>
            <div class="topic_display">
                <?php if(mysqli_num_rows($sql_show)>0){?>
                <?php while($res_row=mysqli_fetch_assoc($sql_show)){?>
                    <div class="topic_body d-flex">
                        <p><?php echo $res_row['topic_name']; ?></p>
                        <ul class="d-flex">
                            <li>
                                <a href="containt.php?id=<?php echo $res_row['id']; ?>"><i class="fas fa-edit"></i></a>
                            </li>
                            <li>
                                <a href="?id=<?php echo $res_row['id']; ?>&type=delete"><i class="fas fa-trash-alt"></i></a>
                            </li>
                        </ul>
                    </div>
                <?php } ?>
                <?php }else{
                    echo "<p style='text-align:center;color:red;font-weight:bold'>No Topic Added Please Add Any Topic Name !</p>";
                }?>
            </div>
        </div>
    </div>
<!-- Diary Topic -->
<?php include 'footer.php'; ?>