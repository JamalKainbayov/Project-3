<?php
require_once("Index.php");
$user_id=$_SESSION['user_id'];
$query = "SELECT * FROM posts where user_id = $user_id ORDER BY post_id DESC";
$data = mysqli_query($con, $query);

// $user_name="SELECT * FROM users where user_id = $user_id ORDER BY usernaam";
// $user = mysqli_query($con, $user_name);


while ($row = mysqli_fetch_assoc($data)) {
    $post_text = $row['post_content'];
    $post_date = $row['post_date'];

	
    ?>
    <div class="tweet_box">
        <div class="tweet_left"><img src="RAlogo.jpeg"></div>
        
        <div class="tweet_body">
          <div class="tweet_header">
              <p class="tweet_name"> code</p>
              <p class="tweet_username"> @code</p>
              <p class="tweet_date">
                <?php echo $post_date = date('H d'); ?>
              </p>
         </div>

        <p class="tweet_text">
            <?php echo $post_text; ?>
        </p>
        <div class="tweet_icons">
            <a href=""><i class="fa-regular fa-comment"></i></a>
            <a href=""><i class="fa-regular fa-heart"></i></a>
            <a href=""><i class="fa-solid fa-square-caret-up"></i></a>
        </div>
    </div><br><br>

    <div class="tweet_del">
        <div class="dropdown">
            <button class="dropbtn"><span class="fa fa-ellipsis-h"></span></button>
            <div class="dropdown-content">
                <a href="function.php?del=<?php echo $row['post_id']; ?>"><i class="fa-solid fa-trash-can"></i><span>
                        Delete</span></a>
            </div>
        </div>
    </div>
    </div>
    <?php
     if (isset($_GET["del"])) {
        $Del_ID = $_GET["del"];
        $sql = "DELETE FROM posts WHERE post_id = '$Del_ID'";
        $result = mysqli_query($con, $sql);

        if($result) {
            header("location: function.php");
            exit; // Het is een goede praktijk om de scriptuitvoering hier te beëindigen na een header-omleiding
        } else {
            echo "Er is een fout opgetreden bij het verwijderen van de post.";
        }
    }
}

?>