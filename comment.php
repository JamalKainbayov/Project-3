<?php
require ("Index.php");
// session_start();

$post_id = $_GET['id'];
$user_id = $_SESSION['Id'];
// $username=$_SESSION['username'];


$selectPost = $conn->prepare("SELECT posts.* , user_info.Username FROM posts INNER JOIN user_info ON posts.user_id = user_info.Id WHERE post_id = :post_id");
$selectPost->bindParam(":post_id", $post_id);
$selectPost->execute();

$row = $selectPost->fetch(PDO::FETCH_ASSOC);
$post_text = $row['post_content'];
$post_date = $row['post_date'];
$post_img = $row['upload_image'];
$user_name = $row['Username'];
$post_id = $row['post_id'];
$user_id = $row['user_id'];


$selectLikes = $conn->prepare("SELECT * FROM likes WHERE post_id = :post_id");
$selectLikes->bindParam(":post_id", $post_id);
$selectLikes->execute();
$likes_count = $selectLikes->rowCount();


// require_once ("tweetStructure.php");
$selectComment = $conn->prepare("SELECT * FROM comments WHERE post_id = :post_id");
$selectComment->bindParam(":post_id", $post_id);
$selectComment->execute();
$comments_count = $selectComment->rowCount();

?>

<!-- add textarea --------------------------------------------------------------------------------------------->
<div class="grid-container" id="blur">

    <div class="sideBar">
    </div>
    <div class="main">

        <p>
            <a href="function.php" class="back"><i class="fa-solid fa-chevron-left"></i></a>
            <?php require_once ("tweetStructure.php"); ?>

        </p>
        <p class="page_titel">comment</p>
        <div class="tweet_box tweet_add">
            <div class="tweet_left">
                <img src="RAlogo.jpeg" alt="">
            </div>

            <div class="tweet_body">

                <form method="post" action="./commentFunctions/addComment.php" enctype="multipart/form-data">
                    <textarea name="comment_text" id="update" cols="100%" rows="3"
                        placeholder="what's happening?"></textarea>
                    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
                    <script
                        src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>


                    <div class="tweet_icons-wrapper">
                        <div class="content">
                            <div class="tweet_icons-add">
                                <label for="img-add-input" class="inputimg"><i
                                        class="fa-regular fa-image icon"></i></label>
                                <input type="file" class="img-input" name="image" value="image" id="img-add-input"
                                    accept="image/*">

                            </div>
                            <div id="image-add-preview"></div>
                        </div>
                        <input hidden class="img-input" name="post_id" value="<?php echo $post_id ?>">
                        <button class="btn btn-dark" type="submit" name="btn_add_comment"><i
                                class="fa-solid fa-paper-plane"></i></button>

                    </div>
                </form>
            </div>
        </div>
        <?php

        $selectcomment = $conn->prepare("SELECT comments.* , user_info.Username FROM comments INNER JOIN user_info ON comments.user_id = user_info.Id where post_id= :post_id");
        // $selectPost = $conn->prepare("SELECT posts.* , user_info.Username FROM posts INNER JOIN user_info ON posts.user_id = user_info.Id ORDER BY post_id DESC");
        // $selectcomment = $conn->prepare("SELECT * FROM comments");
        $selectcomment->bindParam(":post_id", $post_id);
        $selectcomment->execute();

        while ($row = $selectcomment->fetch(PDO::FETCH_ASSOC)) {
            $comment_text = $row['comment'];
            $comment_date = $row['commenttime'];
            $comment_img = $row['Image_upload'];
            $user_name = $row['Username'];
            $user_id = $row['user_id'];
            ?>


        <div class="tweet_box">
            <div class="tweet_left"><img src="RAlogo.jpeg"></div>

            <div class="tweet_body">

                <div class="tweet_header">
                    <p class="tweet_name">
                        <?php echo $user_name; ?>
                    </p>
                    <p class="tweet_username"> @Chirpfy</p>
                    <p class="tweet_date">
                        <?php echo $comment_date; ?>
                    </p>
                </div>

                <p class="tweet_text">
                    <?php echo $comment_text; ?>
                </p>
                <?php
                if ($comment_img) {
                    ?>
                <img class="post-img" src='commentFunctions/<?php echo $comment_img ?>'>
                <?php
                }
                ?>

                <div class="tweet_icons">

                    <a href=""><i class="fa-regular fa-heart"></i></a>
                    <a href=""><i class="fa-regular fa-comment"></i></a>
                </div>

            </div><br><br>

            <!-- Delete / Edit-->
                <?php
                if ($user_id == $_SESSION['Id']):

                    ?>
                    <div class="tweet_del">
                        <div class="dropdown">
                            <button class="dropbtn"><span class="fa fa-ellipsis-h"></span></button>
                            <div class="dropdown-content">
                                <a href="javascript:void(0);"
                                    onclick="updateComment('<?php echo $row['comment']; ?>', '<?php echo $row['comment_id']; ?>', '<?php echo $row['Image_upload']; ?>')"><i
                                        class="fa-regular fa-pen-to-square edit"></i><span> edit</span></a>
                                <a href="./commentFunctions/deleteComment.php?del=<?php echo $row['comment_id']; ?>"><i
                                        class="fa-solid fa-xmark delete"></i><span> delete</span></a>
                            </div>

                        </div>
                    </div>
                    <?php
                endif
                ?>

            </div>
            <?php

        }
        ?>
    </div>
</div>
<!-- update comment HTML --------------------------------------------------------------------------------------------->

<?php
if ($user_id == $_SESSION['Id']):
    ?>
<div id="popup-window" class='popup-close'>
    <div id="close-btn">
        &times;
    </div>
    <div class="tweet_display">
        <div class="main">
            <div class="tweet_body ">
                <form method="post" action="./commentFunctions/updateComment.php" enctype="multipart/form-data">
                    <input type="hidden" id='updatecomment-id' name='comment_id'></input>
                    <input type="hidden" value="<?php echo $post_id ?>" name='post_id'></input>
                    <textarea name="comment_text" id="updatecomment-text" cols="100%" rows="3"
                        placeholder="update"></textarea>
                    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
                    <script
                        src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>
                    <div class="tweet_icons-wrapper">
                        <div class="tweet_icons-add">
                            <!-- <a href=""> <i class="fa-regular fa-image"></i></a> -->
                                <label for="img-update-input" class="inputimg"><i
                                        class="fa-regular fa-image icon"></i></label>
                                <input type="file" name="image-update" class="img-input" id="img-update-input"
                                    accept="image/*">

                            </div>
                            <div id="image-update-preview"></div>
                            <!-- <i class="fa-regular fa-face-smile"></i> -->
                        </div>
                        <button class="btn btn-dark btn-style" type="submit" name="btn_update_comment">opslaan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php
endif
?>

<!-- Update Post HTML-->
<div id="popup-window" class='popup-close'>
    <div id="close-btn">
        &times;
    </div>
    <div class="tweet_display">
        <div class="main">
            <div class="tweet_body">
                <form method="POST" action="function.php" enctype="multipart/form-data">
                    <input type="hidden" id='updatepost-id' name='post_id'></input>
                    <textarea name="post_text" id="updatepost-text" cols="100%" rows="3"
                        placeholder="update"></textarea>
                    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
                    <script
                        src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>

                    <div class="tweet_icons-wrapper">
                        <div class="tweet_icons-add">
                            <!-- <a href=""> <i class="fa-regular fa-image"></i></a> -->
                            <label for="img-update-input" class="inputimg"><i
                                    class="fa-regular fa-image icon"></i></label>
                            <input type="file" name="image-update" class="img-input" id="img-update-input"
                                accept="image/*">

                        </div>
                        <div id="image-update-preview"></div>
                        <!-- <i class="fa-regular fa-face-smile"></i> -->
                    </div>
                    <button class="btn btn-dark btn-style" type="submit" name="btn_update_post">opslaan</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Update Post -->

<script>
    const closeButton = document.getElementById('close-btn')

    closeButton.addEventListener('click', () => {
        document.getElementById("blur").classList.remove("activeUpdate");
        document.getElementById('popup-window').classList.remove('popup-show')
        document.getElementById('popup-window').classList.add('popup-close')
    })


    document.getElementById('img-add-input').addEventListener('change', function () {
        let file = this.files[0];
        if (file) showImage(file, 'image-add-preview')
    });


    //  ..............upload.................

    document.getElementById('img-update-input').addEventListener('change', function () {
        let file = this.files[0];
        if (file) showImage(file, 'image-update-preview')
    });

    function showImage(file, id) {
        var reader = new FileReader();
        reader.onload = function (event) {
            var img = document.createElement('img');
            img.classList.add('s-img')
            img.src = event.target.result;
            document.getElementById(id).innerHTML = ''; // Clear previous preview
            document.getElementById(id).appendChild(img);
        };
        reader.readAsDataURL(file);
    }
</script>
<script type="text/javascript">
    $('#update').emojioneArea({ pickerPosition: 'bottom' });

</script>
<script>
    function updateComment(comment, commentId, commentImg) {
        // console.log(postId, postText)
        const blur = document.getElementById("blur");
        blur.classList.add('activeUpdate');
        document.getElementById("updatecomment-id").value = commentId;
        document.getElementById("updatecomment-text").innerText = comment;

        let img = document.createElement('img');
        img.classList.add('s-img')
        img.src = "commentFunctions/" + commentImg;
        document.getElementById('image-update-preview').innerHTML = ''; // Clear previous preview
        document.getElementById('image-update-preview').appendChild(img);


        document.getElementById('popup-window').classList.add('popup-show');
        document.getElementById('popup-window').classList.remove('popup-close');

        $('#updatecomment-text').emojioneArea({ pickerPosition: 'bottom' });

    }

    function updatePost(postText, postId, postImg) {
        const blur = document.getElementById("blur");
        blur.classList.add('activeUpdate');
        document.getElementById("updatepost-id").value = postId;
        document.getElementById("updatepost-text").innerText = postText;

        let img = document.createElement('img');
        img.classList.add('s-img')
        img.src = postImg;
        document.getElementById('image-update-preview').innerHTML = ''; // Clear previous preview
        document.getElementById('image-update-preview').appendChild(img);


        document.getElementById('popup-window').classList.add('popup-show');
        document.getElementById('popup-window').classList.remove('popup-close');

        $('#updatepost-text').emojioneArea({ pickerPosition: 'bottom' });

    }

</script>