<?php
require_once ("Index.php");
// session_start();

// $selectPost = $conn->prepare("SELECT posts.* , user_info.Username FROM posts INNER JOIN user_info ON posts.user_id = user_info.Id WHERE posts.user_id = :user_id ORDER BY post_id DESC");
$selectPost = $conn->prepare("SELECT posts.* , user_info.Username FROM posts INNER JOIN user_info ON posts.user_id = user_info.Id ORDER BY post_id DESC");

// $selectPost->bindParam(":user_id", $user_id);
$selectPost->execute();



while ($row = $selectPost->fetch(PDO::FETCH_ASSOC)) {
    $post_text = $row['post_content'];
    $post_date = $row['post_date'];
    $post_img = $row['upload_image'];
    $user_name = $row['Username'];
    $post_id = $row['post_id'];
    $user_id= $row['user_id'];
    
    
    $selectLikes = $conn->prepare("SELECT * FROM likes WHERE post_id = :post_id");
    $selectLikes->bindParam(":post_id", $post_id);
    $selectLikes->execute();
    $likes_count = $selectLikes->rowCount();
    // ............................

    $selectComment = $conn->prepare("SELECT * FROM comments WHERE post_id = :post_id");
    $selectComment->bindParam(":post_id", $post_id);
    $selectComment->execute();
    $comments_count = $selectComment->rowCount();
    // ............................
    
    require ("tweetStructure.php");



}



?>

<body>

    <script>
        function updatePost(postText, postId, postImg) {
            console.log(postId, postText)
            const blur = document.getElementById("blur");
            blur.classList.add('active');
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
</body>