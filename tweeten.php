<?php
// session_start();
require_once("Index.php");

// $selectPost = $conn->prepare("SELECT * FROM posts where user_id = :user_id ORDER BY post_id DESC");
$selectPost = $conn->prepare("SELECT posts.* , users.username FROM posts INNER JOIN users ON posts.user_id = users.user_id WHERE posts.user_id = :user_id ORDER BY post_id DESC");
$selectPost->bindParam(":user_id", $user_id);
$selectPost->execute();

while ($row = $selectPost->fetch(PDO::FETCH_ASSOC)) {
    $post_text = $row['post_content'];
    $post_date = $row['post_date'];
    $post_img = $row['upload_image'];
    $user_name = $row['username'];


    ?>

    <div class="tweet_box">
        <div class="tweet_left"><img src="RAlogo.jpeg"></div>

        <div class="tweet_body">
            <div class="tweet_header">
                <p class="tweet_name"> <?php echo $user_name;  ?></p>
                <p class="tweet_username"> @code</p>
                <p class="tweet_date">
                    <?php echo $post_date = date('H d'), strtotime($post_date); ?>
                </p>
            </div>

            <p class="tweet_text">
                <?php echo $post_text; ?>
            </p>
            <?php
            if($post_img) {
                ?>
                <img class="post-img" id="uploadpost-img" src='<?php echo $post_img ?>'>
            <?php   
        }
            ?>

            <div class="tweet_icons">

                <a href=""><i class="fa-regular fa-comment"></i></a>
                <a href=""><i class="fa-regular fa-heart"></i></a>
                <a href="javascript:void(0);"
                    onclick="updatePost('<?php echo $row['post_content']; ?>', '<?php echo $row['post_id']; ?>', '<?php echo $row['upload_image']; ?>')"><i
                        class="fa-solid fa-square-caret-up"></i></a>
            </div>
        </div><br><br>

        <!-- Delete -->
        <div class="tweet_del">
            <div class="dropdown">
                <!-- <button class="dropbtn"><span class="fa fa-ellipsis-h"></span></button> -->
                <a href="function.php?del=<?php echo $row['post_id']; ?>"><i class="fa-solid fa-xmark"></i></a>
                <div class="dropdown-content">
                </div>
            </div>
        </div>
    </div>
    <?php

    if (isset($_GET["del"])) {
        $Del_ID = $_GET["del"];
        $deletePost = $conn->prepare("DELETE FROM posts WHERE post_id = :post_id");
        $deletePost->bindParam(":post_id", $Del_ID);
        // $selectPost->bindParam(":post_text",$post_text); 
        $deletePost->execute();

        if ($deletePost) {
            header("location:function.php");
            exit;
        } else {
            echo "Er is een fout opgetreden bij het verwijderen van de post.";
        }
    }
}

?>

<body>

    <script>
        function updatePost(postText, postId, postimg) {
            console.log(postId, postText)
            const blur = document.getElementById("blur");
            blur.classList.add('active');
            document.getElementById("updatepost-id").value = postId;
            document.getElementById("updatepost-text").innerText = postText;
            document.getElementById("uploadpost-img").innerText = postimg;


            document.getElementById('popup-window').classList.add('popup-show')
            document.getElementById('popup-window').classList.remove('popup-close')
        }
        
    
       
        
    </script>
</body>